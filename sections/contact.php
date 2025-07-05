<!-- Contact Form Section -->
<section id="kontak" class="contact-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title h1 fw-bold text-white">Hubungi Kami</h2>
                <p class="lead text-white-50">Untuk bekerjasama dengan kami</p>
            </div>
        </div>
        
        <!-- Contact Info Cards -->
        <div class="row justify-content-center g-4 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="contact-card text-center">
                    <div class="mb-3">
                        <i class="bi bi-envelope-at text-brand-orange" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Email</h5>
                    <p class="mb-0">
                        <a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-white text-decoration-none">
                            <?php echo SITE_EMAIL; ?>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-card text-center">
                    <div class="mb-3">
                        <i class="bi bi-telephone text-brand-orange" style="font-size: 3rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Telepon</h5>
                    <p class="mb-0">
                        <a href="<?php echo SITE_WHATSAPP; ?>" class="text-white text-decoration-none">
                            <?php echo SITE_PHONE; ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form-card" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(249, 115, 22, 0.3); border-radius: 20px; padding: 3rem; margin-top: 2rem;">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold text-white mb-2">Kirim Pesan</h3>
                        <p class="text-white-50">Isi form di bawah ini dan kami akan menghubungi Anda segera</p>
                    </div>
                    
                    <!-- Alert Messages -->
                    <div id="form-alert" class="alert alert-dismissible fade" style="display: none;" role="alert">
                        <span id="alert-message"></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <form id="contact-form" class="needs-validation" novalidate onsubmit="return handleFormSubmit(event);">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label text-white">Nama Lengkap *</label>
                                <input type="text" class="form-control" id="name" name="name" required 
                                       style="background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 10px; color: white; padding: 12px 16px;">
                                <div class="invalid-feedback">
                                    Nama harus diisi.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label text-white">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required
                                       style="background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 10px; color: white; padding: 12px 16px;">
                                <div class="invalid-feedback">
                                    Email harus diisi dengan format yang benar.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label text-white">Nomor Telepon *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required
                                       style="background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 10px; color: white; padding: 12px 16px;">
                                <div class="invalid-feedback">
                                    Nomor telepon harus diisi.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="company" class="form-label text-white">Nama Perusahaan/Sekolah</label>
                                <input type="text" class="form-control" id="company" name="company"
                                       style="background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 10px; color: white; padding: 12px 16px;">
                            </div>
                            <div class="col-12">
                                <label for="service" class="form-label text-white">Layanan yang Diminati</label>
                                <select class="form-select" id="service" name="service"
                                        style="background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 10px; color: white; padding: 12px 16px;">
                                    <option value="">Pilih layanan...</option>
                                    <?php foreach (get_services() as $service): ?>
                                    <option value="<?php echo e($service['title']); ?>" style="background: #1e3a8a; color: white;"><?php echo e($service['title']); ?></option>
                                    <?php endforeach; ?>
                                    <option value="Konsultasi Umum" style="background: #1e3a8a; color: white;">Konsultasi Umum</option>
                                    <option value="Lainnya" style="background: #1e3a8a; color: white;">Lainnya</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label text-white">Pesan/Kebutuhan Detail *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required 
                                    placeholder="Jelaskan kebutuhan Anda secara detail..."
                                    style="background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 10px; color: white; padding: 12px 16px;"></textarea>
                                <div class="invalid-feedback">
                                    Pesan harus diisi.
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="agree" name="agree" required>
                                    <label class="form-check-label text-white-50" for="agree">
                                        Saya setuju untuk dihubungi oleh tim TeknoTeras mengenai layanan yang tersedia. *
                                    </label>
                                    <div class="invalid-feedback">
                                        Anda harus menyetujui untuk melanjutkan.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary-custom btn-lg px-5" id="submit-btn"
                                        style="background: linear-gradient(135deg, #f97316 0%, #dc2626 100%); border: none; padding: 14px 35px; border-radius: 50px; font-weight: 600; color: white; box-shadow: 0 4px 15px rgba(249, 115, 22, 0.4); transition: all 0.3s ease;">
                                    <i class="bi bi-send me-2"></i>
                                    <span id="btn-text">Kirim Pesan</span>
                                    <span id="btn-loading" class="d-none">
                                        <span class="spinner-border spinner-border-sm me-2"></span>
                                        Mengirim...
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function handleFormSubmit(event) {
    event.preventDefault();
    event.stopPropagation();
    
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const btnText = document.getElementById('btn-text');
    const btnLoading = document.getElementById('btn-loading');
    const formAlert = document.getElementById('form-alert');
    const alertMessage = document.getElementById('alert-message');
    
    // Bootstrap validation
    if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return false;
    }
    
    // Show loading state
    setLoadingState(true);
    hideAlert();
    
    // Prepare form data
    const formData = new FormData(form);
    
    // Send to server
    fetch('/api/contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        setLoadingState(false);
        
        if (data.success) {
            showAlert('success', data.message);
            form.reset();
            form.classList.remove('was-validated');
        } else {
            showAlert('danger', data.message);
        }
    })
    .catch(error => {
        setLoadingState(false);
        console.error('Error:', error);
        showAlert('danger', 'Terjadi kesalahan jaringan. Silakan coba lagi.');
    });
    
    return false;
    
    function setLoadingState(isLoading) {
        if (isLoading) {
            submitBtn.disabled = true;
            btnText.classList.add('d-none');
            btnLoading.classList.remove('d-none');
        } else {
            submitBtn.disabled = false;
            btnText.classList.remove('d-none');
            btnLoading.classList.add('d-none');
        }
    }
    
    function showAlert(type, message) {
        formAlert.className = `alert alert-${type} alert-dismissible fade show`;
        alertMessage.textContent = message;
        formAlert.style.display = 'block';
        
        // Auto hide after 5 seconds for success messages
        if (type === 'success') {
            setTimeout(() => {
                hideAlert();
            }, 5000);
        }
        
        // Scroll to alert
        formAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
    
    function hideAlert() {
        formAlert.style.display = 'none';
        formAlert.classList.remove('show');
    }
}

// Prevent any other form submission handlers
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        // Remove any existing event listeners
        contactForm.onsubmit = handleFormSubmit;
        
        // Add input styling on focus for better UX
        const inputs = contactForm.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.borderColor = '#f97316';
                this.style.boxShadow = '0 0 0 0.2rem rgba(249, 115, 22, 0.25)';
            });
            
            input.addEventListener('blur', function() {
                this.style.borderColor = 'rgba(255, 255, 255, 0.3)';
                this.style.boxShadow = 'none';
            });
        });
    }
});
</script>