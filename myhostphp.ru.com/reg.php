<?php 
session_start();
if ($_SESSION['user']['name']) {
		header('location: ../profile.php');
	}
require 'tpl/header.php'; 
?>
<html>
<head>
<title>Регистрация</title>
<meta http-equiv="Content-Type" content="text/html; charset="iso"-8859-1">

</head>
<div id="main">

						<!-- Sidebar -->
						<?php require 'tpl/sidebar.php';?>
					</section>


<form action="http://myhostphp.ru.com/signup/" method="post" enctype="multipart/form-data">
	<?php
			
		if ($_SESSION['message']) {
			echo '<p class ="">' . $_SESSION['message'] . '</p>';
		}
		unset($_SESSION['message']);
	?>
	<input name="login" type="text" placeholder="Введите логин" /><br>
	<input name="full_name" type="text" placeholder="Введите имя" /><br>
	<input name="password" type="password" placeholder="Введите пароль" /><br>
	<input name="password_confirm" type="password" placeholder="Подтвердите пароль" /><br>
	<input name="email" type="email" placeholder="Введите Email" /><br>
	<label> Добавьте изображение профиля</label>
	<input type="file" name="avatar"><br><br>
		
	
	<button class="btn btn-success" type="submit">Зарегистрировать</button>
	
</form>

</html>