<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

if ($_SESSION['role'] != "user") {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e8c5ddf50d.js" crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: aliceblue;
        }

        .header {
            width: 100%;
            height: 70px;
            background-color: #008080;
            display: flex;
            align-items: center;
            padding: 0 30px;
        }

        .logo img {
            height: 55px;
        }

        .nav-menu {
            margin-left: auto;
        }

        .nav-menu ul {
            list-style: none;
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-menu ul li {
            color: white;
            cursor: pointer;
            font-weight: 500;
        }

        .nav-menu ul li a {
            color: white;
            text-decoration: none;
        }

        .nav-menu ul li:hover {
            text-decoration: underline;
        }

        .box-form {
            display: flex;
            justify-content: center;
            padding: 40px 0;
        }

        .box {
            width: 50%;
            background: white;
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 20px;
        }

        .header1 {
            width: 100%;
            height: 50px;
            background-color: #008080;
            border-radius: 6px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 25px;
        }

        form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #aaa;
            font-size: 14px;
        }

        textarea {
            resize: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #008080;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #006666;
        }

        @media (max-width: 768px) {
            .box {
                width: 90%;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="logo">
            <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/cropped-SMK-MUTU-500-x-160-px.png"
                alt="logo-mutu">
        </div>
        <div class="nav-menu">
            <ul>
                <li><a href="index.php">BERANDA</a></li>
                <li><a href="../logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>

    <div class="box-form">
        <div class="box">
            <div class="header1">
                <h3>BERIKAN LAPORAN ANDA</h3>
            </div>

            <form action="proses_pengaduan.php" method="post">


                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Pelanggaran">Pelanggaran</option>
                        <option value="Kerusakan Fasilitas">Kerusakan Fasilitas</option>
                        <option value="Kehilangan">Kehilangan</option>
                        <option value="Saran / Masukan">Saran / Masukan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Lokasi Kejadian</label>
                    <input type="text" name="lokasi" placeholder="Contoh: Ruang Kelas, Kantin" required>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" rows="5" placeholder="Jelaskan kejadian secara lengkap"
                        required></textarea>
                </div>

                <button type="submit">Kirim Laporan</button>
            </form>

        </div>
    </div>

</body>

</html>