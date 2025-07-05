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
                <div class="contact-form-card">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold text-white mb-2">Kirim Pesan</h3>
                        <p class="text-white-50">Isi form di bawah ini dan kami akan menghubungi Anda segera</p>
                    </div>
                    
                    <!-- Alert Messages -->
                    <div id="form-alert" class="alert alert-dismissible fade" style="display: none;" role="alert">
                        <span id="alert-message"></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>

                    <form id="contact-form" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label text-white">Nama Lengkap *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="invalid-feedback">
                                    Nama harus diisi.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label text-white">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">
                                    Email harus diisi dengan format yang benar.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label text-white">Nomor Telepon *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                <div class="invalid-feedback">
                                    Nomor telepon harus diisi.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="company" class="form-label text-white">Nama Perusahaan/Sekolah</label>
                                <input type="text" class="form-control" id="company" name="company">
                            </div>
                            <div class="col-12">
                                <label for="service" class="form-label text-white">Layanan yang Diminati</label>
                                <select class="form-select" id="service" name="service">
                                    <option value="">Pilih layanan...</option>
                                    <?php foreach (get_services() as $service): ?>
                                    <option value="<?php echo e($service['title']); ?>"><?php echo e($service['title']); ?></option>
                                    <?php endforeach; ?>
                                    <option value="Konsultasi Umum">Konsultasi Umum</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label text-white">Pesan/Kebutuhan Detail *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required 
                                    placeholder="Jelaskan kebutuhan Anda secara detail..."></textarea>
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
                                <button type="submit" class="btn btn-primary-custom btn-lg px-5" id="submit-btn">
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
