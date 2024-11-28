<?php
include("../koneksi.php");
$id = $_GET['id'];

$query = $db->query("SELECT * FROM produk WHERE produk_id =  '$id'");
$prdk = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Produk</title>
</head>
<body>
    <h1>Edit Data Produk</h1>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="produk_id" value="<?= $prdk['produk_id']; ?>">
        <label for="namaProduk">Nama Produk</label>
        <input type="text" name="namaProduk" id="namaProduk" value="<?= $prdk['namaProduk']; ?>" required>
        <br>
        <br>
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" value="<?= $prdk['harga']; ?>" required>
        <br>
        <br>
        <label for="stok">Stok</label>
        <input type="text" name="stok" id="stok" value="<?= $prdk['stok']; ?>" required>
        <br>
        <br>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan
        </button>
    </form>

</body>
</html>