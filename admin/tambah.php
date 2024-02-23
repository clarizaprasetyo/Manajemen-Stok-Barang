<?php
session_start();
include ('config.php');
include ('header.php');
?>

    <!-- isi konten -->
  <div class="container">
    <div class="card">
            <div class="card-header ">
            <h2 class="text-center">Tambah Data Barang</h2>
            </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <form action="tambah.php"  method="post">
                <div class="d-flex ">
                    <div class="form-group p-1">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                    </div>
                    <div class="form-group p-1">
                        <label>Merek</label>
                        <input type="text" class="form-control" name="merek" placeholder="Merek">
                    </div>
                    <div class="form-group p-1">
                        <label>Kategori</label>
                        <input type="text" class="form-control" name="kategori" placeholder="Kategori">
                    </div>
                    <div class="form-group p-1">
                        <label>Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" placeholder="Jumlah">
                    </div>
                    <div class="form-group p-1">
                        <label>Satuan</label>
                        <input type="text" class="form-control" name="satuan" placeholder="Satuan">
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary w-100" name="Submit">Submit</button>
                </form>
            </div>
        </div>
    </div><br>

    <?php

	if (isset($_POST['Submit'])) {

		$nama_barang = $_POST['nama_barang'];
		$merek = $_POST['merek'];
		$kategori = $_POST['kategori'];
		$jml = $_POST['jumlah'];
        $satuan = $_POST['satuan'];
		
		include ("../config.php");

		$hasil = mysqli_query($conn, "INSERT INTO barang(nama_barang,merek,kategori,jumlah,satuan) VALUES ('$nama_barang','$merek','$kategori','$jml','$satuan')");

        echo "<script>alert('Berhasil Menambahkan Data!');</script>";
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
                    <th>Merek</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                <?php                  	
                $no = 1;
                $hasil = mysqli_query($conn, "SELECT * FROM barang");
                while($data = mysqli_fetch_array($hasil)) { 
                    echo "<td>".$no++."</td>";
                    echo "<td>".$data['nama_barang']."</td>";
                    echo "<td>".$data['merek']."</td>";
                    echo "<td>".$data['kategori']."</td>";
                    echo "<td>".$data['jumlah']."</td>";
                    echo "<td>".$data['satuan']."</td>";
                    echo "<td>
                        <a href='edit.php?id=$data[id_barang]'>Edit</a> | 
                        <a href='hapus.php?id=$data[id_barang]'>hapus</a>
                    </td>
                </tr>";
                };
                ?>
            </table>
        </form>
        </div>
    </div>
  </div>


<?php
include ('footer.php');
?>