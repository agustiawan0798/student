<?php 
include "koneksi.php";

// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//   }

// $nim = $_POST['nim'];
// $nim = test_input($_POST['nim']);
// $nama = test_input($_POST['nama']);
// $alamat = test_input($_POST['alamat']);
// $kota = test_input($_POST['kota']);
// $nomor_telp = test_input($_POST['nomor_telp']);

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$nomor_telp = $_POST['nomor_telp'];

$query = mysqli_query($connect, "INSERT INTO mahasiswa (nim, nama, alamat, kota, nomor_telp) values ('$nim','$nama', '$alamat', '$kota', '$nomor_telp')");
if ($query) {
header('location:mahasiswa.php');
} 

else {
  echo "<script>alert('Data yang Anda masukkan ada yang salah');history.go(-1);</script>";
}
?>