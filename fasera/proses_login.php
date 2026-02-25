<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,
    "SELECT * FROM users WHERE username='$username' AND password='$password'"
);

$data = mysqli_fetch_assoc($query);

if($data){

    $_SESSION['login'] = true;
    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['role'] = $data['role'];

    if($data['role'] == "admin"){
        header("Location: admin/index.php");
    }else{
        header("Location: users/index.php");
    }
    exit;

}else{
    echo "<script>
        alert('Login gagal');
        window.location='login.php';
    </script>";
}
?>
