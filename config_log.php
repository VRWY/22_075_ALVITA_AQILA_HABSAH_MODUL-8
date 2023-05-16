<?php 
include 'config.php';

$user = $_POST['username'];
$pass = $_POST['pass'];

$login = mysqli_query($conn,"SELECT * FROM userr WHERE username ='$user' AND pass = '$pass'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['status'] = "login successful";
    header("location: nama.php");
    
}else {
    echo"
    <script>
    alert('Login gagal');
    document.location.href = 'login.php';
    </script>";
        
}

?>