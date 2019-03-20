<?php
include "koneksi.php";

$query = "DELETE FROM mahasiswa";
$sql = mysqli_query ($connect, $query);

if ($sql) //jika berhasil
{
    echo
    "
        <script type='text/javascript'>
            alert('Data telah dihapus semua');
            window.location='mahasiswa.php';
        </script>
    ";
}
else //jika gagal
{
    echo
    "
        <script type='text/javascript'>
            alert('Gagal dihapus');
            window.location='mahasiswa.php';
        </script>
    ";
}
?>