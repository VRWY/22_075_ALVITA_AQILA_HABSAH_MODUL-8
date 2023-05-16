<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<title>Tambah</title>
<center>
<form action="pbw.php" method="post">
	<br><br><br>
	<h3>Tambah Data </h3>
	<br>
		<div class="card" style="width: 30rem;">
		<div class="card-body">
			<div class="mb-3 row">
				<label for="nim" class="col-sm-2 col-form-label">Nim </label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="nim" name="nim" required>
				</div>
			</div>
			<div class="mb-3 row">
				<label for="nama" class="col-sm-2 col-form-label">Nama </label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="nama" name="nama" required>
				</div>
			</div>
			<div class="mb-3 row">
				<label for="dosen" class="col-sm-2 col-form-label">Dosen </label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="dosen" name="dosen" required>
				</div>
			</div>
			<div class="mb-3 row">
				<label for="statu" class="col-sm-2 col-form-label">Status </label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="statu" name="statu" required>
				</div>
		</div>
		<input type="radio" name="ket" value="Hadir"> Hadir
		<input type="radio" name="ket" value="Alpha"> Alpha
		<br><br>
		<input type="submit" name= "submit" class="btn btn-danger" value="Input"/>
		</div>
		</div>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
  </center>
</html>
