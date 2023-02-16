<?php 

	include './config/koneksi.php';

	$id 		= $_POST['id'];
	$nama 		= $_POST['nama'];
	$Jurusan 	= $_POST['Jurusan'];
	$gender		= $_POST['gender'];
	$email		= $_POST['email'];
	$alamat		= $_POST['alamat'];

	$query = "UPDATE tb_mahasiswa SET
				nama 			= '$nama',
				jurusan 		= '$Jurusan',
				jenis_kelamin	= '$gender',
				email 			= '$email',
				alamat 			= '$alamat'
				WHERE id = $id";

	$result = mysqli_query($koneksi, $query);

	if ($result) {
		header('location: index.php');
	}else {
		echo "data gagal diubah";
	}

 ?>