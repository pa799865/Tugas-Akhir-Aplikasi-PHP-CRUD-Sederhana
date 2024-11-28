<?php
include ("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
</head>
<body>
    <ul>
        <li><a href="#">Data Pelanggan</a></li>
        <li><a href="../produk/index.php">Data Produk</a></li>
    </ul>

    <h1>Data Pelanggan</h1>

  

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Nama Pelanggan</th>
                <th>Email</th>
                <th>Alamat</th>
                <th><a href="tambah.php">Tambah Data Pelanggan</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = $db->query("SELECT * FROM pelanggan");
            while ($pelanggan = $query->fetch_assoc()) {?>
            <tr>
            <td><?= $no++ ?></td>
            <td><?= $pelanggan['nama'] ?></td>
            <td><?= $pelanggan['email'] ?></td>
            <td><?= $pelanggan['alamat'] ?></td>
            <td align="center">
                <a href="edit.php?id=<?= $pelanggan ['id'] ?>">Edit</a> |
                
                <a onclick="return confirm('Anda yakin ingin menghapus data?')" 
                href="hapus.php?id=<?= $pelanggan['id'] ?>">Hapus</a>
            </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <p>Total: <?= mysqli_num_rows($query) ?></p>
</body>
</html>