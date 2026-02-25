<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | FOSERA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #008080, #004d4d);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: white;
            width: 350px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.25);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #008080;
        }

        label {
            font-size: 14px;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 18px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
        }

        input:focus {
            border-color: #008080;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #008080;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
        }

        button:hover {
            background: #006666;
        }

        .login-box p {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-box a {
            color: #008080;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    <form action="proses_login.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

       <button type="submit">Login</button>
    </form>

</div>

</body>
</html>
