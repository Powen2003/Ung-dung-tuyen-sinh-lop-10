<?php
// Session start
session_start();

// Get form data
$sbd = isset($_POST['sbd']) ? trim($_POST['sbd']) : '';
$code = isset($_POST['code']) ? trim($_POST['code']) : '';
$rememberMe = isset($_POST['rememberMe']) ? true : false;

// Basic validation
if (empty($sbd) || empty($code)) {
    $_SESSION['error'] = 'Vui lòng nhập đầy đủ thông tin đăng nhập';
    header('Location: login.php');
    exit;
}

// Validate SBD format (numbers only)
if (!preg_match('/^\d+$/', $sbd)) {
    $_SESSION['error'] = 'Số báo danh chỉ chứa các chữ số';
    header('Location: login.php');
    exit;
}

// TODO: Replace with actual database validation
// For now, we'll use demo credentials
$valid_sbd = '123456';
$valid_code = 'abc123';

// Verify credentials
if ($sbd === $valid_sbd && $code === $valid_code) {
    // Set session variables
    $_SESSION['student_id'] = $sbd;
    $_SESSION['student_name'] = 'Nguyễn Văn A';
    $_SESSION['logged_in'] = true;
    
    // Handle "Remember Me" functionality
    if ($rememberMe) {
        setcookie('student_sbd', $sbd, time() + (86400 * 30), '/'); // 30 days
    }
    
    // Log successful login
    error_log("Student login successful: SBD = $sbd at " . date('Y-m-d H:i:s'));
    
    // Redirect to dashboard
    header('Location: dashboard.php');
    exit;
} else {
    // Invalid credentials
    $_SESSION['error'] = 'Số báo danh hoặc mã tra cứu không chính xác. Vui lòng thử lại.';
    error_log("Failed login attempt: SBD = $sbd at " . date('Y-m-d H:i:s'));
    header('Location: login.php');
    exit;
}
?>
test branch