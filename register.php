<?php
    require 'fungsi.php';

?>

<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
<section class="login">
	<div class="titulo">Register</div>
	<form action="#" method="post" enctype="application/x-www-form-urlencoded">
        <input type="text" name="email" placeholder="@gmail.com" required>
    	<input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="buat" class="enviar" value="Buat Akun">
    </form>
</section>