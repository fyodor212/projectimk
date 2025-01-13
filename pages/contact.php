<?php include 'includes/header.php'; ?>

<!-- Contact Section -->
<section class="contact-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-white">Hubungi Kami</h2>
            <p class="section-subtitle text-white-50">Kami siap membantu Anda 24/7</p>
        </div>
        
        <div class="row">
            <!-- Contact Information -->
            <div class="col-lg-4 mb-4">
                <div class="contact-info-card">
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Alamat</h4>
                        <p>Jl. Raya Lubuk Begalung<br>Lubuk Begalung Nan XX, Kec. Lubuk Begalung<br>Kota Padang, Sumatera Barat 25221</p>
                    </div>
                    
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <h4>Telepon</h4>
                        <p>(0751) 3435454<br>+62 8199999999</p>
                    </div>
                    
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <h4>Email</h4>
                        <p>info@klinik.ac.id<br>support@klinik.ac.id</p>
                    </div>
                    
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <h4>Jam Operasional</h4>
                        <p>Senin - Jumat: 08:00 - 20:00<br>
                           Sabtu: 09:00 - 17:00<br>
                           Minggu: 09:00 - 15:00</p>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="contact-form-card">
                    <h3>Kirim Pesan</h3>
                    <form id="contactForm" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Subjek</label>
                            <input type="text" class="form-control" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label">Pesan</label>
                            <textarea class="form-control" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Google Maps -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="map-card">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3056936183556!2d100.39787627386738!3d-0.9145711353219368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8cf111ea68d%3A0x5c266e87cce35a63!2sUniversitas%20Putra%20Indonesia%20YPTK%20Padang!5e0!3m2!1sid!2sid!4v1709697431979!5m2!1sid!2sid"
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        referrerpolicy="no-referrer-when-downgrade"
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 