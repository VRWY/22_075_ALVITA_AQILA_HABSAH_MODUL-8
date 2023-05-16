<?php
error_reporting(0);
  include'koneksi.php';
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="stylepbw.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <title>PBW</title>
    </head>
<body class="p-3 m-0 border-0 bd-example">
    
    <nav class="navbar bg-body-tertiary fixed-top navbar-kotak">
        <div class="container-fluid navbar-awal">
            <b class="navbar-brand navbar-logo" href="#">PBW</b>
            <p class="navbar-nama">Selamat Datang, Alvita Aqila Habsah</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Praktikum PBW A</h5>
                <button type="button" class="btn-close"  data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="nama.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar Mahasiswa</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informasi Tugas</a>
                    </li> 
                    <li class="nav-logout">
                        <a href="login.php" style="color:rgb(255, 255, 255)" >Logout</a>
                    </li> 
                </ul>
            </div>
        </div>
        </div>
    </nav>

    <div class="contain">
        <p>WEBSITE PRAKTIKUM 
            <br>PEMROGRAMAN BERBASIS WEB</p>
    </div>

    <div class="table">
        <div class="table-header">
            <a href="tambah.php" type="button" class="btn btn-sm-data btn-primary-data">Tambah Data</a>
            <a href="cetak.php" type="button" class="btn btn-sm-cetak">Cetak Laporan<i class="bi bi-card-text"></i></a>
            <div class="col-lg-4 col-md-4 mr-auto col-xs-12 text-right searcharea nav-cari">
                <form role="search" method="get" class="search-form cari" action="">
                    <input type="search" class="search-field cari rounded-3" placeholder= "  Cari Berdasarkan NIM">
                    <button type="submit" class="search-submit cari rounded-end-3" style="width: 30px; background-color: rgb(147, 241, 241);">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
            <center>
            <table class="table table-striped table-data">
                <thead>
                    <tr>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Dosen</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ket</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    
                    <?php
if(isset($_POST['submit'])){
	include'koneksi.php';
		$insert= mysqli_query($koneksi, "INSERT INTO mhs_1 VALUES 
				('".$_POST['nim']."',
				'".$_POST['nama']."',
				'".$_POST['dosen']."',
				'".$_POST['statu']."',
        '".$_POST['ket']."')");
		}
	
?> 

<?php
include'koneksi.php';
$sql = "SELECT nim, nama,dosen, statu, ket FROM mhs_1";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {;
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo "<td>" . $row["nim"]. "</td><td>" . $row["nama"]. "</td><td> " . $row["dosen"]. "</td><td>" .$row["statu"]. "</td><td> " . $row["ket"]. "</td>";
        echo '<td>
        <a class="edit" href="read_data_edit.php?nim='.$row["nim"].'">Edit</a>
        <a class="Hapus" href="read_data_delete.php?nim='.$row["nim"].'">Delete</a>
        </td>';
        echo "</tr>";

    }
    echo "</table>";
} else {
    echo "0 results";

}
$koneksi->close();
?>
</table>
</body>
</html>
</center>
                </thead>
                </table>
            </center>
        </div>
    </div>

</body>
</html>