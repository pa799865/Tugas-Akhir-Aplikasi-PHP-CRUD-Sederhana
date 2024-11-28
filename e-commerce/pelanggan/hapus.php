<?php
include '../koneksi.php';
session_start();

$id = $_GET["id"];

    
function hapus($id) {
    global $db;
    mysqli_query($db,"DELETE FROM pelanggan WHERE id = $id");
    return mysqli_affected_rows($db);
}


if( hapus($id) > 0) {
    echo "
            <script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'index.php';
            </script>
        ";
}
?>