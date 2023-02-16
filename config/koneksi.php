<?php 
	
	$server 	= 'localhost';
	$user 		= 'root';
	$password	= '';
	$db_name	= 'db_mahasiswa2';
	$koneksi = mysqli_connect($server, $user, $password, $db_name);

	if ($koneksi) {
		//echo "Berhasil";
	} else {
		echo "Gagal";
	}