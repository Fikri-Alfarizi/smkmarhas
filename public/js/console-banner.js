/*
 * Console Banner for SMK MARHAS MARGAHAYU
 */
(function () {
    // --- SPAM FILTER ---
    // We override console methods to filter out known garbage logs from extensions or third-party scripts
    const originalLog = console.log;
    const originalError = console.error;
    const originalWarn = console.warn;

    function shouldFilter(args) {
        if (!args || args.length === 0) return false;
        const text = args.map(a => {
            if (typeof a === 'string') return a;
            if (a && typeof a === 'object') {
                try {
                    return JSON.stringify(a);
                } catch (e) {
                    return String(a);
                }
            }
            return String(a);
        }).join(' ');

        // Filter patterns based on user report
        const filters = [
            'sdjfklksdjdskjfj',
            'tb_cst_image',
            'sdlkfksdjflksdlkjklsdfj',
            '<path> attribute d: Expected number',
            'translateContent.js'
        ];
        return filters.some(f => text.includes(f));
    }

    console.log = function (...args) {
        if (shouldFilter(args)) return;
        originalLog.apply(console, args);
    };

    console.error = function (...args) {
        if (shouldFilter(args)) return;
        originalError.apply(console, args);
    };

    console.warn = function (...args) {
        if (shouldFilter(args)) return;
        originalWarn.apply(console, args);
    };

    // --- BANNER CONTENT ---
    const title = "SMK MARHAS MARGAHAYU";
    const warningTitle = "STOP!";
    const warningText = "This feature is intended for developers. If someone told you to copy-paste something here to enable a feature or hack someone's account, it is a scam and will give them access to your account.";

    // Use absolute path to ensure it resolves correctly in all contexts
    const logoUrl = window.location.origin + '/image/logo.png';

    const styleTitle = [
        'font-family: system-ui, -apple-system, sans-serif',
        'font-size: 40px',
        'font-weight: 800',
        'color: #1e3a8a',
        'text-shadow: 2px 2px 0px #bfdbfe',
        'margin-bottom: 20px',
        'display: block'
    ].join(';');

    const styleWarningTitle = [
        'color: #ef4444',
        'font-family: system-ui, -apple-system, sans-serif',
        'font-size: 50px',
        'font-weight: 900',
        '-webkit-text-stroke: 1px black',
        'margin-top: 20px',
        'display: block'
    ].join(';');

    const styleWarningText = [
        'font-family: system-ui, -apple-system, sans-serif',
        'font-size: 16px',
        'color: #1f2937',
        'background-color: #fee2e2',
        'padding: 10px',
        'border-radius: 5px',
        'margin-bottom: 20px',
        'display: block'
    ].join(';');


    function printBanner() {
        try {
            console.clear();
        } catch (e) { }

        // Logo with improved dimensions and ensuring it's on a new line
        // Some browsers need a string with content to render the background image
        // We use %c with a space and styling
        const styleLogo = [
            'font-size: 1px',
            'padding: 80px',
            'line-height: 160px',
            'background-image: url(' + logoUrl + ')',
            'background-size: contain',
            'background-repeat: no-repeat',
            'background-position: center',
            'color: transparent',
            'display: inline-block',
            'border-radius: 10px'
        ].join(';');

        // Use originalLog to bypass our filter for internal use
        originalLog.call(console, '%c ', styleLogo);

        originalLog.call(console, `%c${title}`, styleTitle);
        originalLog.call(console, `%c${warningTitle}`, styleWarningTitle);
        originalLog.call(console, `%c${warningText}`, styleWarningText);

        originalLog.call(console, '%cDeveloped by SMK Marhas Team', 'font-style: italic; color: #6b7280; font-size: 12px; margin-top: 10px;');
    }

    // Run when ready
    if (document.readyState === 'complete') {
        setTimeout(printBanner, 1000);
    } else {
        window.addEventListener('load', function () {
            setTimeout(printBanner, 1000);
        });
    }

    // Also run immediately to catch early logs if possible
})();
