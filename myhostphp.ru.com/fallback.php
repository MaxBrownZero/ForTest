<?php require 'tpl/header.php'; ?>
<html>
<head>
<title>Add News</title>
<meta http-equiv="Content-Type" content="text/html; charset="iso"-8859-1">

</head>
<div id="main">

						<!-- Sidebar -->
						<?php require 'tpl/sidebar.php';?>
					</section>

<script src="/fallback/jquery-3.3.1.min.js"></script>

<form name="MyForm" action="" id="callbacks" method="post"><!--Атрибут action остается пустым-->
	<input name="name" type="text" placeholder="Имя" /><br>
	<input name="tel" type="text" placeholder="Телефон" /><br> <br>
	<input name="email" type="email" placeholder="Email" /><br>
	<textarea name="body"  placeholder="Ваше сообщение"></textarea><br>
	<input type="submit" value="Отправить заявку" id="btncontcall" />
</form>

<div id="erconts"></div><!--В этом блоке будет выводится информация от обработчика-->

<script>
$(document).ready(function() {
$('#btncontcall').click(function(){ 
     $.ajax({
        type: "POST",
        url:"/fallback/send.php", // Адрес обработчика
        data:$('#callbacks').serialize(),
        error:function(){$("#erconts").html("Произошла ошибка!");},
		beforeSend: function() {
            $("#erconts").html("Отправляем данные...");
        },
		success: function(result){
			$('#erconts').html(result);
			checkThis();
		}
    });
    return false;
});
});
</script>
</html>