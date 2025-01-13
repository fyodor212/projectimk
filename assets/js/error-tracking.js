const errorTracker = {
    init: function() {
        window.onerror = (msg, url, lineNo, columnNo, error) => {
            this.logError({
                message: msg,
                url: url,
                line: lineNo,
                column: columnNo,
                stack: error?.stack,
                userAgent: navigator.userAgent,
                timestamp: new Date().toISOString()
            });
        };

        window.addEventListener('unhandledrejection', (event) => {
            this.logError({
                type: 'Promise Rejection',
                reason: event.reason,
                timestamp: new Date().toISOString()
            });
        });
    },

    logError: function(errorData) {
        // Kirim ke server
        fetch('/api/errors', {
            method: 'POST',
            body: JSON.stringify(errorData)
        });
        
        // Tampilkan ke pengguna jika perlu
        this.showErrorMessage('Terjadi kesalahan. Tim kami akan segera memperbaikinya.');
    }
}; 