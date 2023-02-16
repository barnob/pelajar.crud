<?php 
include './config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> | BIODATA | NEW</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">

		<?php 
		include './config/koneksi.php';
		?>

		<div class="col-10 m-auto" style="padding: 100px 0 0 0;"> 
			<div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded" style="background-image: url(img/7777.webp);">
				<form action="createproses.php" method="post">

					<h2 class="text-center fw-bold">TAMBAH DATA SISWA</h2>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Name</label>
						<input type="text" name="nama" class="form-control" id="exampleFormControlInput1">
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Jurusan</label>
						<input type="text" name="Jurusan" class="form-control" id="exampleFormControlInput1">
					</div>

					<div class="mb-3">
						<p>Jenis Kelamin</p>
						<input name="gender" type="radio" id="gender1Input" value="Pria">
						<label for="gender1Input" class="form-label">Pria</label>
						<input name="gender" type="radio" id="gender2Input" value="Wanita">
						<label for="gender1Input" class="form-label">Wanita</label>
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Email</label>
						<input type="email" name="email" class="form-control" id="exampleFormControlInput1">
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Alamat</label>
						<textarea name="alamat" class="form-control" id="exampleFormControlInput1"></textarea>
					</div>

					<div class="col-3 m-auto">
						<a href="index.php" class="btn btn-secondary px-4 mt-3" style="margin-left:306px;">Cancel</a> 
						<button class="btn btn-md btn-primary px-4 mt-2" style="margin-left: 305px;">Submit</button> 
					</div> 
				</form> 
			</div> 
		</div> 
	</div> 
</body> 
</html> 