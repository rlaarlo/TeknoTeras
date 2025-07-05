<?php
/**
 * Common functions for TeknoTeras website
 */

/**
 * Get asset URL
 */
function asset($path) {
    return ASSETS_PATH . $path;
}

/**
 * Get full URL
 */
function url($path = '') {
    return SITE_URL . '/' . ltrim($path, '/');
}

/**
 * Escape output for security
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Include partial with data
 */
function include_partial($partial, $data = []) {
    extract($data);
    include "partials/{$partial}.php";
}

/**
 * Get navigation menu items
 */
function get_navigation_items() {
    return [
        [
            'label' => 'Beranda',
            'href' => '#home',
            'icon' => 'bi-house'
        ],
        [
            'label' => 'Layanan',
            'href' => '#layanan',
            'icon' => 'bi-gear'
        ],
        [
            'label' => 'Mengapa Kami',
            'href' => '#mengapa',
            'icon' => 'bi-star'
        ],
        [
            'label' => 'Kontak',
            'href' => '#kontak',
            'icon' => 'bi-telephone'
        ]
    ];
}

/**
 * Get services data
 */
function get_services() {
    return [
        [
            'icon' => 'bi-tools',
            'title' => 'Konsultasi & Penyediaan Hardware',
            'description' => 'Kami membantu memilih dan menyediakan perangkat terbaik yang sesuai dengan kebutuhan operasional Anda — mulai dari komputer, jaringan, hingga perangkat pendukung lainnya.'
        ],
        [
            'icon' => 'bi-laptop',
            'title' => 'Solusi Software',
            'description' => 'Kami merancang dan mengembangkan aplikasi serta sistem yang disesuaikan dengan kebutuhan bisnis atau sekolah Anda.'
        ],
        [
            'icon' => 'bi-globe',
            'title' => 'Pembuatan Website',
            'description' => 'Kami membuat website profesional dan responsif yang merepresentasikan identitas Anda secara modern dan fungsional.'
        ]
    ];
}

/**
 * Get partner logos
 */
function get_partners() {
    return [
        [
            'name' => 'AMD',
            'logo' => 'https://www.amd.com/content/dam/code/images/header/amd-header-logo.svg'
        ],
        [
            'name' => 'ASUS',
            'logo' => 'https://press.asus.com/assets/w_854,h_640/3625f3e5-dec1-4625-aa20-86f1a394ba4c/ASUS%20logo%20white.png'
        ],
        [
            'name' => 'Oracle',
            'logo' => 'https://www.amd.com/content/dam/amd/en/images/logos/partners/oracle-white-padded-logo.png'
        ],
        [
            'name' => 'Lenovo',
            'logo' => 'https://www.amd.com/content/dam/amd/en/images/logos/partners/lenovo-white-padded-logo.png'
        ],
        [
            'name' => 'Cisco',
            'logo' => 'https://www.amd.com/content/dam/amd/en/images/logos/partners/cisco-white-padded-logo.png'
        ],
        [
            'name' => 'Microsoft',
            'logo' => 'https://www.amd.com/content/dam/amd/en/images/logos/partners/2559150-microsoft-white-padded-logo.png'
        ],
        [
            'name' => 'Google Cloud',
            'logo' => 'https://www.amd.com/content/dam/amd/en/images/logos/partners/google-cloud-vertical-white-padded-logo.png'
        ],
        [
            'name' => 'Dell Technologies',
            'logo' => 'https://www.amd.com/content/dam/amd/en/images/logos/partners/dell-technologies-white-padded-logo.png'
        ]
    ];
}

/**
 * Get why choose us features
 */
function get_features() {
    return [
        [
            'icon' => 'bi-person-heart',
            'title' => 'Pendekatan Personal',
            'description' => 'Kami memahami bahwa setiap klien itu unik. Solusi kami disesuaikan, bukan generik.'
        ],
        [
            'icon' => 'bi-layers',
            'title' => 'Layanan Menyeluruh',
            'description' => 'Semua kebutuhan IT Anda, dari hardware hingga software, kami tangani secara menyatu.'
        ],
        [
            'icon' => 'bi-headset',
            'title' => 'Dukungan Penuh',
            'description' => 'Kami tidak hanya hadir saat awal, tapi juga siap membantu kapan pun Anda butuh.'
        ],
        [
            'icon' => 'bi-heart',
            'title' => 'Teknologi dengan Hati',
            'description' => 'Kami bekerja dengan rasa tanggung jawab dan kepedulian terhadap hasil yang Anda harapkan.'
        ]
    ];
}

/**
 * Get footer links
 */
function get_footer_links() {
    return [
        'services' => [
            'title' => 'Layanan',
            'links' => [
                ['icon' => 'bi-tools', 'text' => 'Hardware', 'href' => '#layanan'],
                ['icon' => 'bi-laptop', 'text' => 'Software', 'href' => '#layanan'],
                ['icon' => 'bi-globe', 'text' => 'Website', 'href' => '#layanan'],
                ['icon' => 'bi-headset', 'text' => 'Konsultasi', 'href' => '#layanan']
            ]
        ],
        'company' => [
            'title' => 'Perusahaan',
            'links' => [
                ['icon' => 'bi-house', 'text' => 'Tentang Kami', 'href' => '#home'],
                ['icon' => 'bi-star', 'text' => 'Keunggulan', 'href' => '#mengapa'],
                ['icon' => 'bi-briefcase', 'text' => 'Karir', 'href' => '#'],
                ['icon' => 'bi-file-text', 'text' => 'Blog', 'href' => '#']
            ]
        ]
    ];
}

/**
 * Get social media links
 */
function get_social_links() {
    return [
        ['icon' => 'bi-facebook', 'href' => SOCIAL_FACEBOOK, 'title' => 'Facebook'],
        ['icon' => 'bi-instagram', 'href' => SOCIAL_INSTAGRAM, 'title' => 'Instagram'],
        ['icon' => 'bi-linkedin', 'href' => SOCIAL_LINKEDIN, 'title' => 'LinkedIn'],
        ['icon' => 'bi-twitter', 'href' => SOCIAL_TWITTER, 'title' => 'Twitter'],
        ['icon' => 'bi-youtube', 'href' => SOCIAL_YOUTUBE, 'title' => 'YouTube']
    ];
}
?>
