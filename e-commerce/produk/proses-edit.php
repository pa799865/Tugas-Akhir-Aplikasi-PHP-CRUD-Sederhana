<?php
session_start();
include("../koneksi.php");

if (isset($_POST["simpan"])) {
    $namaProduk = $_POST['namaProduk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id = $_POST['produk_id'];

$sql = "UPDATE produk SET

        namaProduk = '$namaProduk',
        harga = '$harga',
        stok = '$stok'
        WHERE produk_id = $id";

        $query=mysqli_query($db,$sql);

        if($query){
            $_SESSION['notifikasi'] = "Data produk berhasil di edit!";
        } else {
            $_SESSION['notifikasi'] = "Data produk gagal di edit!";
         
        } header("Location: index.php");
        } else {
            die("Akses ditolak...");
        }
    
?>