(function () {
    window.addEventListener('load', function () {
        const isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

        const theme = {
            bgTitle: isDarkMode ? '#004d26' : '#e8f5e9',
            textTitle: isDarkMode ? '#4ade80' : '#00a651',
            bgWarning: isDarkMode ? '#3f0000' : '#fff5f5',
            textWarning: isDarkMode ? '#ff6b6b' : '#dc3545',
            textBody: isDarkMode ? '#e5e5e5' : '#333333',
            textMuted: isDarkMode ? '#888888' : '#666666',
            border: isDarkMode ? '#333' : '#ddd'
        };

        const styles = {
            title: [
                `font-size: 40px`,
                `font-weight: 900`,
                `color: ${theme.textTitle}`,
                `background: ${theme.bgTitle}`,
                `padding: 10px 20px`,
                `border-radius: 8px`,
                `text-shadow: ${isDarkMode ? '0 0 10px rgba(74, 222, 128, 0.5)' : 'none'}`,
                `border: 1px solid ${theme.textTitle}`
            ].join(';'),

            warningHeader: [
                `font-size: 28px`,
                `color: ${theme.textWarning}`,
                `background: ${theme.bgWarning}`,
                `padding: 5px 10px`,
                `border-radius: 5px`,
                `font-weight: bold`,
                `margin-top: 15px`
            ].join(';'),

            warningBody: [
                `font-size: 14px`,
                `color: ${theme.textBody}`,
                `line-height: 1.6`,
                `font-family: monospace`
            ].join(';'),

            infoTitle: [
                `color: ${theme.textTitle}`,
                `font-weight: bold`,
                `font-size: 14px`,
                `margin-top: 15px`,
                `padding-bottom: 5px`,
                `border-bottom: 2px solid ${theme.textTitle}`
            ].join(';'),

            signature: [
                `font-size: 11px`,
                `color: ${theme.textMuted}`,
                `margin-top: 20px`,
                `padding-top: 10px`,
                `border-top: 1px dashed ${theme.border}`
            ].join(';')
        };

        setTimeout(console.clear.bind(console), 0);

        setTimeout(() => {
            console.log('%cSMK MARHAS MARGAHAYU', styles.title);

            console.log('%c⚠️ STOP! / PERINGATAN KEAMANAN', styles.warningHeader);

            console.log(
                `%cFitur browser ini dikhususkan untuk developer.\n` +
                `Jika ada orang yang meminta Anda menyalin-tempel sesuatu di sini dengan iming-iming fitur tersembunyi atau hadiah, itu adalah penipuan (Self-XSS Attack).\n\n` +
                `⛔ Sistem kami mendeteksi percobaan akses script eksternal.\n` +
                `🔒 Untuk alasan keamanan, harap ketik "allow pasting" jika Anda benar-benar developer (Chrome Feature).`,
                styles.warningBody
            );

            console.group(`%c🚀 Info Development`, styles.infoTitle);
            console.log(`%cBuild Version : v3.0.1 (Stable)`, `color: ${theme.textBody}`);
            console.log(`%cEnvironment   : Production`, `color: ${theme.textBody}`);
            console.log(`%cTheme Mode    : ${isDarkMode ? 'Dark 🌙' : 'Light ☀️'}`, `color: ${theme.textBody}`);
            console.groupEnd();

            console.log('%cCode with ❤️ by Siswa PPLG SMK MARHAS | © 2026', styles.signature);
        }, 100);
    });
})();