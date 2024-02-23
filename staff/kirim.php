<?php
session_start();
include ('header.php');
include ('kirim_proses.php')
?>



    <!-- isi konten -->
  <div class="container">
    <div class="card">
            <div class="card-header ">
            <h2 class="text-center">Tambah Pengiriman</h2>
            </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <form action="kirim_proses.php"  method="post" name="Submit">
                <div class="d-flex ">
                    <div class="form-group p-1">
                        <label>No Pesanan</label>
                        <label class="form-control" name="no_pesan"><?php echo $kodeBarang;?></label>
                    </div>
                    <div class="form-group p-1">
                        <label>Tanggal Kirim</label>
                        <input type="datetime-local" class="form-control" name="tgl_kirim">
                    </div>
                    <div class="form-group p-1">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang">
                    </div>
                    <div class="form-group p-1">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="">- Pilih Status -</option>
                            <option value="Terkirim">Terkirim</option>
                            <option value="Pending">Pending</option>
                            <option value="Batal">Batal</option>
                        </select>
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary w-100" name="Submit">Tambahkan</button>
                </form>
            </div>
        </div>
    </div><br>

        <div class="card ">
        <div class="card-body">
            <form action="" method="post">
            <table class="table table-bordered ">
                <tr class="card-header bg-dark text-white">
                    <th>No Pesanan</th>
                    <th>Tanggal Kirim</th>
                    <th>Nama Barang</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                <?php                  	
                $no = 1;
                $hasil = mysqli_query($conn, "SELECT * FROM kirim");
                while($data = mysqli_fetch_array($hasil)) { 
                    echo "<td>".$data['no_pesan']."</td>";
                    echo "<td>".$data['tgl_kirim']."</td>";
                    echo "<td>".$data['nama_barang']."</td>";
                    echo "<td>".$data['status']."</td>";
                    echo "<td>
                        <a href='edit.php?id=$data[no_pesan]'>Edit</a>
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