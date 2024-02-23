<?php
session_start();
include ('config.php');
include ('header.php');
?>

<div class="container">
    <h1 class="text-center">Welcome!</h1>

    <!-- Notif stok minim  -->
<?php
//$ambilstok = mysqli_query($conn, "SELECT * FROM stok WHERE  stok < 1");

//while ($ambildata=mysqli_fetch_array($ambilstok)) { 
//    $minim = $ambildata['nama_barang'];
    
//  echo "<div class='alert alert-warning'>
//    <strong>Harap Cek !</strong> Stok Barang ".$minim. "Menipis <a href='lihat_stok.php' class='alert-link'>Segera Tambahkan Stok</a>.
//  </div>";

//};
?>

    <div class="row p-2">
    <div class="col-md-6">
        <div class="card bg-success text-white m-2">
        <div class="card-body">
            <h5 class="card-title">Data Barang</h5>
            <p class="card-text">List Daftar Barang dengan fitur yang bisa di Tambah, Edit, dan Hapus</p>
            <a href="tambah.php" class="btn btn-primary">Klik Disini</a>
        </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card bg-warning text-white m-2">
        <div class="card-body">
            <h5 class="card-title">Manajemen Barang</h5>
            <p class="card-text">Informasi siklus barang masuk, barang keluar, serta stok yang tersedia</p>
            <a href="manajemen.php" class="btn btn-success">Klik Disini</a>
        </div>
        </div>
    </div>
        <div class="col-md-6">
        <div class="card bg-info text-white m-2">
        <div class="card-body">
            <h5 class="card-title">Manajemen Stok</h5>
            <p class="card-text">Informasi pengelolaan stok barang yang tersedia </p>
            <a href="stok.php" class="btn btn-warning">Klik Disini</a>
        </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card bg-danger text-white m-2">
        <div class="card-body">
            <h5 class="card-title">Laporan Mutasi</h5>
            <p class="card-text">Informasi pengeksporan dari keseluruhan data stok</p>
            <a href="#" class="btn btn-dark">Klik Disini</a>
        </div>
        </div>
    </div>
    </div>
</div>

<?php
include ('footer.php');
?>