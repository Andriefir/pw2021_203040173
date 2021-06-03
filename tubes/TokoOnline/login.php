<?php 
/* 
    Mochammad Andrie Firmansyah
    203040173
    Jumat 13.00
    Tugas Besar
    https://github.com/Andriefir/pw2021_203040173
*/
?>
<?php  
session_start();

if (isset($_SESSION['login'])) {
	header("Location: index.php");
	exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
	$login = login($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
        body {
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
            background-size: .75em 100%, 100% 100%;
            background-attachment: fixed;
            font-family: sans-serif;
        }

        .loginbox {
            width: 320px;
            height: 420px;
            background: #000;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50px;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }

        h1 {
            margin: 0;
            padding: 0;
            text-align: center;
            font-size: 22px;
        }

        .loginbox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .loginbox input {
            width: 100%;
            margin-bottom: 20px;
        }

        .loginbox input[type="text"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }

        .loginbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #fb2525;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }

        .loginbox input[type="submit"]:hover {
            cursor: pointer;
            background: #ca9a0a;
            color: #000;
        }

        .loginbox a {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgrey;
        }

        .loginbox a:hover {
            color: #ca9a0a;
        }
    </style>
</head>
<body>
	
	<?php if (isset($login['error'])) : ?>
	<p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
	<?php endif; ?>

    <div class="loginbox">
    	<img src="img/Andrie.png" class="avatar">
		<h1>Login Here</h1>
		<br><br>
		<form action="" method="POST">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username" id="username" autofocus autocomplete="off" required> 
			<p>Password</p>		
			<input type="password" name="password" placeholder="Enter Password" id="password">
			<input type="submit" name="login" value="Login"> 
			<a href="registrasi.php">Don't Have an account</a>	
		</form>
	</div>
</body>
</html>