<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Data Produk</h1>
    <form action="proses-tambah.php" method="POST">
        <label for="namaProduk">Nama Produk</label>
        <input type="text" name="namaProduk" id="namaProduk" required>
        <br>
        <br>
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" required>
        <br>
        <br>
        <label for="stok">Stok</label>
        <input type="text" name="stok" id="stok" required>
        <br>
        <br>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan
        </button>
    </form>
</body>
</html>