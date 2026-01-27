(function () {
    'use strict';

    const csrfToken = document.querySelector('meta[name="csrf-token"]');

    if (csrfToken) {
        const originalFetch = window.fetch;
        window.fetch = function (url, options = {}) {
            options.headers = options.headers || {};

            if (url.startsWith('/') || url.startsWith(window.location.origin)) {
                options.headers['X-CSRF-TOKEN'] = csrfToken.content;
                options.headers['X-Requested-With'] = 'XMLHttpRequest';
            }

            return originalFetch(url, options);
        };

        const originalOpen = XMLHttpRequest.prototype.open;
        XMLHttpRequest.prototype.open = function (method, url) {
            const result = originalOpen.apply(this, arguments);

            if (url.startsWith('/') || url.startsWith(window.location.origin)) {
                this.setRequestHeader('X-CSRF-TOKEN', csrfToken.content);
                this.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            }

            return result;
        };
    }

    window.SafeDOM = {
        setText: function (element, text) {
            if (element && typeof text === 'string') {
                element.textContent = text;
            }
        },

        escapeHtml: function (text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        },

        createElement: function (tag, text, className) {
            const el = document.createElement(tag);
            if (text) el.textContent = text;
            if (className) el.className = className;
            return el;
        },

        setAllowedHtml: function (element, html, allowedTags = ['b', 'i', 'strong', 'em', 'br']) {
            if (!element || typeof html !== 'string') return;

            const temp = document.createElement('div');
            temp.innerHTML = html;

            const scripts = temp.querySelectorAll('script');
            scripts.forEach(s => s.remove());

            const allElements = temp.querySelectorAll('*');
            allElements.forEach(el => {
                Array.from(el.attributes).forEach(attr => {
                    if (attr.name.startsWith('on')) {
                        el.removeAttribute(attr.name);
                    }
                });

                if (!allowedTags.includes(el.tagName.toLowerCase())) {
                    el.outerHTML = el.textContent;
                }
            });

            element.innerHTML = temp.innerHTML;
        }
    };

    if (window.location.hostname !== 'localhost' &&
        window.location.hostname !== '127.0.0.1') {
        const originalLog = console.log;
        console.log = function () {
            const args = Array.from(arguments).map(arg => {
                if (typeof arg === 'string') {
                    return arg.replace(/([a-zA-Z0-9]{32,})/g, '[REDACTED]');
                }
                return arg;
            });
            originalLog.apply(console, args);
        };
    }

    window.SafeRedirect = {
        to: function (url) {
            const allowed = [
                window.location.origin,
            ];

            try {
                const parsed = new URL(url, window.location.origin);

                if (allowed.includes(parsed.origin) || parsed.origin === window.location.origin) {
                    window.location.href = parsed.href;
                    return true;
                } else {
                    console.warn('Blocked redirect to untrusted origin:', parsed.origin);
                    return false;
                }
            } catch (e) {
                if (url.startsWith('/') && !url.startsWith('//')) {
                    window.location.href = url;
                    return true;
                }
                console.warn('Invalid redirect URL:', url);
                return false;
            }
        }
    };

    if (window.self !== window.top) {
        document.body.innerHTML = '<h1>Access Denied</h1><p>This page cannot be displayed in a frame.</p>';
        console.warn('Clickjacking attempt detected!');
    }

    window.SafeURL = {
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

        setHref: function (element, url) {
            if (this.isSafe(url)) {
                element.href = url;
                return true;
            }
            element.removeAttribute('href');
            return false;
        }
    };

    window.SafeInput = {
        sanitize: function (input) {
            if (typeof input !== 'string') return '';

            return input
                .replace(/[<>]/g, '')
                .replace(/javascript:/gi, '')
                .replace(/on\w+=/gi, '')
                .trim();
        },

        email: function (email) {
            if (typeof email !== 'string') return '';
            const sanitized = this.sanitize(email);
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(sanitized) ? sanitized : '';
        },

        phone: function (phone) {
            if (typeof phone !== 'string') return '';
            return phone.replace(/[^\d+]/g, '').slice(0, 15);
        }
    };

    console.log('🔒 Security utilities initialized');

})();
