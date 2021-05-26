<?php 
require 'functions.php';

if (isset($_POST['registrasi'])) {
	if(registrasi($_POST) > 0) {
		echo "<script>
            alert('user baru berhasil ditambahkan. silahkan login!');
            document.location.href = 'login.php';
          </script>";
	} else {
		echo 'user gagal ditambahkan!';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<style>
        body {
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
            background-size: .75em 100%, 100% 100%;
            background-attachment: fixed;
            font-family: sans-serif;
        }

        .registrasibox {
            width: 320px;
            height: 470px;
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

        .registrasibox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .registrasibox input {
            width: 100%;
            margin-bottom: 20px;
        }

        .registrasibox input[type="text"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }

        .registrasibox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #fb2525;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }

        .registrasibox input[type="submit"]:hover {
            cursor: pointer;
            background: #ca9a0a;
            color: #000;
        }

        .registrasibox a {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgrey;
        }

        .registrasibox a:hover {
            color: #ca9a0a;
        }
    </style>
</head>
<body>

 	<div class="registrasibox">
    	<img src="img/Andrie.png" class="avatar">
		<h1>Registration</h1>
		<br><br>
		<form action="" method="POST">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username" id="username" autofocus autocomplete="off" required> 
			<p>Password</p>		
			<input type="password" name="password1" placeholder="Enter Password" id="password1" required>
			<p>Confirm Password</p>		
			<input type="password" name="password2" placeholder="Enter Password" id="password2" required>
			<input type="submit" name="registrasi" value="Register"> 	
		</form>
	</div>
</body>
</html>