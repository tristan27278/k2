<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

if($_SESSION['role'] != "admin"){
    header("Location: ../index.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSERA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/e8c5ddf50d.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: aliceblue;
            font-family: "Poppins", sans-serif;
        }

        a {
            text-decoration: none;
            color: white;
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

         .foto {
            width: 100%;
            height: 500px;
        }

        .foto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .user-icon i {
            font-size: 24px;
            color: white;
        }

        .footer {
            background-color: #008080;
            width: 100%;
            height: 30px;
            margin-bottom: 20px;
        }

        .box1 {
            width: 200px;
            height: 250px;
            border: 4px solid #008080;
            margin: 30px;
            border-radius: 15px;
        }

        .box2 {
            width: 100px;
            border: 4px solid #008080;
            margin: 10px;
            border-radius: 15px;
        }

        .tatacara {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .t {
            margin: 20px;
            margin-bottom: 5px;
        }

        .tentang {
            margin-left: 40px;
            font-size: 20px;
        }

        .button {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 80px;
            margin-bottom: 40px;
        }

        .text1 {
            width: 190px;
            height: 100px;
            background-color: #008080;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }

        .text2 {
            width: 190px;
            height: 100px;
            background-color: #806d00;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }
        .footimg{
            width: 100%;
            height: 30px;
            background-color: #008080;

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
    <div class="foto">
        <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-29-at-08.20.27-1-e1748585989774.jpeg"
            alt="">
    </div>
    <div class="footimg"></div>
    <div class="button">
        <a href="data-pengaduan.php" class="text2">
            <h4>DATA PENGADUAN</h4>
        </a>
        <!--<a href="data-pengaduan.php" class="text1">
            <h4>DATA KATEGORI</h4>
        </a>
         <a href="data-pengaduan.php" class="text2">
            <h4>DATA SISWA</h4>
        </a> -->
        <a href="histori-pengaduan.php" class="text1">
            <h4>HISTORI PENGADUAN</h4>
        </a>
    </div>
</body>

</html>