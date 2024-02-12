<?php
session_start();

if(isset($_SESSION['userid']))
{
    if($_SESSION['role_id']==1)
    {
        //mengalihkan ke halaman index.php
        header("location:index.php");
    } 
}else{
    $_SESSION['error'] = 'Anda Harus Login Dahulu';
    header("location:login.php");
}