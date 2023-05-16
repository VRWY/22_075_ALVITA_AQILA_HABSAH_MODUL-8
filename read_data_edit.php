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
<title>Edit</title>
<center>
		<?php
			if(isset($_GET["nim"]))
			{
				$nim = $_GET["nim"];
			}else
				echo '<p class="btn btn-danger">nim tidak valid</p>';
				include_once("koneksi.php");
			$sql = "SELECT nim, nama, dosen, statu, ket FROM mhs_1 where nim= '".$nim."'limit 1";
			$result = $koneksi->query($sql);
			if ($result->num_rows<=0){
			echo 'no data';
			exit;
		}else
		{
			$row = $result->fetch_assoc();

		}
			
			?>


<form action="read_data_edit_post.php" method="post">
<br><br><br>
	<h3>Edit Data </h3>
	<br>
		<div class="card" style="width: 30rem;">
		<div class="card-body">
			<div class="mb-3 row">
				<label for="nim" class="col-sm-2 col-form-label">Nim </label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="nim" name="nim" value="<?php echo $row["nim"]; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="nama" class="col-sm-2 col-form-label">Nama </label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row["nama"]; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="dosen" class="col-sm-2 col-form-label">Dosen </label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="dosen" name="dosen" value="<?php echo $row["dosen"]; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="statu" class="col-sm-2 col-form-label">Status </label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="statu" name="statu" value="<?php echo $row["statu"]; ?>">
				</div>
		</div>
		<input type="radio" id="Hadir" name="ket" value="Hadir" <?php if($row['ket']=='Hadir')echo 'checked' ?> >
  		<label for="Hadir"> Hadir </label>
		<input type="radio" id="Alpha" name="ket" value="Alpha" <?php if($row['ket']=='Alpha')echo 'checked' ?> >
  		<label for="Alpha"> Alpha </label><br>
	<br>
	<input type="submit" name= "submit" class="btn btn-danger" value="Input"/>
</form>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </center>
</html>
