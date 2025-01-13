<?php include 'includes/header.php'; ?>

<main id="main-content">
    <!-- Breadcrumb -->
    <div class="container mt-5 pt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Layanan</li>
            </ol>
        </nav>
    </div>

    <!-- Services Section -->
    <section class="services-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Layanan Kami</h2>
            <div class="row">
                <!-- Service Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="service-card text-center">
                        <i class="fas fa-stethoscope service-icon"></i>
                        <h3>Konsultasi Umum</h3>
                        <p>Layanan konsultasi kesehatan umum dengan dokter berpengalaman.</p>
                        <ul class="list-unstyled service-features">
                            <li><i class="fas fa-check-circle me-2"></i>Pemeriksaan Fisik</li>
                            <li><i class="fas fa-check-circle me-2"></i>Konsultasi Kesehatan</li>
                            <li><i class="fas fa-check-circle me-2"></i>Resep Obat</li>
                        </ul>
                        <a href="booking.php?service=umum" class="btn btn-booking mt-3">Booking Sekarang</a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="service-card text-center">
                        <i class="fas fa-heartbeat service-icon"></i>
                        <h3>Spesialis Jantung</h3>
                        <p>Pemeriksaan dan perawatan kesehatan jantung oleh spesialis.</p>
                        <ul class="list-unstyled service-features">
                            <li><i class="fas fa-check-circle me-2"></i>EKG</li>
                            <li><i class="fas fa-check-circle me-2"></i>Ekokardiografi</li>
                            <li><i class="fas fa-check-circle me-2"></i>Konsultasi Spesialis</li>
                        </ul>
                        <a href="booking.php?service=jantung" class="btn btn-booking mt-3">Booking Sekarang</a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="service-card text-center">
                        <i class="fas fa-brain service-icon"></i>
                        <h3>Spesialis Saraf</h3>
                        <p>Penanganan gangguan sistem saraf dengan teknologi modern.</p>
                        <ul class="list-unstyled service-features">
                            <li><i class="fas fa-check-circle me-2"></i>CT Scan</li>
                            <li><i class="fas fa-check-circle me-2"></i>MRI</li>
                            <li><i class="fas fa-check-circle me-2"></i>Terapi Saraf</li>
                        </ul>
                        <a href="booking.php?service=saraf" class="btn btn-booking mt-3">Booking Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?> 