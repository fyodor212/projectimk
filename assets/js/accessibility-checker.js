const accessibilityChecker = {
    checkPage: function() {
        const issues = [];
        
        // Check alt texts
        document.querySelectorAll('img').forEach(img => {
            if (!img.alt) {
                issues.push({
                    type: 'missing-alt',
                    element: img,
                    suggestion: 'Add alt text for screen readers'
                });
            }
        });
        
        // Check ARIA labels
        document.querySelectorAll('[role]').forEach(element => {
            if (!element.getAttribute('aria-label')) {
                issues.push({
                    type: 'missing-aria',
                    element: element,
                    suggestion: 'Add aria-label for better accessibility'
                });
            }
        });
        
        return issues;
    }
}; 