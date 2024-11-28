<?php
include ("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <ul>
        <li><a href="../pelanggan/index.php">Data Pelanggan</a></li>
        <li><a href="#">Data Produk</a></li>
    </ul>

    <h1>Data Produk</h1>

    <p>Data berhasil ditambahkan!</p>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th><a href="tambah_produk.php">Tambah Data</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = $db->query("SELECT * FROM produk");
            while ($prdk = $query->fetch_assoc()) {?>
            <tr>
            <td><?= $no++ ?></td>
            <td><?= $prdk['namaProduk'] ?></td>
            <td><?= $prdk['harga'] ?></td>
            <td><?= $prdk['stok'] ?></td>
            <td align="center">
                <a href="edit.php?id=<?= $prdk ['produk_id'] ?>">Edit</a> |
                
                <a onclick="return confirm('Anda yakin ingin menghapus data?')" 
                href="hapus.php?id=<?= $prdk['produk_id'] ?>">Hapus</a>
            </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <p>Total: <?= mysqli_num_rows($query) ?></p>
</body>
</html>