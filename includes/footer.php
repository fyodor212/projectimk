    <footer class="footer bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Klinik Sehat</h5>
                    <p>Melayani dengan sepenuh hati untuk kesehatan Anda</p>
                </div>
                
                <div class="col-md-4">
                    <h5>Link Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="../index.php" class="text-white">Beranda</a></li>
                        <li><a href="services.php" class="text-white">Layanan</a></li>
                        <li><a href="doctors.php" class="text-white">Dokter</a></li>
                        <li><a href="booking.php" class="text-white">Booking</a></li>
                    </ul>
                </div>
                
                <div class="col-md-4">
                    <h5>Kontak</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-phone me-2"></i> +62 21 1234 5678</li>
                        <li><i class="fas fa-envelope me-2"></i> info@kliniksehat.com</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Jl. Kesehatan No. 123</li>
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
    <script src="../assets/js/audio-agent.js"></script>
    <!-- Initialize Charts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (document.getElementById('visitChart')) {
                const visitCtx = document.getElementById('visitChart').getContext('2d');
                new Chart(visitCtx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                        datasets: [{
                            label: 'Jumlah Kunjungan',
                            data: [650, 750, 850, 900, 950, 1000],
                            borderColor: '#3498DB',
                            backgroundColor: 'rgba(52, 152, 219, 0.1)',
                            borderWidth: 2,
                            fill: true,
                            tension: 0.4
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                labels: { color: '#fff' }
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
            
            if (document.getElementById('doctorChart')) {
                const doctorCtx = document.getElementById('doctorChart').getContext('2d');
                new Chart(doctorCtx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Umum', 'Spesialis', 'Gigi', 'Anak'],
                        datasets: [{
                            data: [30, 25, 20, 25],
                            backgroundColor: [
                                '#3498DB',
                                '#E74C3C',
                                '#2ECC71',
                                '#F1C40F'
                            ],
                            borderWidth: 0
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
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
        });
    </script>
</body>
</html> 