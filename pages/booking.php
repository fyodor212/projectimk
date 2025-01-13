<?php include 'includes/header.php'; ?>

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
                <strong>Asisten:</strong> Halo! Ada yang bisa saya bantu dengan booking?
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

<section class="booking-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="booking-form-card">
                    <h2 class="text-center mb-4">Booking Jadwal Konsultasi</h2>
                    <form id="bookingForm" onsubmit="handleBooking(event)" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" required 
                                       oninput="playSound('clickSound')">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">No. Telepon</label>
                                <input type="tel" class="form-control" id="telepon" required
                                       oninput="playSound('clickSound')">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Tanggal Booking</label>
                                <input type="date" class="form-control" id="tanggal" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Waktu</label>
                                <select class="form-control" id="waktu" required>
                                    <option value="">Pilih Waktu</option>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Layanan</label>
                            <select class="form-control" id="layanan" required>
                                <option value="">Pilih Layanan</option>
                                <option value="Spesialis Penyakit Dalam">Spesialis Penyakit Dalam - dr. Rina Putri, Sp.PD</option>
                                <option value="Spesialis Jantung">Spesialis Jantung - dr. Ahmad Fauzi, Sp.JP</option>
                                <option value="Spesialis Anak">Spesialis Anak - dr. Maya Sari, Sp.A</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Catatan Tambahan</label>
                            <textarea class="form-control" id="catatan" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <i class="fas fa-calendar-check me-2"></i>Konfirmasi Booking
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Virtual Assistant Functions
function toggleAssistant() {
    const assistant = document.getElementById('assistant');
    if (!assistant) return;
    assistant.classList.toggle('active');
    try {
        playSound('clickSound');
    } catch (e) {
        console.log('Sound not available');
    }
}

function sendMessage() {
    const input = document.getElementById('userInput');
    const messages = document.getElementById('chatMessages');
    
    if (!input || !messages) return;
    
    if (input.value.trim() !== '') {
        // User Message
        messages.innerHTML += `
            <div class="chat-message user">
                <strong>Anda:</strong> ${input.value}
            </div>
        `;
        
        // Bot Response
        setTimeout(() => {
            messages.innerHTML += `
                <div class="chat-message assistant">
                    <strong>Asisten:</strong> Saya akan membantu Anda dengan proses booking. 
                    Silakan isi form booking di atas dengan lengkap.
                </div>
            `;
            messages.scrollTop = messages.scrollHeight;
            try {
                playSound('successSound');
            } catch (e) {
                console.log('Sound not available');
            }
        }, 1000);
        
        input.value = '';
    }
}

// Audio Functions
function playSound(soundId) {
    const sound = document.getElementById(soundId);
    if (sound) {
        sound.currentTime = 0;
        sound.play();
    }
}

// Audio Agent
const audioAgent = {
    play: function(type) {
        const sound = document.getElementById(type + 'Sound');
        if (sound) {
            sound.currentTime = 0;
            sound.play();
        }
    }
};

// Add sound to all form inputs
document.querySelectorAll('input, select, textarea').forEach(element => {
    element.addEventListener('focus', () => audioAgent.play('click'));
});

function handleBooking(event) {
    event.preventDefault();
    
    // Validasi semua field required
    const requiredFields = {
        nama: 'Nama Lengkap',
        telepon: 'No. Telepon',
        tanggal: 'Tanggal Booking',
        waktu: 'Waktu',
        layanan: 'Layanan'
    };

    let isValid = true;
    let emptyFields = [];

    // Cek setiap field required
    for (const [field, label] of Object.entries(requiredFields)) {
        const value = document.getElementById(field).value.trim();
        if (!value) {
            isValid = false;
            emptyFields.push(label);
            // Tambahkan class invalid
            document.getElementById(field).classList.add('is-invalid');
        } else {
            document.getElementById(field).classList.remove('is-invalid');
        }
    }

    // Jika ada field yang kosong
    if (!isValid) {
        audioAgent.play('error');
        showErrorMessage(`Mohon lengkapi field berikut: ${emptyFields.join(', ')}`);
        return;
    }

    // Ambil nilai dari form
    const booking = {
        nama: document.getElementById('nama').value,
        telepon: document.getElementById('telepon').value,
        tanggal: document.getElementById('tanggal').value,
        waktu: document.getElementById('waktu').value,
        layanan: document.getElementById('layanan').value,
        catatan: document.getElementById('catatan').value
    };

    // Validasi tanggal
    const selectedDate = new Date(booking.tanggal);
    const today = new Date();
    if (selectedDate < today) {
        audioAgent.play('error');
        showErrorMessage('Tanggal booking tidak boleh kurang dari hari ini');
        return;
    }

    // Simpan ke localStorage
    const bookings = JSON.parse(localStorage.getItem('bookings') || '[]');
    bookings.push({
        ...booking,
        id: Date.now(),
        status: 'Menunggu Konfirmasi'
    });
    localStorage.setItem('bookings', JSON.stringify(bookings));

    // Play success sound
    audioAgent.play('success');

    // Tampilkan pesan sukses
    showSuccessMessage(`
        Booking berhasil!<br>
        Nama: ${booking.nama}<br>
        Tanggal: ${booking.tanggal}<br>
        Waktu: ${booking.waktu}<br>
        Layanan: ${booking.layanan}
    `);

    // Reset form
    document.getElementById('bookingForm').reset();
}

function showSuccessMessage(message) {
    const alert = document.createElement('div');
    alert.className = 'alert alert-success alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3';
    alert.setAttribute('role', 'alert');
    alert.innerHTML = `
        <i class="fas fa-check-circle me-2"></i>
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    document.body.appendChild(alert);
    setTimeout(() => alert.remove(), 5000);
}

function showErrorMessage(message) {
    const alert = document.createElement('div');
    alert.className = 'alert alert-danger alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3';
    alert.setAttribute('role', 'alert');
    alert.innerHTML = `
        <i class="fas fa-exclamation-circle me-2"></i>
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    document.body.appendChild(alert);
    setTimeout(() => alert.remove(), 5000);
}
</script>

<?php include 'includes/footer.php'; ?> 