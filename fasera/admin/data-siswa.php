<?php 
$query = $koneksi->query("INSERT INTO `users`(`id`, `nama`, `username`, `nis`, `kelas`, `password`, `role`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .box2 {
            width: 80%;
            height: 500px;
            border: 3px solid black;
            border-radius: 15px;
            text-align: center;
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
    <div class="box">
        <div class="box2">
            <h2>TAMBAH DATA SISWA</h2>
            <form action="">
                <label for=""></label>
            </form>
        </div>
    </div>
</body>

</html>