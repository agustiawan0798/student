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
        <h2 class="title"><center>Tambah Data Mahasiswa</h2></br>
        <form class="form-horizontal" action="mahasiswatambahaction.php" method="post">

    <div class="form-group">
        <label class="col-sm-3 control-label">NIM</label>
        <div class="col-sm-6">
            <input type="text" name='nim' class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama</label>
        <div class="col-sm-6">
            <input type="text" name='nama' class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Alamat</label>
        <div class="col-sm-6">
            <input type="text" name='alamat' class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Kota</label>
        <div class="col-sm-6">
            <input type="text" name='kota' class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nomor Telepon</label>
        <div class="col-sm-6">
            <input type="text" name='nomor_telp' class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-10">
            <button type="submit" class="btn btn-success" value="Tambah Data">Tambah Data</button>
        </div>
    </div>
</body>
</html>