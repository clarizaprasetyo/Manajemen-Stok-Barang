<?php
session_start();
include ('config.php');
include ('header.php');
?>
<!-- staff hanya bisa melihat barang -->
<h1 class="text-center">DATA INVENTARIS BARANG</h1>
        <div class="card ">
        <div class="card-body">
            <form action="" method="post">
            <table class="table table-bordered ">
                <tr class="card-header bg-dark text-white">
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Merek</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
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
                echo "</tr>";
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