# Google Sheets Contact Form Setup Guide

## 📋 Langkah-langkah Setup Google Sheets Integration

### 1. Buat Google Sheet Baru
1. Buka [Google Sheets](https://sheets.google.com)
2. Klik "Blank" untuk membuat sheet baru
3. Beri nama sheet: "TeknoTeras Contact Form"
4. Copy URL sheet dan ambil ID-nya
   - URL: `https://docs.google.com/spreadsheets/d/1eHFgQjP5ZQx38YS-ipDvmtKJAudAE698dam95kd0BUo/edit?usp=sharing`
   - ID: `1eHFgQjP5ZQx38YS-ipDvmtKJAudAE698dam95kd0BUo`

### 2. Setup Google Apps Script
1. Buka [Google Apps Script](https://script.google.com)
2. Klik "New Project"
3. Ganti nama project menjadi "TeknoTeras Contact Form"
4. Hapus kode default dan copy paste kode dari `google-apps-script/Code.gs`
5. Ganti `YOUR_GOOGLE_SHEET_ID` dengan ID sheet yang sudah dicopy
6. Ganti email notifikasi di fungsi `sendEmailNotification()`

### 3. Deploy Web App
1. Di Google Apps Script, klik "Deploy" > "New deployment"
2. Pilih type: "Web app"
3. Execute as: "Me"
4. Who has access: "Anyone"
5. Klik "Deploy"
6. Copy URL deployment yang diberikan
7. Paste URL tersebut ke `config/config.php` di konstanta `GOOGLE_SCRIPT_URL`

### 4. Set Permissions
1. Saat pertama kali deploy, akan diminta permission
2. Klik "Review permissions"
3. Pilih akun Google
4. Klik "Advanced" > "Go to TeknoTeras Contact Form (unsafe)"
5. Klik "Allow"

### 5. Test Integration
1. Buka website TeknoTeras
2. Scroll ke bagian "Hubungi Kami"
3. Isi form dan submit
4. Cek Google Sheet apakah data masuk
5. Cek email apakah notifikasi terkirim

## 🔧 Konfigurasi Email Notifikasi

Edit di Google Apps Script (`sendEmailNotification` function):

```javascript
const recipient = 'your-email@domain.com'; // Ganti dengan email Anda
```

## 📊 Format Data di Google Sheet

Data akan tersimpan dengan kolom:
- **Timestamp**: Waktu pengiriman
- **Nama**: Nama lengkap
- **Email**: Email pengirim
- **Telepon**: Nomor telepon
- **Perusahaan**: Nama perusahaan/sekolah
- **Layanan**: Layanan yang diminati
- **Pesan**: Pesan detail
- **IP Address**: IP address pengirim

## 🚨 Troubleshooting

### Error "Cannot access Google Sheet"
- Pastikan Sheet ID benar
- Pastikan permissions sudah diberikan
- Cek apakah sheet masih ada dan tidak dihapus

### Form tidak terkirim
- Cek Network tab di browser developer tools
- Pastikan URL Google Apps Script benar
- Cek apakah web app sudah di-deploy dengan benar

### Email notifikasi tidak masuk
- Cek spam folder
- Pastikan email recipient benar
- Cek quota email Google Apps Script (100 email/hari)

## 🔒 Security Features

- ✅ CSRF Protection dengan form validation
- ✅ Input sanitization dan validation
- ✅ Rate limiting (Google Apps Script default)
- ✅ IP Address logging
- ✅ Required fields validation

## 📈 Analytics & Monitoring

Untuk monitoring form submissions:
1. Buka Google Sheet
2. Buat pivot table untuk analisis data
3. Setup Google Analytics events (opsional)
4. Monitor email notifications

## 🎯 Tips Optimasi

1. **Responsive Design**: Form sudah responsive untuk mobile
2. **User Experience**: Loading states dan success messages
3. **Validation**: Client-side dan server-side validation
4. **Performance**: Async form submission tanpa page reload

---

**✅ Setelah setup selesai, contact form siap digunakan!**
