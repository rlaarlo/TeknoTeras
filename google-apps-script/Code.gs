/**
 * Google Apps Script untuk TeknoTeras Contact Form
 * 
 * Setup Instructions:
 * 1. Buka https://script.google.com/
 * 2. Buat project baru
 * 3. Copy paste kode ini ke Code.gs
 * 4. Buat Google Sheet baru untuk menyimpan data
 * 5. Copy ID Google Sheet ke SHEET_ID
 * 6. Deploy sebagai Web App
 * 7. Copy URL deployment ke config.php
 */

// Configuration
const SHEET_ID = 'YOUR_GOOGLE_SHEET_ID'; // Ganti dengan ID Google Sheet Anda
const SHEET_NAME = 'Contact Form'; // Nama sheet

function doPost(e) {
  try {
    // Parse form data
    const formData = e.parameter;
    
    // Validate required fields
    if (!formData.name || !formData.email || !formData.phone || !formData.message) {
      return ContentService
        .createTextOutput(JSON.stringify({
          success: false,
          message: 'Missing required fields'
        }))
        .setMimeType(ContentService.MimeType.JSON);
    }
    
    // Get or create spreadsheet
    const sheet = getOrCreateSheet();
    
    // Prepare data row
    const rowData = [
      new Date(), // Timestamp
      formData.name || '',
      formData.email || '',
      formData.phone || '',
      formData.company || '',
      formData.service || '',
      formData.message || '',
      formData.ip_address || ''
    ];
    
    // Add data to sheet
    sheet.appendRow(rowData);
    
    // Optional: Send email notification
    sendEmailNotification(formData);
    
    return ContentService
      .createTextOutput(JSON.stringify({
        success: true,
        message: 'Data berhasil disimpan'
      }))
      .setMimeType(ContentService.MimeType.JSON);
      
  } catch (error) {
    console.error('Error:', error);
    return ContentService
      .createTextOutput(JSON.stringify({
        success: false,
        message: 'Terjadi kesalahan server'
      }))
      .setMimeType(ContentService.MimeType.JSON);
  }
}

function getOrCreateSheet() {
  try {
    const spreadsheet = SpreadsheetApp.openById(SHEET_ID);
    let sheet = spreadsheet.getSheetByName(SHEET_NAME);
    
    // Create sheet if it doesn't exist
    if (!sheet) {
      sheet = spreadsheet.insertSheet(SHEET_NAME);
      
      // Add headers
      const headers = [
        'Timestamp',
        'Nama',
        'Email', 
        'Telepon',
        'Perusahaan',
        'Layanan',
        'Pesan',
        'IP Address'
      ];
      
      sheet.getRange(1, 1, 1, headers.length).setValues([headers]);
      
      // Format headers
      const headerRange = sheet.getRange(1, 1, 1, headers.length);
      headerRange.setFontWeight('bold');
      headerRange.setBackground('#4285f4');
      headerRange.setFontColor('white');
      
      // Auto-resize columns
      sheet.autoResizeColumns(1, headers.length);
    }
    
    return sheet;
  } catch (error) {
    console.error('Error accessing sheet:', error);
    throw new Error('Cannot access Google Sheet');
  }
}

function sendEmailNotification(formData) {
  try {
    // Email configuration - ganti dengan email Anda
    const recipient = 'info@teknoteras.com'; // Email penerima notifikasi
    const subject = `[TeknoTeras] Pesan Baru dari ${formData.name}`;
    
    // Email body
    const body = `
Pesan baru masuk melalui website TeknoTeras:

Nama: ${formData.name}
Email: ${formData.email}
Telepon: ${formData.phone}
Perusahaan: ${formData.company || 'Tidak disebutkan'}
Layanan: ${formData.service || 'Tidak dipilih'}

Pesan:
${formData.message}

IP Address: ${formData.ip_address || 'Unknown'}
Waktu: ${new Date().toLocaleString('id-ID')}

--
Pesan ini dikirim otomatis dari sistem TeknoTeras.
    `;
    
    // Send email
    MailApp.sendEmail({
      to: recipient,
      subject: subject,
      body: body
    });
    
  } catch (error) {
    console.error('Error sending email:', error);
    // Don't throw error here to avoid breaking the main process
  }
}

function doGet(e) {
  // Test function - optional
  return ContentService
    .createTextOutput('TeknoTeras Contact Form API is working!')
    .setMimeType(ContentService.MimeType.TEXT);
}

// Test function untuk memastikan sheet berfungsi
function testSheet() {
  try {
    const sheet = getOrCreateSheet();
    console.log('Sheet berhasil diakses:', sheet.getName());
    return true;
  } catch (error) {
    console.error('Error:', error);
    return false;
  }
}
