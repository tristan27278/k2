<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

$koneksi = mysqli_connect("localhost", "root", "", "fasera");
$id_user = $_SESSION['id'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "INSERT INTO laporan
(id_user, kategori, lokasi, keterangan)
VALUES
('$id_user','$kategori','$lokasi','$keterangan')");
?>



<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pengaduan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            width: 500px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        p {
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        b {
            color: #333;
        }

        .link {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        a {
            text-decoration: none;
            background: #008080;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 14px;
        }

        a:hover {
            background: #008080;
        }
    </style>
</head>

<body>

    <div class="container">

        <h2>Pengaduan Berhasil Dikirim</h2>
        <p>Terima kasih, laporan kamu sudah berhasil dikirim ke admin.</p>

        <hr>

        <h3>Detail Laporan</h3>

        <table>
            <tr>
                <td><b>Kategori</b></td>
                <td><?php echo $kategori; ?></td>
            </tr>
            <tr>
                <td><b>Lokasi</b></td>
                <td><?php echo $lokasi; ?></td>
            </tr>
            <tr>
                <td><b>Keterangan</b></td>
                <td><?php echo $keterangan; ?></td>
            </tr>
        </table>

        <div class="link">
            <a href="form-pengaduan.php">Kirim Lagi</a>
            <a href="data-pengaduan.php">Lihat Riwayat</a>
        </div>

    </div>

</body>

</html>