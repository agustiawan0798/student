<?php 
	//put file which is connected to database
	include "koneksi.php";

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

	//take all parameters through get method
	$nim = test_input($_GET['nim']);
	//delete data from database based on nim
	$query = mysqli_query($connect, "delete from mahasiswa where nim='$nim'") or die(mysqli_error($connect));

	if ($query) {
		
		header('location:mahasiswa.php?message=deletesuccess');
	}
?>