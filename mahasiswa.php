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
			<h1><center>- Data Mahasiswa -</h1>  
		</div>
    </div>

	<div class="row">
        <div class="col-md-12">
			<h3><center>Dibuat oleh : Agustiawan</h3>
			<h3><center>21120116120008</h3>  
		</div>
    </div>

    <div class="row">
        <div class="col-md-12" align="center">
        <a href = 'mahasiswatambah.php?'class='btn btn-success'><button type ='submit' name='submit' class = 'btn btn-primary btn-sm'></span> Tambah Data Mahasiswa</button></a>
        </div>
    </div>
	<br>
    <div class="row">
        <div class="col-md-12" align="center">
		<a href="mahasiswahapusall.php"onClick="return confirm('Apakah Anda yakin ingin menghapus semua data?')"><button type='submit' name='submit' class='btn btn-primary btn-sm'>Hapus Semua Data Mahasiswa</button></a>
        </div>
    </div>

<br>

	<div class="row">
    <form action="" method="post">
      <div class="input-group" align="center">
        <input type="text" placeholder="Pencarian Data Mahasiswa..." name="kata" class="form-control">
          <input type="submit" name="cari" class="btn btn-success" value="CARI">
      </div>
    </form>
</div><br>

    <table border="1" class="table" table align="center">
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

		if(isset($_POST['cari'])){
			$k = $_POST['kata'];
			if($k !==""){
				echo "<center>Hasil Pencarian untuk: ", $k;
			}
			$s = "SELECT * FROM mahasiswa WHERE nim LIKE '%". $k ."%' OR nama LIKE '%". $k ."%' OR alamat LIKE '%". $k ."%' OR kota LIKE '%".$k."%' OR nomor_telp LIKE '%". $k ."%' ";
		   }
		   else {
			$s = $s = "SELECT * FROM mahasiswa";
		   } 

		$query_mysql = mysqli_query($connect, $s)or die(mysql_error($connect));
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
				<a href="mahasiswahapus.php?nim=<?php echo $data['nim']; ?>"onClick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
					
			</td>
		</tr>
		<?php } ?>
				</thead>

</body>
</html>