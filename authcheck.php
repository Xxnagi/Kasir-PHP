<?php
session_start();

if (isset($_SESSION['userid'])) {
    if ($_SESSION['role_id'] == 2) {
        // Redirect to kasir.php
        header("location:kasir.php");
        exit;
    }
} else {
    // Set error message and redirect to login.php
    $_SESSION['error'] = 'Anda Harus Login Dahulu';
    header("location:index.php");
    exit;
}
