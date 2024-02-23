<?php
session_start();
include ('header.php');
?>

<div class="container "> 
    <h1 class="text-center">Welcome !</h1>

    
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

    <div class="row mx-auto p-2">
    <div class="col-sm-4">
        <div class="card bg-success text-white m-2">
        <div class="card-body">
            <h5 class="card-title">Inventory</h5>
            <p class="card-text">List Daftar Inventory Barang</p>
            <a href="lihat_barang.php" class="btn btn-primary">Klik Disini</a>
        </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card bg-warning text-white m-2">
        <div class="card-body">
            <h5 class="card-title">Pengiriman Barang</h5>
            <p class="card-text">Informasi data pengiriman barang</p>
            <a href="kirim.php" class="btn btn-success">Klik Disini</a>
        </div>
        </div>
    </div>
        <div class="col-sm-4">
        <div class="card bg-info text-white m-2">
        <div class="card-body">
            <h5 class="card-title">Manajemen Stok</h5>
            <p class="card-text">Informasi stok barang yang tersedia </p>
            <a href="lihat_stok.php" class="btn btn-warning">Klik Disini</a>
        </div>
        </div>
    </div>
    </div>
</div>

<?php
include ('footer.php');
?>