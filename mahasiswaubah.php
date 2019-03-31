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
        <div class="row">
            <div class="col-md-12">
            <h1><center>- Ubah Data Mahasiswa -</h1>  
		</div>
    </div>


        <form class="form-horizontal" action="mahasiswaubahaction.php" method="post" role="form">

    <div class="form-group">
    <center>NIM</center>
            <div class="col-sm-6" align="center">
                 <input type="text" class="form-control" name='nim' value="<?php echo $row['nim']; ?>" readonly ></textarea>
            </div>
    </div>
    <div class="form-group">
    <center>Nama</center>
            <div class="col-sm-6" align="center">
                 <input type="text" class="form-control" name='nama' value="<?php echo $row['nama']; ?>" required ></textarea>
            </div>
    </div>
    <div class="form-group">
    <center>Alamat</center>
            <div class="col-sm-6" align="center">
                 <input type="text" class="form-control" name='alamat' value="<?php echo $row['alamat']; ?>" required ></textarea>
            </div>
    </div>
    <div class="form-group">
    <center>Kota</center>
            <div class="col-sm-6" align="center">
                 <input type="text" class="form-control" name='kota' value="<?php echo $row['kota']; ?>" required ></textarea>
            </div>
    </div>
    <div class="form-group">
    <center>Nomor Telepon</center>
            <div class="col-sm-6" align="center">
                 <input type="text" class="form-control" name='nomor_telp' value="<?php echo $row['nomor_telp']; ?>" required ></textarea>
            </div>
    </div>

    <br>

    <div class="row">
        <div class="col-sm-10" align="center">
            <a href="mahasiswa.php>"onClick="return confirm('Apakah Anda yakin ingin mengubah data ini?')"><button type='submit' name='submit' class='btn btn-primary btn-sm'>Simpan</button></a>
            </div>
    </div>

    <br>

    <div class="row">
        <div class="col-sm-10" align="center">
        <input type="button" value="Kembali" onclick="history.back()">
        </div>
    </div>
</body>
</html>