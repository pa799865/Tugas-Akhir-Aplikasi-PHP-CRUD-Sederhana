<?php
include("../koneksi.php");
$id = $_GET['id'];

$query = $db->query(query: "SELECT * FROM pelanggan WHERE id =  '$id'");
$pelanggan = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pelanggan</title>
</head>
<body>
    <h1>Edit Data Pelanggan</h1>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $pelanggan['id']; ?>">
        <label for="nama">Nama Pelanggan</label>
        <input type="text" name="nama" id="nama" value="<?= $pelanggan['nama']; ?>" required>
        <br>
        <br>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?= $pelanggan['email']; ?>" required>
        <br>
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="<?= $pelanggan['alamat']; ?>" required>
        <br>
        <br>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan
        </button>
    </form>

</body>
</html>