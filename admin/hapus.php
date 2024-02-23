<?php
include('../config.php');

$id = $_GET['id'];
 
$hasil = mysqli_query($conn, "DELETE FROM barang WHERE id_barang=$id");

echo "<script>alert('Berhasil Dihapus!');
			document.location='admin.php';</script>";
?>


<?php

$id = $_GET['id'];
 
$hasil = mysqli_query($conn, "DELETE FROM stok WHERE id_stok=$id");

echo "<script>alert('Berhasil Dihapus!');
			document.location='admin.php';</script>";
?>

<?php

 

$id = $_GET['id'];
 
$hasil = conn_query($conn, "DELETE FROM opnam WHERE id_opnam=$id");

echo "<script>alert('Berhasil Dihapus!');
			document.location='admin.php';</script>";
?>
