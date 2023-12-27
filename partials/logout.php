<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
session_destroy();

// Check if the session is really destroyed
if(session_status() == PHP_SESSION_NONE) {
    echo 'Session destroyed successfully.<br>';
} else {
    echo 'Session destruction failed.<br>';
}

// Redirect to the index page
header('location: ../index.php');
exit();
?>
