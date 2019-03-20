<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
			<h2><center>Data Mahasiswa</h2>  
		</div>
    </div>

    <div class="row">
        <div class="col-md-12">
        <a href = 'mahasiswatambah.php?'class='btn btn-success'><button type ='submit' name='submit' class = 'btn btn-primary btn-sm'></span> Tambah Data Mahasiswa</button?></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
		<a href="mahasiswahapusall.php"onClick="return confirm('Apakah Anda yakin ingin menghapus semua data?')"><button type='submit' name='submit' class='btn btn-primary btn-sm'>Hapus Semua Data Mahasiswa</button></a>
        </div>
    </div>


    <table border="1" class="table">
				<thead>                                   
					<tr><br>
						<th><center>No</th>
                        <th><center>NIM</th>
						<th><center>Nama</th>
						<th><center>Alamat</th>
						<th><center>Kota</th>
						<th><center>Nomor Telepon</th>
						<th><center>Opsi</th>
					</tr>
                    <?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($connect, "SELECT * FROM mahasiswa")or die(mysql_error($connect));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>

		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nim']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['kota']; ?></td>
			<td><?php echo $data['nomor_telp']; ?></td>
			<td>
				<a href="mahasiswaubah.php?nim=<?php echo $data['nim']; ?>">Edit</a> |
				<a href="mahasiswahapus.php?nim=<?php echo $data['nim']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
				</thead>

</body>
</html>