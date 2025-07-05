<!-- Partners Section -->
<section class="partners-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title h1 fw-bold text-white">Partner Teknologi Terpercaya</h2>
                <p class="lead text-white-50">Kami bekerja sama dengan brand-brand terkemuka dunia</p>
            </div>
        </div>
        <div class="partners-slider">
            <div class="partners-track">
                <!-- First set of logos -->
                <?php 
                $partners = get_partners();
                foreach ($partners as $partner): 
                ?>
                <div class="partner-item">
                    <img src="<?php echo $partner['logo']; ?>" 
                         alt="<?php echo e($partner['name']); ?>" 
                         class="partner-logo">
                </div>
                <?php endforeach; ?>
                
                <!-- Duplicate set for seamless loop -->
                <?php foreach ($partners as $partner): ?>
                <div class="partner-item">
                    <img src="<?php echo $partner['logo']; ?>" 
                         alt="<?php echo e($partner['name']); ?>" 
                         class="partner-logo">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
