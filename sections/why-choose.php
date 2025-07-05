<!-- Why Choose Us Section -->
<section id="mengapa" class="why-choose-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title h1 fw-bold text-brand-navy">Mengapa Memilih TeknoTeras?</h2>
                <p class="lead text-muted">Keunggulan yang membuat kami berbeda</p>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach (get_features() as $feature): ?>
            <div class="col-lg-3 col-md-6">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="bi <?php echo $feature['icon']; ?>"></i>
                    </div>
                    <h5 class="fw-bold text-brand-navy"><?php echo e($feature['title']); ?></h5>
                    <p class="text-muted"><?php echo e($feature['description']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
