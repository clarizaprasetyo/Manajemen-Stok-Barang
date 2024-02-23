<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Manajemen Sistem Gudang</title>
</head>
<body>
     <?php 
 if(isset($_GET['pesan'])){
 if($_GET['pesan']=="gagal"){
 echo "<script>alert('Username dan Password tidak sesuai !');</script>";
 }
 }
 ?>
    <div class="container mt-5">
        <h1 class="text-center mt-4">Manajemen Stok Barang</h1>
        <div class="card mt-4 shadow bg-light">
            <div class="card-body">
                <form class="form-group" action="login.php" method="post">
                    <div class="mb-4">
                        <div class="form-outline">
                            <label class="form-label" >Email </label>
                            <input type="email" name="email" class="form-control" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="form-outline">
                            <label class="form-label" >Password</label>
                            <input type="password" name="password" class="form-control" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="form-outline">
                            <label class="form-label">Status Karyawan</label>
                            <select class="form-select" name="role">
                                <option value="">- Pilih Salah Satu -</option>
                                <option value="Admin">Admin</option>
                                <option value="StaffGudang">Staff Gudang</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block mb-4" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>