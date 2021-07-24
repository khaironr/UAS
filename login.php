<?php
    require 'fungsi.php';

    if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$cekdatabase = mysqli_query($conn, "SELECT * FROM login where username='$username' and password = '$password' ");

		$hitung = mysqli_num_rows($cekdatabase);

		if($hitung > 0)
		{
			$_SESSION['log'] = 'true';
			header('location:index.php');
		}
		else{
			header('location:login.php');
		}
	}
?>

<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
<section class="login">
	<div class="titulo">Staff Login</div>
	<form action="#" method="post" enctype="application/x-www-form-urlencoded">
    	<input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <div class="olvido">
        	<div class="col"><a href="register.php" title="Ver Carásteres">Register</a></div>
            <div class="col"><a href="#" title="Recuperar Password">Fotgot Password?</a></div>
        </div>
        <input type="submit" class="enviar" name="login" value="Sign In">
    </form>
</section>
