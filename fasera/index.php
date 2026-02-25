<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASERA</title>
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
            background-color: #008080;
            font-family: "Poppins", sans-serif;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 55px;
            width: auto;
            object-fit: contain;
        }

       .foto {
    width: 100%;
    height: clamp(200px, 40vw, 500px);
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
    padding: 0 20px;
    font-size: clamp(14px, 2.5vw, 20px);
    text-align: justify;
}

        .button {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 80px;
            margin-bottom: 30px;
        }

        .text1 {
            width: 180px;
            height: 80px;
            background-color: #008080;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }

        .footimg {
            width: 100%;
            height: 20px;
            background-color: #008080;
        }

       .nav-menu {
    margin-left: 20px;
    color: aliceblue;
    flex: 1;
}
                .box1 {
            width: 200px;
            height: 250px;
            border: 4px solid #008080;
            margin: 30px;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
        }

        .box2 {
            width: 100px;
            border: 4px solid #008080;
            margin: 10px;
            border-radius: 15px;
        }

        .t {
            margin: 20px;
            margin-bottom: 5px;
        }
        .tatacara {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 25px;
    margin-top: 20px;
}



.box1 i {
    font-size: 30px;
    color: #008080;
    margin-bottom: 10px;
}

.box1 h3 {
    margin-bottom: 10px;
}

.box1 p {
    font-size: 14px;
}

    </style>

</head>

<body>
    <div class="header">
        <div class="logo"><img
                src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/cropped-SMK-MUTU-500-x-160-px.png"
                alt="logo-mutu"></div>
        <div class="nav-menu">
            <h2>Selamat Datang di FASERA — Sistem Pengaduan Fasilitas Sekolah SMK Mutu Cikampek</h2>
        </div>
    </div>
    <div class="foto">
        <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-29-at-08.20.27-1-e1748585989774.jpeg"
            alt="">
    </div>
    <div class="footimg"></div>
    <h2 class="t">TENTANG</h2>
    <div class="tentang">
        <p>FASERA adalah sistem pengelolaan pengaduan fasilitas sekolah di SMK Mutu Cikampek. Dengan adanya sistem FASERA, diharapkan proses pelaporan dan perbaikan fasilitas sekolah dapat dilakukan secara cepat, tepat, dan efisien sehingga lingkungan belajar tetap nyaman dan terawat</p>
    </div>
     <h2 class="t">TATA CARA PENGGUNAAN </h2>
    <div class="tatacara">
    <div class="box1">
        <i class="fa-solid fa-right-to-bracket"></i>
        <h3>Login</h3>
        <p>Masuk menggunakan username dan password yang telah diberikan.</p>
    </div>
    <div class="box2"></div>
    <div class="box1">
        <i class="fa-solid fa-clipboard-list"></i>
        <h3>Buat Pengaduan</h3>
        <p>Isi form pengaduan fasilitas sekolah yang mengalami kerusakan.</p>
    </div>
    <div class="box2"></div>
    <div class="box1">
        <i class="fa-solid fa-comments"></i>
        <h3>Lihat Tanggapan</h3>
        <p>Pantau status laporan dan feedback dari admin sekolah.</p>
    </div>

</div>

    <div class="button">
        <a href="login.php" class="text1">
            <h4>LOGIN</h4>
        </a>
    </div>

</body>

</html>