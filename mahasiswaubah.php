<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ubah Data Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>

    <?php
    include "koneksi.php";
    $nim = $_GET['nim'];
    $query = "SELECT * FROM mahasiswa where nim = '$nim'";
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
    $row = mysqli_fetch_array($result);
    ?>

</head>
<body>
<div class="container">
        <h2 class="title"><center>Ubah Data Mahasiswa</h2></br>
        <form class="form-horizontal" action="mahasiswaubahaction.php" method="post" role="form">

    <div class="form-group">
        <label class="col-sm-3 control-label">NIM</label>
            <div class="col-sm-6">
                 <input type="text" class="form-control" name='nim' value="<?php echo $row['nim']; ?>" required ></textarea>
            </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-6">
                 <input type="text" class="form-control" name='nama' value="<?php echo $row['nama']; ?>" required ></textarea>
            </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Alamat</label>
            <div class="col-sm-6">
                 <input type="text" class="form-control" name='alamat' value="<?php echo $row['alamat']; ?>" required ></textarea>
            </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Kota</label>
            <div class="col-sm-6">
                 <input type="text" class="form-control" name='kota' value="<?php echo $row['kota']; ?>" required ></textarea>
            </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nomor Telepon</label>
            <div class="col-sm-6">
                 <input type="text" class="form-control" name='nomor_telp' value="<?php echo $row['nomor_telp']; ?>" required ></textarea>
            </div>
    </div>

    <a href="mahasiswa.php>"onClick="return confirm('Apakah Anda yakin ingin mengubah data ini?')"><button type='submit' name='submit' class='btn btn-primary btn-sm'>Simpan</button></a>

</body>
</html>