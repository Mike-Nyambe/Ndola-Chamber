<?php 
session_start();

// Secure session handling
session_regenerate_id(true);

// Get current script name
$_self = $_SERVER['PHP_SELF'];

// Set allowed pages
$allowedPages = ['login.php','register.php'];

// Error handling
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Session timeout
$sessionTimeout = 10 * 60; // 10 minutes

// Page Restriction Logic
if (!isset($_SESSION['id']) && !in_array(basename($_self), $allowedPages)) {
    // Redirect to login if not on allowed pages and user is not logged in
    header('location: login.php');
    exit;
} elseif (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $sessionTimeout)) {
    // Expire session and redirect to login if session timeout
    session_unset();
    session_destroy();
    header('location: login.php');
    exit;
} else {
    // Update last activity timestamp
    $_SESSION['last_activity'] = time();
}
?>