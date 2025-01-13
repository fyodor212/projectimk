// Keyboard Navigation
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        const assistant = document.getElementById('assistant');
        if (assistant.classList.contains('active')) {
            toggleAssistant();
        }
    }

    // Tab navigation indicator
    if (e.key === 'Tab') {
        document.body.classList.add('keyboard-navigation');
    }
});

// Mouse navigation
document.addEventListener('mousedown', () => {
    document.body.classList.remove('keyboard-navigation');
});

// Voice Recognition
if ('webkitSpeechRecognition' in window) {
    const recognition = new webkitSpeechRecognition();
    recognition.continuous = false;
    recognition.lang = 'id-ID';
    
    recognition.onstart = () => {
        voiceIndicator.classList.add('active');
        audioAgent.play('notification');
    };
    
    recognition.onresult = (event) => {
        const text = event.results[0][0].transcript;
        processVoiceInput(text);
    };
}

// Screen Reader Support
document.querySelectorAll('*[aria-label]').forEach(element => {
    element.addEventListener('focus', () => {
        const speech = new SpeechSynthesisUtterance(element.getAttribute('aria-label'));
        speech.lang = 'id-ID';
        window.speechSynthesis.speak(speech);
    });
});

// Gesture support
let touchstartX = 0;
let touchendX = 0;

document.addEventListener('touchstart', e => {
    touchstartX = e.changedTouches[0].screenX;
});

document.addEventListener('touchend', e => {
    touchendX = e.changedTouches[0].screenX;
    handleGesture();
});

function handleGesture() {
    if (touchendX < touchstartX) navigateNext();
    if (touchendX > touchstartX) navigatePrevious();
}

// Feedback system
const userFeedback = {
    show: function() {
        const modal = `
            <div class="feedback-modal">
                <h5>Bagaimana pengalaman Anda?</h5>
                <div class="rating">
                    <i class="fas fa-star" data-rating="1"></i>
                    <i class="fas fa-star" data-rating="2"></i>
                    <i class="fas fa-star" data-rating="3"></i>
                    <i class="fas fa-star" data-rating="4"></i>
                    <i class="fas fa-star" data-rating="5"></i>
                </div>
                <textarea placeholder="Berikan komentar Anda"></textarea>
                <button class="btn btn-primary">Kirim</button>
            </div>
        `;
        document.body.insertAdjacentHTML('beforeend', modal);
    }
};

// Loading states
const loadingStates = {
    show: function(element) {
        element.classList.add('loading');
        element.setAttribute('aria-busy', 'true');
        element.innerHTML = `
            <div class="loading-spinner">
                <div class="spinner"></div>
                <span class="sr-only">Memuat...</span>
            </div>
        `;
    },
    hide: function(element, originalContent) {
        element.classList.remove('loading');
        element.setAttribute('aria-busy', 'false');
        element.innerHTML = originalContent;
    }
};

// Response time monitoring
const performanceMonitor = {
    startTime: performance.now(),
    logTiming: function(label) {
        const duration = performance.now() - this.startTime;
        console.log(`${label}: ${duration}ms`);
    }
};