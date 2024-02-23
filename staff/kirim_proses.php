<?php
 
include ('config.php');
$query = mysqli_query($conn, "SELECT max(no_pesan) as kodeTerbaru FROM kirim");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbaru'];

$nomor = (int) substr($kodeBarang, 3, 3);
 
$nomor++;

$huruf = "INV-";
$kodeBarang = $huruf . sprintf("%03s", $nomor);
 
?>


<?php

	if (isset($_POST['Submit'])) {

		$no_pesan = $_POST['no_pesan'];
		$tgl_kirim = $_POST['tgl_kirim'];
		$nama_barang = $_POST['nama_barang'];
        $status = $_POST['status'];
		
		include ("../config.php");

		$hasil = mysqli_query($conn, "INSERT INTO kirim(no_pesan,tgl_kirim,nama_barang,status) VALUES ('$no_pesan','$tgl_kirim','$nama_barang','$status')");

        echo "<script>alert('Berhasil Menambahkan Data!');</script>";
    };
?>
