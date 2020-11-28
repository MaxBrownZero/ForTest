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

<body>
<?php
if(isset($add_n)){
   $link = mysql_connect('p508130.mysql.ihc.ru', 'p508130_vgt', 'Step_by_step');
     if(!$link){
      echo('Error connecting to the database: ' . mysql_error());
      exit();
   }
   $db = mysql_selectdb('p508130_vgt');
   if(!$db){
      echo('Error selecting database: ' . mysql_error());
      exit();
   }
   $query = "INSERT INTO news(name, email, headline, story, timestamp)VALUES('$name', '$email', '$headline', '$story', NOW())";
   $result = mysql_query($query);
   if(!$result){
      echo('Error adding news: ' . mysql_error());
      exit();
   }else{
   mysql_close($link);
   echo('Success!<br><a href="add.php">Click here</a> to add more news.<br><a href="edit.php">Click here</a> to edit news.<br><a href="../index.php">Click here</a> to return to the main page.');
   }
}else{
	
	
?>



<form name="form1" method="post" action="<? echo $PHP_SELF; ?>">
  <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td>Название новости</td>
      <td><input name="headline" type="text" id="headline"></td>
    </tr>
    <tr>
      <td>Описание</td>
      <td><textarea name="story" id="story"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input name="hiddenField" type="hidden" value="add_n">
          <input name="add" type="submit" id="add" value="Опубликовать">
        </div></td>
    </tr>
  </table>
  </form>
<?php } ?>
</body>
</html> 