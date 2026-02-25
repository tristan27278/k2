<?php
session_start();
include "../koneksi.php";

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

$id_user = $_SESSION['id'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM laporan WHERE id_user='$id_user' ORDER BY id ASC"
);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Laporan</title>
    <meta charset="UTF-8">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .header {
            width: 100%;
            height: 70px;
            background-color: #008080;
            font-family: "Poppins", sans-serif;
            display: flex;
            align-items: center;
        }

        .nav-menu {
            margin-left: auto;
            margin-right: 40px;
        }

        .nav-menu ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .nav-menu ul li {
            color: white;
            font-weight: 500;
            cursor: pointer;
        }

        .nav-menu ul li:hover {
            text-decoration: underline;
        }

        .logo img {
            height: 55px;
            width: auto;
            object-fit: contain;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #008080;
            color: white;
            padding: 12px;
            font-size: 14px;
        }

        td {
            padding: 10px;
            text-align: center;
            font-size: 14px;
            border-bottom: 1px solid #eee;
            word-wrap: break-word;
            word-break: break-word;
            max-width: 200px;
        }

        .potong {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        table {
            width: 100%;
            table-layout: fixed;
        }

        tr:hover {
            background-color: #f2f2f2;
            transition: 0.2s;
        }

        a {
            text-decoration: none;
            background-color: #008080;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 13px;
            transition: 0.2s;
        }

        a:hover {
            background-color: #2980b9;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo"><img
                src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/cropped-SMK-MUTU-500-x-160-px.png"
                alt="logo-mutu"></div>
        <div class="nav-menu">
            <ul>
                <a href="index.php">
                    <li>BERANDA</li>
                </a>
                <a href="../logout.php">
                    <li>LOGOUT</li>
                </a>
            </ul>

        </div>
    </div>
    <div class="container">
        <h2>Data Pengaduan</h2>

        <table>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Feedback</th>
                <th>Details</th>
            </tr>
            <?php $no = 1; ?>
            <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td>
                        <?= $no++; ?>
                    </td>

                    <td>
                        <?= $data['tanggal']; ?>
                    </td>
                    <td>
                        <?= $data['kategori']; ?>
                    </td>
                    <td>
                        <?= $data['lokasi']; ?>
                    </td>
                    <td>
                        <?= $data['keterangan']; ?>
                    </td>
                    <td>
                        <?= $data['status']; ?>
                    </td>
                    <td>
                        <?= $data['feedback']; ?>
                    </td>
                    <td>
                        <a href="detail-pengaduan.php?id=<?= $data['id']; ?>">
                            Detail
                        </a>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>

</body>

</html>