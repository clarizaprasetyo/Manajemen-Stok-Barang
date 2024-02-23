<?php
include 'config.php';

//proses login user
session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND password= '$password'");

    //jika emailnya ada di database maka create session dan redirect
    if (mysqli_num_rows($login) > 0) {
        $row = mysqli_fetch_assoc($login);

        if ($row['role'] == "Admin") {
            $_SESSION['email'] = $email;
            $_SESSION['role'] = "Admin";
            header("location:admin/admin.php");

        }elseif ($row['role'] == "StaffGudang") {
            $_SESSION['email'] = $email;
            $_SESSION['role'] = "StaffGudang";
            header('location:staff/staff.php');
        }else{
            header("location:index.php?pesan=gagal");
        }
    }else {
        header("location:index.php?pesan=gagal");
    }

?>