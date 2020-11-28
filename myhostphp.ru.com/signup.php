<?php
	session_start();
	require_once 'connect.php';	
	
	
	$login = $_POST['login'];
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];
	
	if($full_name=="" or $email == "" or $password == "" or $password_confirm == "" or $login == ""){ // Проверяем на заполненность всех полей.
	$_SESSION['message'] = 'Заполните все поля';
	header('location:../reg.php');
	}else {
	
	if ($password === $password_confirm) {
		$password = md5($password);
		
		$path = 'uploads/' . time() . $_FILES['avatar']['name'];
		if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $path)) {
			$_SESSION['message'] = 'Ошибка при загрузке аватарки';
			header('Location: ../reg.php');
		}
		
		mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `pass`, `email`, `avatar`) VALUES (NULL, '$full_name', '$login', '$password', '$email', '$path')");
		$_SESSION['message'] = 'Регистрация завершена.';
		header('location:../log.php');
		
	} Else{
		$_SESSION['message'] = 'Пароль не совпадает';
		header('location:../reg.php');
	}
	}
	
?>

<pre>
	<?php
		print_r($_FILES);
	?>
</pre>