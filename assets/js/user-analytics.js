const userAnalytics = {
    trackEvent: function(category, action, label) {
        const eventData = {
            category: category,
            action: action,
            label: label,
            timestamp: new Date().toISOString(),
            sessionId: this.getSessionId(),
            userId: this.getUserId()
        };
        
        // Kirim ke analytics server
        fetch('/api/events', {
            method: 'POST',
            body: JSON.stringify(eventData)
        });
    },
    
    trackPageView: function() {
        this.trackEvent('Page', 'View', window.location.pathname);
    },
    
    trackInteraction: function(element) {
        this.trackEvent('Interaction', 'Click', element.getAttribute('data-track'));
    }
}; 