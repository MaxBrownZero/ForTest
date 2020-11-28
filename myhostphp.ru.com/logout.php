<?php
session_start();
unset($_SESSION['user']);
header('location: http://myhostphp.ru.com/');
?>