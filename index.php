<?php include 'includes/header.php'; ?>
    <!-- Layanan Section dengan gesture support -->
    <section id="layanan" class="services-section py-5 gesture-area">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" tabindex="0">Layanan Kami</h2>
                <p class="section-subtitle" tabindex="0">Berbagai layanan kesehatan yang kami sediakan untuk Anda</p>
            </div>
            <div class="row">
                <!-- Service Card - Pemeriksaan Fisik -->
                <div class="col-md-4 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3>Pemeriksaan Fisik</h3>
                        <p>Pemeriksaan kesehatan menyeluruh oleh dokter berpengalaman menggunakan peralatan medis modern dan terkini.</p>
                        <a href="#booking" class="btn btn-outline-primary rounded-pill">
                            Booking
                        </a>
                    </div>
                </div>
                <!-- Service Card - Konsultasi Kesehatan -->
                <div class="col-md-4 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>Konsultasi Kesehatan</h3>
                        <p>Diskusi mendalam dengan dokter ahli untuk membahas keluhan dan mendapatkan solusi kesehatan terbaik.</p>
                        <a href="#booking" class="btn btn-outline-primary rounded-pill">
                            Booking
                        </a>
                    </div>
                </div>
                <!-- Service Card - Resep Obat -->
                <div class="col-md-4 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-prescription-bottle-alt"></i>
                        </div>
                        <h3>Resep Obat</h3>
                        <p>Pemberian resep obat yang tepat dan aman sesuai dengan diagnosis dan kondisi kesehatan Anda.</p>
                        <a href="#booking" class="btn btn-outline-primary rounded-pill">
                            Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section dengan form accessibility -->
    <section id="booking" class="booking-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="booking-form-card">
                        <h2 class="text-center mb-4" tabindex="0">Booking Jadwal Konsultasi</h2>
                        <form id="bookingForm" action="process_booking.php" method="POST" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">
                                        Nama Lengkap
                                        <span class="text-danger" aria-label="wajib diisi">*</span>
                                    </label>
                                    <input type="text" 
                                           class="form-control" 
                                           id="name" 
                                           name="name" 
                                           required 
                                           aria-required="true"
                                           aria-describedby="nameHelp">
                                    <div id="nameHelp" class="form-text text-white-50">
                                        Masukkan nama lengkap sesuai KTP
                                    </div>
                                </div>
                                <!-- ... form fields lainnya ... -->
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" 
                                        class="btn btn-booking btn-lg"
                                        aria-label="Kirim formulir booking">
                                    <i class="fas fa-paper-plane me-2" aria-hidden="true"></i>
                                    Kirim Booking
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>


    <!-- Statistics Section -->
    <section class="stats-section">
        <!-- Chart Section -->
        <div class="container mt-5">
            <div class="text-center mb-5">
                <h2 class="section-title text-white">Analisis Data Klinik</h2>
                <p class="section-subtitle text-white-50">Perkembangan dan statistik layanan kesehatan kami</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="chart-card">
                        <h3>Tren Kunjungan Pasien (6 Bulan Terakhir)</h3>
                        <canvas id="trendChart"></canvas>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="chart-card">
                        <h3>Kepuasan Pasien</h3>
                        <canvas id="satisfactionChart"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="chart-card">
                        <h3>Distribusi Usia Pasien</h3>
                        <canvas id="ageChart"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="chart-card">
                        <h3>Jenis Layanan</h3>
                        <canvas id="serviceChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer dengan peningkatan aksesibilitas -->
<footer class="footer bg-dark text-white py-4" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Klinik Sehat</h5>
                <p>Melayani dengan sepenuh hati untuk kesehatan Anda</p>
            </div>
            
            <div class="col-md-4">
                <h5>Link Cepat</h5>
                <ul class="list-unstyled">
                    <li><a href="#beranda" class="text-white">Beranda</a></li>
                    <li><a href="#layanan" class="text-white">Layanan</a></li>
                    <li><a href="#dokter" class="text-white">Dokter</a></li>
                    <li><a href="#kontak" class="text-white">Kontak</a></li>
                </ul>
            </div>
            
            <div class="col-md-4">
                <h5>Jam Operasional</h5>
                <ul class="list-unstyled">
                    <li>Senin - Jumat: 08:00 - 20:00</li>
                    <li>Sabtu: 09:00 - 17:00</li>
                    <li>Minggu: 09:00 - 15:00</li>
                </ul>
            </div>
        </div>
        
        <hr class="my-4">
        
        <div class="text-center">
            <p>&copy; 2024 Klinik Sehat. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/imk-enhancements.js"></script>
<script src="assets/js/audio-agent.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar"></script>
<link href="https://cdn.jsdelivr.net/npm/fullcalendar/main.css" rel="stylesheet">
<script>
    // Audio feedback
    document.querySelectorAll('a, button').forEach(element => {
        element.addEventListener('click', () => {
            document.getElementById('clickSound').play();
        });
    });

    // Form submission feedback
    document.getElementById('bookingForm').addEventListener('submit', (e) => {
        e.preventDefault();
        if (form.checkValidity()) {
            audioAgent.play('success');
            showSuccessMessage('Booking berhasil! Kami akan menghubungi Anda segera.');
        } else {
            audioAgent.play('error');
            showErrorMessage('Mohon periksa kembali form anda');
        }
    });

    // Form Validation Enhancement
    const form = document.getElementById('bookingForm');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        if (!form.checkValidity()) {
            e.stopPropagation();
            // Custom error messages
            Array.from(form.elements).forEach(input => {
                if (!input.validity.valid) {
                    input.setAttribute('aria-invalid', 'true');
                    const errorMessage = input.validationMessage;
                    announceToScreenReader(errorMessage);
                }
            });
        } else {
            document.getElementById('successSound').play();
            showSuccessMessage('Booking berhasil! Kami akan menghubungi Anda segera.');
        }
        form.classList.add('was-validated');
    });

    // Screen Reader Announcements
    function announceToScreenReader(message) {
        const announcement = document.createElement('div');
        announcement.setAttribute('aria-live', 'polite');
        announcement.classList.add('sr-only');
        announcement.textContent = message;
        document.body.appendChild(announcement);
        setTimeout(() => announcement.remove(), 1000);
    }

    // Success Message with Animation
    function showSuccessMessage(message) {
        const alert = document.createElement('div');
        alert.className = 'alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3';
        alert.setAttribute('role', 'alert');
        alert.innerHTML = `
            <i class="fas fa-check-circle me-2"></i>
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
        `;
        document.body.appendChild(alert);
        setTimeout(() => alert.remove(), 5000);
    }

    // Error Message with Animation
    function showErrorMessage(message) {
        const alert = document.createElement('div');
        alert.className = 'alert alert-danger alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3';
        alert.setAttribute('role', 'alert');
        alert.innerHTML = `
            <i class="fas fa-exclamation-circle me-2"></i>
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
        `;
        document.body.appendChild(alert);
        setTimeout(() => alert.remove(), 5000);
    }

    // Update chat function
    function sendMessage() {
        const input = document.getElementById('userInput');
        const text = input.value.trim();
        
        if (text !== '') {
            audioAgent.play('click');
            addChatMessage('Anda', text);
            
            const typingIndicator = showTypingIndicator();
            
            setTimeout(() => {
                typingIndicator.remove();
                const response = virtualAssistant.processInput(text);
                addChatMessage('Asisten', response);
            }, 1500);
            
            input.value = '';
        }
    }

    // Voice command activation
    document.querySelector('.fab').addEventListener('dblclick', () => {
        audioAgent.play('notification');
        recognition.start();
    });

    // Visual feedback for interactions
    document.querySelectorAll('.interactive-element').forEach(element => {
        element.addEventListener('click', () => {
            element.classList.add('clicked');
            setTimeout(() => {
                element.classList.remove('clicked');
            }, 200);
        });
    });

    // Progress bar update on scroll
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.querySelector('.progress-bar').style.width = scrolled + '%';
    });

    // Initialize charts
    document.addEventListener('DOMContentLoaded', function() {
        // Reinitialize charts on window resize
        window.addEventListener('resize', () => {
            if (window.trendChart) window.trendChart.resize();
            if (window.satisfactionChart) window.satisfactionChart.resize();
            if (window.ageChart) window.ageChart.resize();
            if (window.serviceChart) window.serviceChart.resize();
        });

        // Initialize tooltips
        const tooltips = document.querySelectorAll('[data-tooltip]');
        tooltips.forEach(el => {
            new bootstrap.Tooltip(el);
        });

        // Initialize charts if elements exist
        if (document.getElementById('trendChart')) {
            const trendCtx = document.getElementById('trendChart').getContext('2d');
            window.trendChart = new Chart(trendCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                    datasets: [{
                        label: 'Pasien Baru',
                        data: [65, 85, 95, 115, 140, 170],
                        borderColor: '#3498DB',
                        backgroundColor: 'rgba(52, 152, 219, 0.1)',
                        fill: true,
                        tension: 0.4
                    }, {
                        label: 'Pasien Lama',
                        data: [120, 150, 180, 200, 250, 300],
                        borderColor: '#2ECC71',
                        backgroundColor: 'rgba(46, 204, 113, 0.1)',
                        fill: true,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: { color: '#fff' }
                        },
                        title: {
                            display: true,
                            text: 'Perkembangan Jumlah Pasien',
                            color: '#fff'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(255, 255, 255, 0.1)' },
                            ticks: { color: '#fff' }
                        },
                        x: {
                            grid: { color: 'rgba(255, 255, 255, 0.1)' },
                            ticks: { color: '#fff' }
                        }
                    }
                }
            });
        }

        if (document.getElementById('satisfactionChart')) {
            const satisfactionCtx = document.getElementById('satisfactionChart').getContext('2d');
            window.satisfactionChart = new Chart(satisfactionCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Sangat Puas', 'Puas', 'Cukup', 'Kurang'],
                    datasets: [{
                        data: [45, 30, 15, 10],
                        backgroundColor: [
                            '#2ECC71',
                            '#3498DB',
                            '#F1C40F',
                            '#E74C3C'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                color: '#fff',
                                padding: 20,
                                font: { size: 12 }
                            }
                        }
                    }
                }
            });
        }

        if (document.getElementById('ageChart')) {
            const ageCtx = document.getElementById('ageChart').getContext('2d');
            window.ageChart = new Chart(ageCtx, {
                type: 'bar',
                data: {
                    labels: ['0-15', '16-30', '31-45', '46-60', '60+'],
                    datasets: [{
                        label: 'Jumlah Pasien',
                        data: [150, 250, 300, 200, 100],
                        backgroundColor: '#3498DB',
                        borderRadius: 8
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(255, 255, 255, 0.1)' },
                            ticks: { color: '#fff' }
                        },
                        x: {
                            grid: { display: false },
                            ticks: { color: '#fff' }
                        }
                    }
                }
            });
        }

        if (document.getElementById('serviceChart')) {
            const serviceCtx = document.getElementById('serviceChart').getContext('2d');
            window.serviceChart = new Chart(serviceCtx, {
                type: 'polarArea',
                data: {
                    labels: ['Umum', 'Spesialis', 'Gigi', 'Anak', 'Lab'],
                    datasets: [{
                        data: [300, 250, 200, 150, 100],
                        backgroundColor: [
                            '#3498DB',
                            '#E74C3C',
                            '#2ECC71',
                            '#F1C40F',
                            '#9B59B6'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                color: '#fff',
                                padding: 15,
                                font: { size: 12 }
                            }
                        }
                    }
                }
            });
        }
    });
</script>

</body>
</html> 