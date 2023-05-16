<?php
if(isset($_GET["nim"]))
{
	$nim=$_GET["nim"];
}else
	echo'<p class = "btn btn warning">Tidak valid</p>';

	include_once("koneksi.php");

$query= mysqli_query($koneksi,"DELETE FROM mhs_1 WHERE nim='$nim'");
if ($query){
	echo'DATA BERHASIL DI HAPUS';
	header("refresh:2;url=pbw.php");
}else{
	echo "Error: ".$query. "<br>". mysqli_error($koneksi);
	header("refresh:4;url=pbw.php");
}
mysqli_close($koneksi);
?>