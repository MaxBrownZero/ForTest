		<?php require 'tpl/sidebar.php';?>
		</section>
		<?php require 'tpl/header.php'; ?>
<html>
<head>
<title>Добавление новостей</title>
</head>
<body>
<h3>Добавление новостей</h3>
<form action="createnews.php" method="POST">
Заголовок новости: <input type="text" Size=70 name="title"><br>
Ваше имя: <input type="text" Size=50 name"user"><br>
Текст <textarea name="newstext" cols=60 rows=6>
</textarea>
<br><br>
<CENTER>
<input type="Submit" Value="Ok">
<input type="reset" Value=" Очистить ">
</CENTER>
</form>
</body>
</html>