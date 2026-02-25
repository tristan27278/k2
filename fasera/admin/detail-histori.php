<?php
session_start();
include "../koneksi.php";

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

$id = $_GET['id'];

if (isset($_POST['update'])) {

    $status = $_POST['status'];
    $feedback = $_POST['feedback'];

    mysqli_query($koneksi, "
        UPDATE laporan 
        SET status='$status',
            feedback='$feedback'
        WHERE id='$id'
    ");

    echo "<script>
        alert('Data berhasil diperbarui');
        window.location='data-pengaduan.php';
    </script>";
}



$query = mysqli_query($koneksi, "
    SELECT * FROM laporan
    JOIN users ON laporan.id_user = users.id
    WHERE laporan.id='$id'
");

$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Detail Pengaduan</title>
    <meta charset="UTF-8">

    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
            padding: 30px;
        }

        .box {
            background: white;
            padding: 25px;
            width: 600px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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

        select,
        button {
            padding: 8px;
            margin-top: 5px;
        }

        .btn {
            background: #008080;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background: #006666;
        }

        a {
            text-decoration: none;
            padding: 8px 12px;
            background: gray;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="box">

        <h2>Detail Pengaduan</h2>

        <div class="item">ID : <?= $data['id']; ?></div>
        <div class="item">Nama : <?= $data['nama']; ?></div>
        <div class="item">Kategori : <?= $data['kategori']; ?></div>
        <div class="item">Lokasi : <?= $data['lokasi']; ?></div>
        <div class="item">Keterangan : <?= $data['keterangan']; ?></div>
        <div class="item">Tanggal : <?= $data['tanggal']; ?></div>

        <hr>

        <h3>Update Status & Feedback</h3>

        <form method="POST">

            <label>Status</label><br>
            <select name="status" required>

                <option value="MENUNGGU" <?= ($data['status'] == "MENUNGGU") ? 'selected' : '' ?>>
                    MENUNGGU
                </option>

                <option value="PROSES" <?= ($data['status'] == "PROSES") ? 'selected' : '' ?>>
                    PROSES
                </option>

                <option value="BERHASIL" <?= ($data['status'] == "BERHASIL") ? 'selected' : '' ?>>
                    BERHASIL
                </option>

            </select>

            <br><br>

            <label>Feedback Admin</label><br>
            <textarea name="feedback"><?= $data['feedback']; ?></textarea>

            <br><br>

            <button type="submit" name="update" class="btn">
                Simpan
            </button>

            <a href="histori-pengaduan.php">Kembali</a>

        </form>

    </div>

</body>

</html>