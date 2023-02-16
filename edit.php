<?php 
include './config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> | BIODATA | EDIT</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">

		<?php 
		include './config/koneksi.php';
		$id 	= $_GET['id'];
		$query	= "SELECT * FROM tb_mahasiswa WHERE id = '$id'";
		$result	= mysqli_query($koneksi, $query);
		$data	= mysqli_fetch_assoc($result);
		?>

		<div class="col-10 m-auto" style="padding: 100px 0 0 0;">   
			<div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded" style="background-image: url(img/7777.webp);">
				<form action="editproses.php" method="post">
					<input type="hidden" name="id" value="<?= $data['id']?>">

					<h2 class="text-center fw-bold">UBAH DATA SISWA</h2>

						<div class="mb-3">
							<input type="hidden" name="id" value="<?= $id ?>">
							<label for="exampleFormControlInput1" class="form-label">Name</label>
							<input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="<?= $data['nama']?>">
						</div>

						<div class="mb-3">
							<input type="hidden" name="id" value="<?= $id ?>">
							<label for="exampleFormControlInput1" class="form-label">Jurusan</label>
							<input type="text" name="Jurusan" class="form-control" id="exampleFormControlInput1" value="<?= $data['Jurusan']?>">
						</div>

						<div class="mb-3">
							<p>Jenis Kelamin</p>
							<input type="hidden" name="id" value="<?= $id ?>">
							<input name="gender" type="radio" id="gender1Input" value="Pria" <?= $data['jenis_kelamin'] == 'pria'? 'checked': null ?>>
							<label for="gender1Input" class="form-label">Pria</label>
							
							<input name="gender" type="radio" id="gender2Input" value="Wanita" <?= $data['jenis_kelamin'] == 'Wanita'? 'checked': null ?>>
							<label for="gender2Input" class="form-label">Wanita</label>
						</div>

						<div class="mb-3">
							<input type="hidden" name="id" value="<?= $id ?>">
							<label for="exampleFormControlInput1" class="form-label">Email</label>
							<input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="<?= $data['email']?>">
						</div>

						<div class="mb-3">
							<input type="hidden" name="id" value="<?= $id ?>">
							<label for="exampleFormControlInput1" class="form-label">Alamat</label>
							<textarea name="alamat" class="form-control" id="exampleFormControlInput1"><?= $data['alamat']?></textarea>
						</div>

						<div class="col-3 m-auto">
							<a href="index.php" class="btn btn-secondary px-4 mt-3" style="margin-left:306px;">Cancel</a> 
							<button class="btn btn-md btn-primary px-5 mt-2" style="margin-left: 305px;">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>