<?php
// session_start();
include 'config.php';
include 'authcheck.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_query($dbconnect, "DELETE FROM user WHERE id_user='$id'");

    $_SESSION['success'] = 'Berhasil Menghapus Data';

    header("location:user.php");
}

?>