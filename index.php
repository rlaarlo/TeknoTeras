<?php
// Include configuration and functions
require_once 'config/config.php';
require_once 'includes/functions.php';

// Page data
$page_data = [
    'title' => 'TeknoTeras - Barang asli dijamin puas!',
    'description' => 'TeknoTeras menyediakan solusi teknologi praktis dan terpercaya untuk sekolah dan bisnis. Layanan konsultasi hardware, software, dan pembuatan website.',
    'current_page' => 'home'
];

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section id="home" class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold text-white mb-3">
                    TeknoTeras – Mitra untuk 
                    <span class="text-warning">Sekolah dan Bisnis</span> Anda
                </h1>
                <p class="brand-tagline text-white mb-4">
                    <strong><?php echo SITE_TAGLINE; ?></strong>
                </p>
                <p class="lead text-white-50 mb-4">
                    Kami hadir untuk membantu Anda menghadirkan solusi teknologi yang praktis, efisien, dan terpercaya. 
                    Kami menyediakan layanan software dan hardware, termasuk konsultasi dan rekomendasi perangkat yang tepat 
                    untuk perusahaan dan institusi pendidikan.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <button class="btn btn-primary-custom btn-lg" onclick="scrollToSection('layanan')">
                        <i class="bi bi-rocket-takeoff me-2"></i>Jelajahi Layanan
                    </button>
                    <button class="btn btn-outline-custom btn-lg" onclick="scrollToSection('kontak')">
                        <i class="bi bi-telephone me-2"></i>Hubungi Kami
                    </button>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="floating-animation">
                    <i class="bi bi-gear-wide-connected text-white" style="font-size: 15rem; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="section-title h1 fw-bold text-brand-navy">Mari Bersama-sama Menjadi Lebih Baik</h2>
                <p class="lead text-muted">
                    Kami percaya bahwa teknologi yang baik bukan hanya soal kecanggihan, 
                    tapi juga soal <span class="text-brand-orange fw-bold">kesesuaian dan kemudahan</span> bagi penggunanya.
                </p>
            </div>
        </div>
    </div>
</section>

<?php 
// Include sections
include 'sections/services.php';
include 'sections/partners.php';
include 'sections/why-choose.php';
include 'sections/contact.php';

// Include footer
include 'includes/footer.php';
?>
