/**
 * SMK MARHAS - Frontend Security Utilities
 * 
 * This file provides security utilities for frontend JavaScript:
 * 1. Global CSRF token setup for AJAX requests
 * 2. Safe DOM manipulation helpers
 * 3. Production console sanitization
 * 4. XSS prevention utilities
 */

(function () {
    'use strict';

    // ==========================================
    // 1. CSRF TOKEN SETUP FOR AJAX
    // ==========================================
    const csrfToken = document.querySelector('meta[name="csrf-token"]');

    if (csrfToken) {
        // Set up default headers for fetch API
        const originalFetch = window.fetch;
        window.fetch = function (url, options = {}) {
            options.headers = options.headers || {};

            // Only add CSRF for same-origin requests
            if (url.startsWith('/') || url.startsWith(window.location.origin)) {
                options.headers['X-CSRF-TOKEN'] = csrfToken.content;
                options.headers['X-Requested-With'] = 'XMLHttpRequest';
            }

            return originalFetch(url, options);
        };

        // Set up for XMLHttpRequest
        const originalOpen = XMLHttpRequest.prototype.open;
        XMLHttpRequest.prototype.open = function (method, url) {
            const result = originalOpen.apply(this, arguments);

            // Only add CSRF for same-origin requests
            if (url.startsWith('/') || url.startsWith(window.location.origin)) {
                this.setRequestHeader('X-CSRF-TOKEN', csrfToken.content);
                this.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            }

            return result;
        };
    }

    // ==========================================
    // 2. SAFE DOM MANIPULATION
    // ==========================================
    window.SafeDOM = {
        /**
         * Safely set text content (XSS-safe)
         */
        setText: function (element, text) {
            if (element && typeof text === 'string') {
                element.textContent = text;
            }
        },

        /**
         * Escape HTML entities to prevent XSS
         */
        escapeHtml: function (text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        },

        /**
         * Create element with safe text content
         */
        createElement: function (tag, text, className) {
            const el = document.createElement(tag);
            if (text) el.textContent = text;
            if (className) el.className = className;
            return el;
        },

        /**
         * Safely set innerHTML with allowed tags only
         * WARNING: Use sparingly, prefer textContent
         */
        setAllowedHtml: function (element, html, allowedTags = ['b', 'i', 'strong', 'em', 'br']) {
            if (!element || typeof html !== 'string') return;

            // Create temporary element
            const temp = document.createElement('div');
            temp.innerHTML = html;

            // Remove all scripts and event handlers
            const scripts = temp.querySelectorAll('script');
            scripts.forEach(s => s.remove());

            // Remove event attributes
            const allElements = temp.querySelectorAll('*');
            allElements.forEach(el => {
                // Remove event handlers
                Array.from(el.attributes).forEach(attr => {
                    if (attr.name.startsWith('on')) {
                        el.removeAttribute(attr.name);
                    }
                });

                // Check if tag is allowed
                if (!allowedTags.includes(el.tagName.toLowerCase())) {
                    el.outerHTML = el.textContent;
                }
            });

            element.innerHTML = temp.innerHTML;
        }
    };

    // ==========================================
    // 3. PRODUCTION CONSOLE SANITIZATION
    // ==========================================
    if (window.location.hostname !== 'localhost' &&
        window.location.hostname !== '127.0.0.1') {
        // Disable console in production (optional - uncomment if needed)
        // console.log = function() {};
        // console.warn = function() {};
        // console.error = function() {};

        // At minimum, prevent console.log from leaking sensitive data
        const originalLog = console.log;
        console.log = function () {
            // Filter out potential sensitive data patterns
            const args = Array.from(arguments).map(arg => {
                if (typeof arg === 'string') {
                    // Mask potential tokens/keys
                    return arg.replace(/([a-zA-Z0-9]{32,})/g, '[REDACTED]');
                }
                return arg;
            });
            originalLog.apply(console, args);
        };
    }

    // ==========================================
    // 4. PREVENT OPEN REDIRECT
    // ==========================================
    window.SafeRedirect = {
        /**
         * Only redirect to allowed origins
         */
        to: function (url) {
            const allowed = [
                window.location.origin,
                // Add other trusted domains here
            ];

            try {
                const parsed = new URL(url, window.location.origin);

                // Check if origin is allowed
                if (allowed.includes(parsed.origin) || parsed.origin === window.location.origin) {
                    window.location.href = parsed.href;
                    return true;
                } else {
                    console.warn('Blocked redirect to untrusted origin:', parsed.origin);
                    return false;
                }
            } catch (e) {
                // Relative URLs are safe
                if (url.startsWith('/') && !url.startsWith('//')) {
                    window.location.href = url;
                    return true;
                }
                console.warn('Invalid redirect URL:', url);
                return false;
            }
        }
    };

    // ==========================================
    // 5. PREVENT CLICKJACKING (JS Fallback)
    // ==========================================
    if (window.self !== window.top) {
        // Page is in an iframe - potential clickjacking
        document.body.innerHTML = '<h1>Access Denied</h1><p>This page cannot be displayed in a frame.</p>';
        console.warn('Clickjacking attempt detected!');
    }

    // ==========================================
    // 6. SAFE URL VALIDATOR
    // ==========================================
    window.SafeURL = {
        /**
         * Check if URL is safe (no javascript:, data:, vbscript: protocols)
         */
        isSafe: function (url) {
            if (!url || typeof url !== 'string') return false;

            const trimmed = url.trim().toLowerCase();
            const dangerousProtocols = ['javascript:', 'data:', 'vbscript:', 'file:'];

            for (const protocol of dangerousProtocols) {
                if (trimmed.startsWith(protocol)) {
                    console.warn('Blocked dangerous URL protocol:', protocol);
                    return false;
                }
            }
            return true;
        },

        /**
         * Safely set href attribute
         */
        setHref: function (element, url) {
            if (this.isSafe(url)) {
                element.href = url;
                return true;
            }
            element.removeAttribute('href');
            return false;
        }
    };

    // ==========================================
    // 7. INPUT SANITIZER
    // ==========================================
    window.SafeInput = {
        /**
         * Sanitize user input - remove potential XSS vectors
         */
        sanitize: function (input) {
            if (typeof input !== 'string') return '';

            return input
                .replace(/[<>]/g, '') // Remove angle brackets
                .replace(/javascript:/gi, '') // Remove javascript: protocol
                .replace(/on\w+=/gi, '') // Remove event handlers
                .trim();
        },

        /**
         * Validate and sanitize email format
         */
        email: function (email) {
            if (typeof email !== 'string') return '';
            const sanitized = this.sanitize(email);
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(sanitized) ? sanitized : '';
        },

        /**
         * Validate phone number (Indonesian format)
         */
        phone: function (phone) {
            if (typeof phone !== 'string') return '';
            // Remove non-digit except + at start
            return phone.replace(/[^\d+]/g, '').slice(0, 15);
        }
    };

    // Log security initialization
    console.log('🔒 Security utilities initialized');

})();
