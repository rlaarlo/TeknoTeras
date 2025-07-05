<!-- Services Section -->
<section id="layanan" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title h1 fw-bold text-brand-navy">Layanan Kami</h2>
                <p class="lead text-muted">Solusi teknologi lengkap untuk kebutuhan bisnis dan pendidikan Anda</p>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach (get_services() as $service): ?>
            <div class="col-lg-4 col-md-6">
                <div class="service-card card h-100">
                    <div class="service-icon">
                        <i class="bi <?php echo $service['icon']; ?>"></i>
                    </div>
                    <h4 class="fw-bold mb-3 text-brand-navy"><?php echo e($service['title']); ?></h4>
                    <p class="text-muted">
                        <?php echo e($service['description']); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
