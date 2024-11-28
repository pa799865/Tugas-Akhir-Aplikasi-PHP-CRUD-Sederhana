<?php
session_start();
include("../koneksi.php");

if (isset($_POST["simpan"])) {
    $nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$id = $_POST['id'];

$sql = "UPDATE pelanggan SET

        nama = '$nama',
        email = '$email',
        alamat = '$alamat'
        WHERE id = $id";

        $query=mysqli_query($db,$sql);

        if($query) {
            echo "
                    <script>
                    alert('Data Berhasil Diedit!');
                    document.location.href = 'index.php';
                    </script>
                ";
        } else {
            echo "
                    <script>
                    alert('Data Gagal Diedit!');
                    document.location.href = 'index.php';
                    </script>
                ";
        }

        // if($query){
        //     $_SESSION['notifikasi'] = "Data pelanggan berhasil di edit!";
        // } else {
        //     $_SESSION['notifikasi'] = "Data pelanggan gagal di edit!";
         
        // } header("Location: index.php");
        } else {
            die("Akses ditolak...");
        }
    
?>