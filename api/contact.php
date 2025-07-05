<?php
/**
 * Contact form handler
 */

// Include configuration
require_once '../config/config.php';
require_once '../includes/functions.php';

// Set response header
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get and validate form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$company = trim($_POST['company'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

// Basic validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Nama harus diisi';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email harus diisi dengan format yang benar';
}

if (empty($phone)) {
    $errors[] = 'Nomor telepon harus diisi';
}

if (empty($message)) {
    $errors[] = 'Pesan harus diisi';
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
    exit;
}

// Prepare data for Google Sheets
$data = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'company' => $company,
    'service' => $service,
    'message' => $message,
    'timestamp' => date('Y-m-d H:i:s'),
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown'
];

// Google Apps Script Web App URL
$google_script_url = GOOGLE_SCRIPT_URL;

// Send data to Google Sheets via Apps Script
$response = send_to_google_sheets($google_script_url, $data);

if ($response) {
    echo json_encode([
        'success' => true, 
        'message' => 'Terima kasih! Pesan Anda telah terkirim. Kami akan menghubungi Anda segera.'
    ]);
} else {
    echo json_encode([
        'success' => false, 
        'message' => 'Maaf, terjadi kesalahan. Silakan coba lagi atau hubungi kami langsung.'
    ]);
}

/**
 * Send data to Google Sheets via Apps Script
 */
function send_to_google_sheets($url, $data) {
    try {
        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
                'timeout' => 10
            ]
        ];
        
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        
        return $result !== false;
    } catch (Exception $e) {
        error_log('Google Sheets integration error: ' . $e->getMessage());
        return false;
    }
}
?>
