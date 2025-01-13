<div class="feedback-modal" id="feedbackModal">
    <div class="modal-content">
        <h4>Bantu Kami Meningkatkan Layanan</h4>
        
        <!-- Rating -->
        <div class="rating-container">
            <p>Seberapa puas Anda dengan layanan kami?</p>
            <div class="star-rating">
                <?php for($i = 1; $i <= 5; $i++): ?>
                <i class="fas fa-star" data-rating="<?php echo $i; ?>"></i>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Feedback Form -->
        <form id="feedbackForm">
            <div class="form-group">
                <label>Apa yang bisa kami tingkatkan?</label>
                <textarea class="form-control" required></textarea>
            </div>
            
            <!-- Usability Questions -->
            <div class="usability-questions">
                <p>Seberapa mudah menggunakan website ini?</p>
                <div class="likert-scale">
                    <label><input type="radio" name="usability" value="1"> Sangat Sulit</label>
                    <label><input type="radio" name="usability" value="2"> Sulit</label>
                    <label><input type="radio" name="usability" value="3"> Netral</label>
                    <label><input type="radio" name="usability" value="4"> Mudah</label>
                    <label><input type="radio" name="usability" value="5"> Sangat Mudah</label>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Kirim Feedback</button>
        </form>
    </div>
</div> 