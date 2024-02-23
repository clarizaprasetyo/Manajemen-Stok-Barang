<?php
session_start();
include('config.php');
include('header.php');
?>

<div class="container">
    <h2>Data KELUAR MASUK BARANG DAN STOK AKHIR</h2>

            <div class="card ">
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
                    echo "
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
