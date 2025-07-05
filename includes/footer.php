    <!-- Enhanced Footer -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="<?php echo asset('TeknoTerasWhite.png'); ?>" alt="<?php echo SITE_NAME; ?>" class="footer-logo me-3">
                        </div>
                        <p class="text-brand-orange fw-semibold"><?php echo SITE_TAGLINE; ?></p>
                        <p class="text-light mt-3">
                            Mitra teknologi terpercaya untuk transformasi digital sekolah dan bisnis Anda. 
                            Kami menghadirkan solusi inovatif yang praktis dan efisien.
                        </p>
                    </div>
                    <div class="social-icons">
                        <?php foreach (get_social_links() as $social): ?>
                        <a href="<?php echo $social['href']; ?>" title="<?php echo $social['title']; ?>">
                            <i class="bi <?php echo $social['icon']; ?>"></i>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <?php $footer_links = get_footer_links(); ?>
                
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3"><?php echo $footer_links['services']['title']; ?></h5>
                    <div class="footer-links">
                        <?php foreach ($footer_links['services']['links'] as $link): ?>
                        <a href="<?php echo $link['href']; ?>">
                            <i class="bi <?php echo $link['icon']; ?>"></i><?php echo $link['text']; ?>
                        </a><br>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3"><?php echo $footer_links['company']['title']; ?></h5>
                    <div class="footer-links">
                        <?php foreach ($footer_links['company']['links'] as $link): ?>
                        <a href="<?php echo $link['href']; ?>">
                            <i class="bi <?php echo $link['icon']; ?>"></i><?php echo $link['text']; ?>
                        </a><br>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Kontak Info</h5>
                    <div class="footer-links">
                        <a href="mailto:<?php echo SITE_EMAIL; ?>">
                            <i class="bi bi-envelope"></i><?php echo SITE_EMAIL; ?>
                        </a><br>
                        <a href="<?php echo SITE_WHATSAPP; ?>">
                            <i class="bi bi-telephone"></i><?php echo SITE_PHONE; ?>
                        </a><br>
                        <a href="#">
                            <i class="bi bi-geo-alt"></i><?php echo COMPANY_ADDRESS; ?>
                        </a><br>
                        <a href="#">
                            <i class="bi bi-clock"></i><?php echo COMPANY_SUPPORT; ?>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="my-4 border-secondary">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 text-light">
                        &copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <p class="mb-0">
                        <span class="text-light">Made with</span> 
                        <i class="bi bi-heart-fill text-brand-red mx-1"></i> 
                        <span class="text-light">- Teknologi yang mudah, bukan rumit.</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="<?php echo JS_PATH; ?>main.js"></script>
</body>
</html>
