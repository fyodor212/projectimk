<?php include 'includes/header.php'; ?>

<section class="doctors-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Tim Dokter Kami</h2>
            <p class="section-subtitle">Ditangani oleh dokter profesional dan berpengalaman</p>
        </div>

        <div class="row">
            <!-- Dokter 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="doctor-card">
                    <div class="doctor-image">
                        <div class="doctor-logo">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="doctor-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="doctor-info">
                        <h3>dr. Rina Putri, Sp.PD</h3>
                        <p class="specialty">Spesialis Penyakit Dalam</p>
                        <div class="schedule">
                            <p><i class="fas fa-clock me-2"></i>Senin - Jumat: 09:00 - 14:00</p>
                            <p><i class="fas fa-calendar-check me-2"></i>20+ Tahun Pengalaman</p>
                        </div>
                        <button class="btn btn-booking w-100" onclick="bookDoctor('dr. Rina Putri, Sp.PD')">
                            <i class="fas fa-calendar-plus me-2"></i>Booking Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Dokter 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="doctor-card">
                    <div class="doctor-image">
                        <div class="doctor-logo">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="doctor-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="doctor-info">
                        <h3>dr. Ahmad Fauzi, Sp.JP</h3>
                        <p class="specialty">Spesialis Jantung dan Pembuluh Darah</p>
                        <div class="schedule">
                            <p><i class="fas fa-clock me-2"></i>Selasa - Sabtu: 10:00 - 16:00</p>
                            <p><i class="fas fa-calendar-check me-2"></i>15+ Tahun Pengalaman</p>
                        </div>
                        <button class="btn btn-booking w-100" onclick="bookDoctor('dr. Ahmad Fauzi, Sp.JP')">
                            <i class="fas fa-calendar-plus me-2"></i>Booking Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Dokter 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="doctor-card">
                    <div class="doctor-image">
                        <div class="doctor-logo">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="doctor-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="doctor-info">
                        <h3>dr. Maya Sari, Sp.A</h3>
                        <p class="specialty">Spesialis Anak</p>
                        <div class="schedule">
                            <p><i class="fas fa-clock me-2"></i>Senin - Kamis: 08:00 - 13:00</p>
                            <p><i class="fas fa-calendar-check me-2"></i>12+ Tahun Pengalaman</p>
                        </div>
                        <button class="btn btn-booking w-100" onclick="bookDoctor('dr. Maya Sari, Sp.A')">
                            <i class="fas fa-calendar-plus me-2"></i>Booking Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function bookDoctor(doctorName) {
    // Play click sound
    const clickSound = document.getElementById('clickSound');
    if (clickSound) clickSound.play();

    // Redirect to booking page with doctor name
    window.location.href = `booking.php?doctor=${encodeURIComponent(doctorName)}`;
}
</script>

<!-- Tambahkan CSS -->
<style>
.doctors-section {
    padding: 120px 0 60px;
    background: var(--dark-bg);
    min-height: 100vh;
}

.section-title {
    color: var(--text-light);
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.section-subtitle {
    color: var(--text-muted);
    font-size: 1.1rem;
    margin-bottom: 3rem;
}

.doctor-card {
    background: var(--card-bg);
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.1);
}

.doctor-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

.doctor-image {
    position: relative;
    overflow: hidden;
}

.doctor-logo {
    width: 100%;
    height: 200px;
    background: linear-gradient(135deg, var(--secondary-color), #2980B9);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.doctor-logo i {
    font-size: 5rem;
    color: white;
    opacity: 0.9;
    transition: all 0.3s ease;
}

.doctor-card:hover .doctor-logo {
    background: linear-gradient(135deg, #2980B9, var(--secondary-color));
}

.doctor-card:hover .doctor-logo i {
    transform: scale(1.1);
    opacity: 1;
}

.doctor-social {
    position: absolute;
    top: 20px;
    right: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    opacity: 0;
    transform: translateX(20px);
    transition: all 0.3s ease;
}

.doctor-card:hover .doctor-social {
    opacity: 1;
    transform: translateX(0);
}

.doctor-social a {
    width: 40px;
    height: 40px;
    background: var(--secondary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
}

.doctor-social a:hover {
    background: var(--accent-color);
    transform: scale(1.1);
}

.doctor-info {
    padding: 25px;
}

.doctor-info h3 {
    color: var(--text-light);
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.specialty {
    color: var(--secondary-color);
    font-size: 1.1rem;
    margin-bottom: 15px;
}

.schedule {
    margin-bottom: 20px;
}

.schedule p {
    color: var(--text-muted);
    margin-bottom: 8px;
    font-size: 0.9rem;
}

.schedule i {
    color: var(--secondary-color);
}

.btn-booking {
    background: var(--secondary-color);
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.btn-booking:hover {
    background: var(--accent-color);
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .doctors-section {
        padding: 100px 0 40px;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .doctor-image img {
        height: 250px;
    }
    
    .doctor-info {
        padding: 20px;
    }
}
</style>

<?php include 'includes/footer.php'; ?> 