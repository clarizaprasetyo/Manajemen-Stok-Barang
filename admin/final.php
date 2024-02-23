<?php
session_start();
include('config.php');
include('header.php');
?>

<div class="container">
    <div class="card">
            <div class="card-header ">
            <h2 class="text-center">Tambah Stok Keluar/Masuk</h2>
            </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row justify-content-center">
                    <form action="manajemen.php"  method="post">
                    <div class="d-flex ">
                        <div class="form-group p-1">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                        </div>
                        <div class="form-group p-1">
                            <label>Tanggal</label>
                            <input type="datetime-local" class="form-control" name="tgl" placeholder="Tanggal">
                        </div>
                        <div class="form-group p-1">
                            <label>Stok Masuk</label>
                            <input type="number" min="0" class="form-control" id="stok_masuk" onkeyup="myFunc()" name="stok_masuk" placeholder="Stok Masuk">
                        </div>
                        <div class="form-group p-1">
                            <label>Stok Keluar</label>
                            <input type="number" min="0" class="form-control" id="stok_keluar" onkeyup="myFunc()" name="stok_keluar" placeholder="Stok Keluar">
                        </div>
                        <div class="form-group p-1">
                            <label>Stok Akhir</label>
                            <label class="form-control" id="stok_akhir" name="stok_akhir" ></label>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary w-100" name="Submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div><br>

        <?php

	if (isset($_POST['Submit'])) {

		$nama_barang = $_POST['nama_barang'];
		$tgl = $_POST['tgl'];
		$stok_masuk = $_POST['stok_masuk'];
		$stok_keluar = $_POST['stok_keluar'];
		$stok_akhir = $_POST['stok_akhir'];
		
		include ("../config.php");

		$hasil = mysqli_query($conn, "INSERT INTO stok(nama_barang,tgl,stok_masuk,stok_keluar,stok_akhir) VALUES ('$nama_barang','$tgl','$stok_masuk','$stok_keluar','$stok_akhir')");

		echo "<script>alert('Berhasil Menambahkan!');</script>";
	};
	?>


            <div class="card ">
            <div class="card-header ">
                <a href="exportpdf.php" class="btn btn-warning">Ekspor Tabel ke PDF</a>
            </div>
        <div class="card-body">
            <form action="" method="post">
            <table class="table table-bordered ">
                <tr class="card-header bg-dark text-white">
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Tanggal</th>
                    <th>Stok Masuk</th>
                    <th>Stok Keluar</th>
                    <th>Stok Akhir</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                <?php                  	
                $no = 1;
                $hasil = mysqli_query($conn, "SELECT * FROM stok");
                while($data = mysqli_fetch_array($hasil)) { 
                    echo "<td>".$no++."</td>";
                    echo "<td>".$data['nama_barang']."</td>";
                    echo "<td>".$data['tgl']."</td>";
                    echo "<td>".$data['stok_masuk']."</td>";
                    echo "<td>".$data['stok_keluar']."</td>";
                    echo "<td>".$data['stok_akhir']."</td>";
                    echo "<td>
                        <a href='edit.php?id=$data[id_stok]'>Edit</a> | 
                        <a href='hapus.php?id=$data[id_stok]'>hapus</a>
                    </td>
                </tr>";
                };
                ?>
            </table>
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
include('footer.php');
?>