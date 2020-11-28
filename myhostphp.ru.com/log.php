<?php 
session_start();
if ($_SESSION['user']['name']) {
		header('location: ../profile.php');
	}
require 'tpl/header.php'; 
?>
<html>
<head>
<title>Вход</title>
<meta http-equiv="Content-Type" content="text/html; charset="iso"-8859-1">

</head>
<div id="main">

						<!-- Sidebar -->
						<?php require 'tpl/sidebar.php';?>
					</section>


<form action="http://myhostphp.ru.com/signin/" method="post">
	<input name="login" type="text" placeholder="Введите логин" /><br>
	<input name="password" type="password" placeholder="Введите пароль" /><br>
		<?php
		if ($_SESSION['message']) {
			echo '<p class ="">' . $_SESSION['message'] . '</p>';
		}
		unset($_SESSION['message']);
		?>
	<button class="btn btn-success" type="submit">Войти</button>
	
</form>

</html>