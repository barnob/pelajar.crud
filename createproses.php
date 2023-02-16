<?php

	include './config/koneksi.php';

	$nama		= $_POST['nama'];
	$Jurusan	= $_POST['Jurusan'];
	$gender		= $_POST['gender'];
	$email		= $_POST['email'];
	$alamat		= $_POST['alamat'];

	$query = "INSERT INTO tb_mahasiswa (nama,Jurusan,jenis_kelamin,email,alamat) VALUES ('$nama','$Jurusan','$gender','$email','$alamat')";

	$result = mysqli_query($koneksi, $query);

	if ($result) {
		header('location: index.php');
	} else{
		echo "Data Gagal Ditambahkan";
	}
?>