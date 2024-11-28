<?php
session_start();

include("../koneksi.php");

if(isset($_POST["simpan"])) {
$namaProduk = $_POST['namaProduk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "INSERT INTO produk
        VALUES 
        ('', '$namaProduk', '$harga', '$stok')";

    $query = mysqli_query($db, $sql);

if ($query) {
    $_SESSION['notifikasi'] = "Data produk berhasil ditambahkan!";
} else {
    $_SESSION['notifikasi'] = "Data produk gagal ditambahkan!";
}
header("Location: index.php");
} else {
    die("Akses ditolak...");
}
?>