<?php
include 'config.php';
include "authcheckkasir.php";

$bayar = preg_replace('/\D/', '', $_POST['bayar']);
$total = $_POST['total'];
$nama = $_SESSION['nama'];

// Membuat prepared statement untuk memanggil prosedur
$query = "CALL ProcessTransaction(?, ?, ?)";
$statement = mysqli_prepare($dbconnect, $query);
mysqli_stmt_bind_param($statement, 'dds', $bayar, $total, $nama);
mysqli_stmt_execute($statement);
mysqli_stmt_bind_result($statement, $id_transaksi);
mysqli_stmt_fetch($statement);

header("location:transaksi_selesai.php?idtrx=".$id_transaksi);
?>