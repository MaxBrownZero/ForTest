<?php
$server="p508130.mysql.ihc.ru";
$user="p508130_vgt";
$pass="Step_by_step";
$DB="mynews";
$ntitle=$title;
$ntext=$newstext;
$nuser=$user;
$now = date(" H : i : s d - m - Y "); // дата будет выводиться в формате "время, дата"
mysql_connect($server,$user,$pass) or die("Нет коннекта!");
mysql_select_db($DB);
mysql_query("Insert INTO news(ntitle,ntext,ndate,nuser) VALUES('".addslashes($ntitle)."','".addslashes($ntext)."','".addslashes($now)."',
'".addslashes($nuser)."')");
mysql_close();
echo "Новость добавлена!";
?>