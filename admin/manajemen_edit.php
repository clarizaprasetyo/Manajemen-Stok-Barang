<?php
include ("../config.php");
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
        $nama_barang = $_POST['nama_barang'];
		$tgl = $_POST['tgl'];
		$stok_masuk = $_POST['stok_masuk'];
		$stok_keluar = $_POST['stok_keluar'];
		$stok_akhir = $_POST['stok_akhir'];
        

    $hasil = mysqli_query($conn, "UPDATE stok SET nama_barang='$nama_barang', tgl='$tgl', stok_masuk='$stok_masuk', stok_keluar='$stok_keluar', stok_akhir='$stok_akhir' WHERE id_barang='$id'");
    
    echo "<script>alert('Berhasil Mengubah Data Paket!');
    document.location='manajemen.php';</script>";
};
?>

<?php
$id = $_GET['id'];
 
$hasil = mysqli_query($conn, "SELECT * FROM stok WHERE id_stok=$id");
 
while($data = mysqli_fetch_array($hasil))
{
        $$nama_barang = $data['nama_barang'];
		$tgl = $data['tgl'];
		$stok_masuk = $data['stok_masuk'];
		$stok_keluar = $data['stok_keluar'];
		$stok_akhir = $data['stok_akhir'];
};
?>

<?php
include ('header.php');
?>

    <!-- isi konten -->
  <div class="container">
    <h2 class="text-center">Edit Data KELUAR MASUK BARANG DAN STOK AKHIR </h2>
    <div class="card mt-4 col-md-6 offset-md-3">
        <div class="card-body">
            <div class="row">
                <form action="manajemen.php" method="post" name="update">
                    <div class="form-group col-auto">
                        <div class="form-group p-1">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="<?php echo $nama_barang;?>" placeholder="Nama Barang" >
                        </div>
                        <div class="form-group p-1">
                            <label>Tanggal</label>
                            <input type="datetime-local" class="form-control" name="tgl" value="<?php echo $tgl;?>" placeholder="Tanggal">
                        </div>
                        <div class="form-group p-1">
                            <label>Stok Masuk</label>
                            <input type="number" min="0" class="form-control" id="stok_masuk" onkeyup="myFunc()" name="stok_masuk" value="<?php echo $stok_masuk;?>" placeholder="Stok Masuk">
                        </div>
                        <div class="form-group p-1">
                            <label>Stok Keluar</label>
                            <input type="number" min="0" class="form-control" id="stok_keluar" onkeyup="myFunc()" name="stok_keluar" value="<?php echo $stok_keluar;?>" placeholder="Stok Keluar">
                        </div>
                        <div class="form-group p-1">
                            <label>Stok Akhir</label>
                            <label class="form-control" id="stok_akhir" name="stok_akhir"> <?php echo $stok_akhir;?></label>
                        </div>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">

                    <button type="submit" class="btn btn-primary mt-2 form-group" name="update">Submit</button>
                </form>
            </div>
        </div>
    </div>
  </div>


<!-- script menampilkan & menambahkan input secara realtime -->
<script>
function myFunc() {
  var x = document.getElementById("stok_masuk").value;
  var y = document.getElementById("stok_keluar").value;
  document.getElementById("stok_akhir").innerHTML = x - y;
}
</script>
  <?php
include ('footer.php');
?>