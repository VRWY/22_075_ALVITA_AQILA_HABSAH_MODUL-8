<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$dosen = $_POST['dosen'];
$statu = $_POST['statu'];
$ket = $_POST['ket'];

include_once("koneksi.php");

$query = mysqli_query($koneksi,"UPDATE mhs_1 SET nama		='$nama',
														dosen			='$dosen',
														statu			='$statu',
														ket			='$ket'
														where nim		='$nim'");
if ($query){
	echo "DATA BERHASIL DI EDIT";
	header("refresh:2;url=pbw.php");
}
else
{
	echo "Error: ".$query. "<br>". mysqli_error($koneksi);
	header("refresh:4;url=pbw.php");
}
mysqli_close($koneksi);

?>