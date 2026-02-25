<?php
include "../koneksi.php";
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}
;
$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM laporan 
    JOIN users ON laporan.id_user = users.id 
    WHERE laporan.id='$id'");

$data = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Detail Pengaduan</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }

        .box {
            background-color: white;
            padding: 20px;
            width: 600px;
            margin: auto;
            border: 1px solid #ccc;
        }

        h2 {
            text-align: center;
        }

        .item {
            margin-bottom: 10px;
        }

        textarea {
            width: 100%;
            height: 100px;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            padding: 5px 10px;
            background-color: #008080;
            color: white;
            text-decoration: none;
        }

        a:hover {
            background-color: darkblue;
        }
    </style>
</head>

<body>

    <div class="box">
        <h2>Detail Pengaduan</h2>

        <div class="item">ID : <?= $data['id']; ?></div>
        <div class="item">Nama : <?= $data['nama']; ?></div>
        <div class="item">Nis : <?= $data['nis']; ?></div>
        <div class="item">Kategori : <?= $data['kategori']; ?></div>
        <div class="item">Lokasi : <?= $data['lokasi']; ?></div>
        <div class="item">Keterangan : <?= $data['keterangan']; ?></div>
        <div class="item">Status : <?= $data['status']; ?></div>
        <div class="item">Tanggal : <?= $data['tanggal']; ?></div>

        <h3>Feedback Admin</h3>
        <textarea readonly><?= $data['feedback']; ?></textarea>

        <br>
        <a href="data-pengaduan.php">Kembali</a>
    </div>

</body>

</html>