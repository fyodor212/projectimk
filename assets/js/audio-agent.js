// Audio Context untuk efek suara yang lebih baik
const AudioContext = window.AudioContext || window.webkitAudioContext;
const audioCtx = new AudioContext();

// Audio Agent Configuration
const audioAgent = {
    sounds: {
        click: new Audio('assets/audio/click.mp3'),
        success: new Audio('assets/audio/success.mp3'),
        error: new Audio('assets/audio/error.mp3'),
        notification: new Audio('assets/audio/notification.mp3'),
        typing: new Audio('assets/audio/typing.mp3')
    },
    
    play: function(soundName) {
        if (this.sounds[soundName]) {
            this.sounds[soundName].currentTime = 0;
            this.sounds[soundName].play();
        }
    }
};

// Virtual Assistant dengan AI sederhana
const virtualAssistant = {
    keywords: {
        'jadwal': 'Anda dapat melihat jadwal dokter di menu Layanan.',
        'booking': 'Untuk booking, silakan isi form di bagian Booking.',
        'dokter': 'Kami memiliki berbagai dokter spesialis.',
        'pembayaran': 'Kami menerima pembayaran tunai dan non-tunai.',
        'lokasi': 'Klinik kami berlokasi di Jl. Kesehatan No. 123.',
        'jam': 'Kami buka Senin-Jumat (08:00-20:00).'
    },

    processInput: function(input) {
        input = input.toLowerCase();
        let response = "Maaf, saya tidak mengerti. Silakan tanya tentang jadwal, booking, dokter, atau pembayaran.";
        
        for (let keyword in this.keywords) {
            if (input.includes(keyword)) {
                response = this.keywords[keyword];
                break;
            }
        }
        return response;
    }
};

// Voice Recognition Enhancement
if ('webkitSpeechRecognition' in window) {
    const recognition = new webkitSpeechRecognition();
    recognition.continuous = false;
    recognition.lang = 'id-ID';
    
    // Voice Recognition Status Indicator
    const voiceIndicator = document.createElement('div');
    voiceIndicator.className = 'voice-indicator';
    document.body.appendChild(voiceIndicator);
    
    recognition.onstart = () => {
        voiceIndicator.classList.add('active');
        audioAgent.play('notification');
    };
    
    recognition.onend = () => {
        voiceIndicator.classList.remove('active');
    };
    
    recognition.onresult = (event) => {
        const text = event.results[0][0].transcript;
        document.getElementById('userInput').value = text;
        
        // Process voice input
        const response = virtualAssistant.processInput(text);
        addChatMessage('Anda', text);
        setTimeout(() => {
            addChatMessage('Asisten', response);
            audioAgent.play('notification');
        }, 500);
    };
}

// Chat Interface Enhancement
function addChatMessage(sender, message) {
    const chatMessages = document.getElementById('chatMessages');
    const messageDiv = document.createElement('div');
    messageDiv.className = `chat-message ${sender.toLowerCase()}`;
    
    messageDiv.innerHTML = `
        <div class="message-content">
            <strong>${sender}:</strong> ${message}
        </div>
        <div class="message-time">
            ${new Date().toLocaleTimeString()}
        </div>
    `;
    
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
    
    // Play typing sound
    if (sender === 'Asisten') {
        audioAgent.play('typing');
    }
}

// Typing Indicator
function showTypingIndicator() {
    const chatMessages = document.getElementById('chatMessages');
    const typingDiv = document.createElement('div');
    typingDiv.className = 'typing-indicator';
    typingDiv.innerHTML = '<span></span><span></span><span></span>';
    chatMessages.appendChild(typingDiv);
    return typingDiv;
}

// Volume control
const audioVolume = {
    current: 1,
    mute: function() {
        Object.values(audioAgent.sounds).forEach(sound => {
            sound.volume = 0;
        });
    },
    unmute: function() {
        Object.values(audioAgent.sounds).forEach(sound => {
            sound.volume = this.current;
        });
    }
};

const speechSynthesis = {
    speak: function(text) {
        if ('speechSynthesis' in window) {
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'id-ID';
            utterance.volume = 0.8;
            utterance.rate = 1;
            utterance.pitch = 1;
            window.speechSynthesis.speak(utterance);
        }
    },
    
    stop: function() {
        if ('speechSynthesis' in window) {
            window.speechSynthesis.cancel();
        }
    }
};

const audioEffects = {
    createSound: function(frequency, duration) {
        const oscillator = audioCtx.createOscillator();
        const gainNode = audioCtx.createGain();
        
        oscillator.connect(gainNode);
        gainNode.connect(audioCtx.destination);
        
        oscillator.frequency.value = frequency;
        oscillator.type = 'sine';
        
        gainNode.gain.setValueAtTime(0, audioCtx.currentTime);
        gainNode.gain.linearRampToValueAtTime(1, audioCtx.currentTime + 0.01);
        gainNode.gain.linearRampToValueAtTime(0, audioCtx.currentTime + duration);
        
        oscillator.start();
        oscillator.stop(audioCtx.currentTime + duration);
    },
    
    playSuccess: function() {
        this.createSound(880, 0.1);  // Nada A5
        setTimeout(() => this.createSound(1318.5, 0.1), 100);  // Nada E6
    },
    
    playError: function() {
        this.createSound(440, 0.2);  // Nada A4
    }
};

const voiceCommands = {
    commands: {
        'buka booking': () => window.location.href = 'pages/booking.php',
        'lihat dokter': () => window.location.href = 'pages/doctors.php',
        'ke beranda': () => window.location.href = 'index.php',
        'tutup': () => toggleAssistant()
    },
    
    process: function(command) {
        command = command.toLowerCase();
        for (let key in this.commands) {
            if (command.includes(key)) {
                this.commands[key]();
                return true;
            }
        }
        return false;
    }
};

const ambientSound = {
    audio: new Audio('assets/audio/ambient.mp3'),
    
    init: function() {
        this.audio.loop = true;
        this.audio.volume = 0.1;
    },
    
    play: function() {
        this.audio.play();
    },
    
    pause: function() {
        this.audio.pause();
    },
    
    setVolume: function(value) {
        this.audio.volume = value;
    }
}; 