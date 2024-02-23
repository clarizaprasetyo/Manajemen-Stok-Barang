<?php
include ("../config.php");
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama_barang = $_POST['nama_barang'];
	$merek = $_POST['merek'];
	$kategori = $_POST['kategori'];
	$jumlah = $_POST['jumlah'];
    $satuab = $_POST['satuan'];
        

    $hasil = mysqli_query($conn, "UPDATE barang SET nama_barang='$nama_barang',merek='$merek', kategori='$kategori', jumlah='$jumlah', satuan='$satuan' WHERE id_barang='$id'");
    
    echo "<script>alert('Berhasil Mengubah Data Paket!');
    document.location='tambah.php';</script>";
};
?>

<?php
$id = $_GET['id'];
 
$hasil = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang=$id");
 
while($data = mysqli_fetch_array($hasil))
{
    $id = $data['id_barang'];
    $nama_barang = $data['nama_barang'];
	$merek = $data['merek'];
	$kategori = $data['kategori'];
	$jumlah = $data['jumlah'];
    $satuan = $_POST['satuan'];
};
?>

<?php
include ('header.php');
?>

    <!-- isi konten -->
  <div class="container">
    <h2 class="text-center">Edit Data Barang</h2>
    <div class="card mt-4 col-md-6 offset-md-3">
        <div class="card-body">
            <div class="row">
                <form action="edit.php" method="post" name="update">
                    <div class="form-group col-auto">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" value="<?php echo $nama_barang;?>" placeholder="Nama Barang">
                    </div>
                    <div class="form-group col-auto">
                        <label>Merek</label>
                        <input type="text" class="form-control" name="merek" value="<?php echo $merek;?>" placeholder="Merek">
                    </div>
                    <div class="form-group col-auto">
                        <label>Kategori</label>
                        <input type="text" class="form-control" name="kategori" value="<?php echo $kategori;?>" placeholder="Kategori">
                    </div>
                    <div class="form-group col-auto">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" value="<?php echo $jumlah;?>" placeholder="Jumlah">
                    </div>
                    <div class="form-group col-auto">
                        <label>Satuan</label>
                        <input type="text" class="form-control" name="satuan" value="<?php echo $satuan;?>" placeholder="contoh: pcs, dus, unit, dll">
                    </div>

                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">

                    <button type="submit" class="btn btn-primary mt-2 form-group" name="update">Submit</button>
                </form>
            </div>
        </div>
    </div>
  </div>

  <?php
include ('footer.php');
?>