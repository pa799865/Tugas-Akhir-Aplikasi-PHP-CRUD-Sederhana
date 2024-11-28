<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
</head>
<body>
    <h1>Tambah Data Pelanggan</h1>
    <form action="proses-tambah.php" method="POST">
        <label for="nama">Nama Pelanggan</label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required>
        <br>
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" required>
        <br>
        <br>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan
        </button>
    </form>
</body>
</html>