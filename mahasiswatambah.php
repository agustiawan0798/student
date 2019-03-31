<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1><center>- Tambah Data Mahasiswa -</h1>  
		</div>
    </div>
        
    <form class="form-horizontal" action="mahasiswatambahaction.php" method="post">

    <div class="form-group">
        <center>NIM</center>
        <div class="col-sm-6" align="center">
            <input  type="text" name='nim' class="form-control" required>
        </div>
    </div>
    <div class="form-group">
    <center>Nama</center>
        <div class="col-sm-6" align="center">
            <input type="text" name='nama' class="form-control" required>
        </div>
    </div>
    <div class="form-group">
    <center>Alamat</center>
        <div class="col-sm-6" align="center">
            <input type="text" name='alamat' class="form-control" required>
        </div>
    </div>
    <div class="form-group">
    <center>Kota</center>
        <div class="col-sm-6" align="center">
            <input type="text" name='kota' class="form-control" required>
        </div>
    </div>
    <div class="form-group">
    <center>Nomor Telepon</center>
        <div class="col-sm-6" align="center">
            <input type="text" name='nomor_telp' class="form-control" required>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-sm-10" align="center">
            <button type="submit" class="btn btn-success" value="Tambah Data">Tambah Data</button>
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