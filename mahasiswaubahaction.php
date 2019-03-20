<?php 
// include "koneksi.php";

// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//   }

// // $nim = $_POST['nim'];
// // $id = $_POST['id'];
// $nim = test_input($_POST['nim']);
// // $nim_awal = test_input($_POST['nim_awal']);
// $nama = test_input($_POST['nama']);
// $alamat = test_input($_POST['alamat']);
// $kota = test_input($_POST['kota']);
// $nomor_telp = test_input($_POST['nomor_telp']);

// $query = mysqli_query($connect, "UPDATE mahasiswa SET (nim, nama, alamat, kota, nomor_telp) values ('$nim','$nama', '$alamat', '$kota', '$nomor_telp') WHERE nim='$nim'");
// if ($query) {
// header('location:mahasiswa.php');
// } 
// else {
// 	echo "<script>alert('ERROR');history.go(-1);</script>";
// }
 
    include 'koneksi.php';
    $nim     = $_POST['nim'];
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
	$kota = $_POST['kota'];
	$nomor_telp = $_POST['nomor_telp'];
 
    //perintah sql untuk menyimpan ke database
    $sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat', kota ='$kota', nomor_telp='$nomor_telp' WHERE nim='$nim'";
     
    $que = mysqli_query($connect, $sql); 
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah diubah');
                window.location='mahasiswa.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal diubah');
                window.location='mahasiswaubah.php?nim=$nim';
            </script>
        ";
    }
    //penyimpanan
?>