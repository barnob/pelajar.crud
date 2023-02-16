<?php 
include './config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> | BIODATA | </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<h1><span class="navbar-brand mb-1 h1 px-5">BIODATA PELAJAR</span></h1>
	</nav>

</table>
</div>
<div class="container">
	<div class="col-10 m-auto">
		<p class="h1 text-center p-5"></p>
		<a href="create.php" class="btn btn-primary" style="margin-top: -5%;">Tambah Data</a>
		<table class="table table-hover table-striped table-bordered border-dark mt-1">

			<!-- Nama Table -->
			<thead class="table-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Jurusan</th>
					<th scope="col">Kelamin</th>
					<th scope="col">Email</th>
					<th scope="col">Alamat</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<?php 
			$query = "SELECT * FROM tb_mahasiswa";
			$result = mysqli_query($koneksi, $query);

			$no = 1;
			while ($data = mysqli_fetch_assoc($result)) {
				?>
				<tbody>
					<tr>
						<td scope="row"><?= $no++?></td>
						<td scope="row"><?= $data[ 'nama']?></td>
						<td scope="row"><?= $data[ 'Jurusan']?></td>
						<td scope="row"><?= $data[ 'jenis_kelamin']?></td>
						<td scope="row"><?= $data[ 'email']?></td>
						<td scope="row"><?= $data[ 'alamat']?></td>
						<td scope="row">
							<a href="edit.php?id=<?= $data['id']?>" class="btn btn-warning ms-5">Edit</a>
							<form class="d-inline" action="delete.php" method="post">
								<input type="hidden" name="id" value="<?= $data['id'] ?>">
								<button class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
				</tbody>
				<?php
			}
			?>
		</table>
	</div>
</div>
</body>
</html>