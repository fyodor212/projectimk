// Performance Monitoring
const performanceMetrics = {
    metrics: {},
    
    startTimer: function(label) {
        this.metrics[label] = performance.now();
    },
    
    endTimer: function(label) {
        if (this.metrics[label]) {
            const duration = performance.now() - this.metrics[label];
            console.log(`${label}: ${duration}ms`);
            this.logMetric(label, duration);
        }
    },
    
    logMetric: function(label, value) {
        // Kirim ke analytics server
        fetch('/api/metrics', {
            method: 'POST',
            body: JSON.stringify({
                metric: label,
                value: value,
                timestamp: new Date().toISOString()
            })
        });
    }
}; 