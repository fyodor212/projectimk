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
    <script>
        // Initialize all interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Enable tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
</body>
</html> 