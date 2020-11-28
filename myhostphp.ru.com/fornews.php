<html>
	<head>
		<title>Автоновости</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<?php require 'tpl/sidebar.php';?>
		</section>
		 <title>Добавление новости</title>
    <script>
        function CopyTxt() {
            function strtr(str, repl) {
                for (var i = 0; i < str.length; i++) {
                    var f = str.charAt(i), r = repl[f];
                    if (r) str = str.replace(new RegExp(f, 'g'), r);
                }
                return str;
            }
            var trans = {
                'А':'A', 'Б':'B', 'В':'V', 'Г':'G', 'Д':'D', 'Е':'E', 'Ё':'E', 'Ж':'Gh', 'З':'Z', 'И':'I', 'Й':'Y', 'К':'K', 'Л':'L', 'М':'M', 'Н':'N', 'О':'O', 'П':'P', 'Р':'R', 'С':'S', 'Т':'T', 'У':'U', 'Ф':'F', 'Х':'H', 'Ц':'C', 'Ч':'Ch', 'Ш':'Sh', 'Щ':'Sch', 'Ъ':'Y', 'Ы':'Y', 'Ь':'Y', 'Э':'E', 'Ю':'Yu', 'Я':'Ya', 'а':'a', 'б':'b', 'в':'v', 'г':'g', 'д':'d', 'е':'e', 'ё':'e', 'ж':'gh', 'з':'z', 'и':'i', 'й':'y', 'к':'k', 'л':'l', 'м':'m', 'н':'n', 'о':'o', 'п':'p', 'р':'r', 'с':'s', 'т':'t', 'у':'u', 'ф':'f', 'х':'h', 'ц':'c', 'ч':'ch', 'ш':'sh', 'щ':'sch', 'ъ':'y', 'ы':'y', 'ь':'y', 'э':'e', 'ю':'yu', 'я':'ya', ' ':'_'
            };
            var txt = strtr(document.getElementById('id1').value, trans);
            document.getElementById('id2').value = txt;
        }
    </script>
	</head>
	<body>
	
<div class="iro-admin-page">
    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
	<?php
$link = mysql_connect('p508130.mysql.ihc.ru', 'p508130_vgt', 'Step_by_step');
if (!$link) {
      die ('Ошибка соединения!' . mysql_error());
      }
echo 'Успешное соедининение';
mysql_close($link);
?>

    <h1>СОЗДАТЬ НОВОСТЬ</h1>
    <br><br/>
    <form method="post" action=""  enctype="multipart/form-data" >
        <lable>Заголовок* <br><input id="id1" onkeyup="CopyTxt()" type="text" name="title" size="80"></lable><br><br>
        <lable>Дата* <br><input type="date" name="date" size="10"></lable><br><br>
        <lable>Загрузить изображение* <br><input name="img_url" type="file" /></lable><br><br>
        <lable>Автоматический Url* <br><input id="id2" type="text" name="url" size="80" value=""></lable> *.html<br><br>
        <textarea name="html" rows="10" cols="80"></textarea><br>
        <input class="button" type="submit" name="submit" value="Сохранить"><br><br><br><br>
    </form>
</div>
<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
<?php require 'tpl/header.php'; ?>
				<!-- Main -->