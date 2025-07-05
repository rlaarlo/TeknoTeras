# TeknoTeras - Modular PHP Website

Website perusahaan TeknoTeras yang dibangun dengan struktur modular PHP untuk kemudahan maintenance dan pengembangan.

## Struktur Direktori

```
TT/
├── index.php                 # Halaman utama
├── config/
│   └── config.php           # Konfigurasi situs
├── includes/
│   ├── header.php           # Header dan navigasi
│   ├── footer.php           # Footer
│   └── functions.php        # Fungsi-fungsi umum
├── sections/
│   ├── services.php         # Bagian layanan
│   ├── partners.php         # Bagian partner
│   ├── why-choose.php       # Bagian mengapa memilih kami
│   └── contact.php          # Bagian kontak
├── partials/
│   ├── service-card.php     # Komponen kartu layanan
│   ├── feature-item.php     # Komponen item fitur
│   └── contact-card.php     # Komponen kartu kontak
├── css/
│   └── styles.css           # Stylesheet utama
├── js/
│   └── main.js              # JavaScript utama
└── asset/
    ├── TeknoTeras.png       # Logo utama
    └── TeknoTerasWhite.png  # Logo putih untuk footer
```

## Fitur Modular

### 1. Konfigurasi Terpusat
- `config/config.php`: Semua konstanta dan pengaturan situs
- Mudah untuk mengubah informasi kontak, tagline, dll

### 2. Fungsi Reusable
- `includes/functions.php`: Berisi fungsi-fungsi untuk:
  - Asset management
  - URL generation
  - Data retrieval (services, partners, features)
  - Security (output escaping)

### 3. Template Parts
- `includes/header.php`: Header dengan navigasi dinamis
- `includes/footer.php`: Footer dengan data dari konfigurasi
- Sections terpisah untuk setiap bagian halaman

### 4. Komponen Reusable
- `partials/`: Komponen-komponen kecil yang dapat digunakan berulang
- Menggunakan sistem `include_partial()` untuk passing data

## Cara Penggunaan

### Menambah Layanan Baru
Edit fungsi `get_services()` di `includes/functions.php`:

```php
function get_services() {
    return [
        // ... layanan existing
        [
            'icon' => 'bi-icon-name',
            'title' => 'Layanan Baru',
            'description' => 'Deskripsi layanan baru'
        ]
    ];
}
```

### Mengubah Informasi Kontak
Edit `config/config.php`:

```php
define('SITE_EMAIL', 'email-baru@domain.com');
define('SITE_PHONE', '+62xxxxxxxxxx');
```

### Menambah Partner Baru
Edit fungsi `get_partners()` di `includes/functions.php`:

```php
[
    'name' => 'Partner Name',
    'logo' => 'https://partner-logo-url.com/logo.png'
]
```

## Keunggulan Struktur Modular

1. **Maintainability**: Kode terorganisir dan mudah dipelihara
2. **Reusability**: Komponen dapat digunakan berulang
3. **Scalability**: Mudah menambah fitur baru
4. **Security**: Output escaping otomatis
5. **Flexibility**: Mudah mengubah tampilan dan konten
6. **Performance**: CSS dan JS terpisah untuk optimasi loading

## Dependencies

- Bootstrap 5.3.2
- Bootstrap Icons 1.11.1
- Google Fonts (Inter)
- PHP 7.4+

## Setup

1. Extract ke direktori web server (contoh: `htdocs`, `www`)
2. Pastikan PHP sudah terinstall
3. Akses melalui browser: `http://localhost/TT`

## Customization

- **Warna Brand**: Edit variabel CSS di `css/styles.css`
- **Font**: Ganti Google Fonts import di `includes/header.php`
- **Logo**: Replace file di folder `asset/`
- **Konten**: Edit data arrays di `includes/functions.php`

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

---

Made with ❤️ for TeknoTeras - Teknologi yang mudah, bukan rumit.
