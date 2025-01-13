<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Sehat - Sistem Booking Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
    <audio id="clickSound" src="../assets/audio/click.mp3"></audio>
    <audio id="successSound" src="../assets/audio/success.mp3"></audio>
    <audio id="errorSound" src="../assets/audio/error.mp3"></audio>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-hospital me-2"></i>
                Klinik Sehat
            </a>
            <button class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-home me-1"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/services.php">
                            <i class="fas fa-stethoscope me-1"></i> Layanan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/doctors.php">
                            <i class="fas fa-user-md me-1"></i> Dokter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/contact.php">
                            <i class="fas fa-phone me-1"></i> Kontak
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-booking ms-2" href="pages/booking.php">
                            <i class="fas fa-calendar-check me-1"></i> Booking Sekarang
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">Kesehatan Anda Prioritas Kami</h1>
                    <p class="lead mb-4">Booking jadwal konsultasi dengan dokter terpercaya secara mudah dan cepat</p>
                    <a href="#booking" class="btn btn-booking btn-lg">Mulai Booking</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 stat-item">
                    <i class="fas fa-user-md mb-3 service-icon"></i>
                    <div class="stat-number">50+</div>
                    <p>Dokter Ahli</p>
                </div>
                <div class="col-md-3 stat-item">
                    <i class="fas fa-users mb-3 service-icon"></i>
                    <div class="stat-number">10.000+</div>
                    <p>Pasien Puas</p>
                </div>
                <div class="col-md-3 stat-item">
                    <i class="fas fa-hospital mb-3 service-icon"></i>
                    <div class="stat-number">15+</div>
                    <p>Spesialisasi</p>
                </div>
                <div class="col-md-3 stat-item">
                    <i class="fas fa-clock mb-3 service-icon"></i>
                    <div class="stat-number">24/7</div>
                    <p>Layanan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll Progress Bar -->
    <div class="scroll-progress"></div>

    <!-- Floating Action Button & Virtual Assistant -->
    <div class="fab" onclick="toggleAssistant()">
        <i class="fas fa-comment-medical"></i>
    </div>

    <div class="virtual-assistant" id="assistant" role="dialog" aria-label="Asisten Virtual">
        <div class="assistant-header">
            <div>
                <i class="fas fa-robot me-2"></i>
                Asisten Virtual
            </div>
            <button class="close-btn" onclick="toggleAssistant()">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="chat-container">
            <div class="chat-messages" id="chatMessages">
                <div class="chat-message assistant">
                    <strong>Asisten:</strong> Halo! Ada yang bisa saya bantu?
                </div>
            </div>
            <div class="chat-input">
                <div class="input-group">
                    <input type="text" class="form-control" id="userInput" placeholder="Ketik pesan...">
                    <button class="btn" onclick="sendMessage()">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
    // Scroll Progress Indicator
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.querySelector('.scroll-progress').style.width = scrolled + '%';
    });

    // Virtual Assistant Toggle
    function toggleAssistant() {
        const assistant = document.getElementById('assistant');
        assistant.classList.toggle('active');
        document.getElementById('clickSound').play();
    }

    // Simple Chat Function
    function sendMessage() {
        const input = document.getElementById('userInput');
        const messages = document.getElementById('chatMessages');
        
        if (input.value.trim() !== '') {
            // User Message
            messages.innerHTML += `
                <div class="text-end mb-2">
                    <strong>Anda:</strong> ${input.value}
                </div>
            `;
            
            // Simple Bot Response
            setTimeout(() => {
                messages.innerHTML += `
                    <div class="mb-2">
                        <strong>Asisten:</strong> Terima kasih atas pesannya. Mohon tunggu sebentar, kami akan membantu Anda.
                    </div>
                `;
                messages.scrollTop = messages.scrollHeight;
                document.getElementById('successSound').play();
            }, 1000);
            
            input.value = '';
        }
    }

    // Tooltip Initialization
    document.querySelectorAll('[data-tooltip]').forEach(element => {
        element.addEventListener('mouseenter', () => {
            document.getElementById('clickSound').play();
        });
    });

    // Form Field Enhancement
    document.querySelectorAll('.form-control').forEach(input => {
        input.addEventListener('focus', () => {
            document.getElementById('clickSound').play();
        });
    });

    // Loading State Simulation
    function showLoading(element) {
        element.classList.add('loading');
        setTimeout(() => {
            element.classList.remove('loading');
        }, 2000);
    }
    </script> 

    <!-- Skip to main content -->
    <a href="#main-content" class="skip-link">
        Langsung ke konten utama
    </a>

    <!-- ARIA labels -->
    <nav aria-label="Menu utama">
        <ul role="menubar">
            <li role="menuitem">
                <a href="index.php" aria-current="page">Beranda</a>
            </li>
        </ul>
    </nav> 

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 