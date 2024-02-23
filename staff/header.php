<?php
session_start();
include ('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Staff Gudang Dashboard</title>    
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="d-flex flex-column mb-3">
    <div class="p-2">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="staff.php">Staff Gudang Dashboard</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="staff.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lihat_barang.php">Data Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kirim.php">Pengiriman Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lihat_stok.php">Manajemen Stok</a>
                </li>
            </ul>
        </div>
            <a href="../logout.php"  class="btn btn-link text-right">Logout</a>
    </nav>
</div>
<div class="p-2">