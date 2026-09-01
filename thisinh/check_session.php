<?php
/**
 * Session Validation Helper
 * Checks if student is logged in and validates session
 */

session_start();

// Check if student is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Try to restore from "Remember Me" cookie
    if (isset($_COOKIE['student_sbd'])) {
        $_SESSION['student_id'] = $_COOKIE['student_sbd'];
        $_SESSION['logged_in'] = true;
    } else {
        // Redirect to login
        header('Location: login.php');
        exit;
    }
}

// Optional: Set session timeout (30 minutes of inactivity)
$timeout_duration = 1800; // 30 minutes

if (isset($_SESSION['last_activity'])) {
    $elapsed_time = time() - $_SESSION['last_activity'];
    
    if ($elapsed_time >= $timeout_duration) {
        session_unset();
        session_destroy();
        header('Location: login.php?timeout=1');
        exit;
    }
}

// Update last activity time
$_SESSION['last_activity'] = time();
?>