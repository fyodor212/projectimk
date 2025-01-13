const performanceMonitor = {
    metrics: {
        FCP: 0,  // First Contentful Paint
        LCP: 0,  // Largest Contentful Paint
        FID: 0,  // First Input Delay
        CLS: 0   // Cumulative Layout Shift
    },
    
    init: function() {
        // First Contentful Paint
        new PerformanceObserver((entryList) => {
            const entries = entryList.getEntries();
            this.metrics.FCP = entries[entries.length - 1].startTime;
            this.logMetric('FCP', this.metrics.FCP);
        }).observe({ entryTypes: ['paint'] });
        
        // Largest Contentful Paint
        new PerformanceObserver((entryList) => {
            const entries = entryList.getEntries();
            this.metrics.LCP = entries[entries.length - 1].startTime;
            this.logMetric('LCP', this.metrics.LCP);
        }).observe({ entryTypes: ['largest-contentful-paint'] });
    }
}; 