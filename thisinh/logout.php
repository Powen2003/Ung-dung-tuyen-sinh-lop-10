<?php
// Session start
session_start();

// Clear session variables
session_unset();
session_destroy();

// Clear remember me cookie if exists
if (isset($_COOKIE['student_sbd'])) {
    setcookie('student_sbd', '', time() - 3600, '/');
}

// Log logout
error_log("Student logout at " . date('Y-m-d H:i:s'));

// Redirect to login page
header('Location: login.php');
exit;
?>
