<?php
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to login page with optional logout message
header("Location:../index.php?logout=1");
exit;
?>
