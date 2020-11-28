<?php 
session_start();
require 'tpl/header.php'; 
require 'content-home.php'; 
require 'tpl/sidebar.php';
?>

<html>
<head>
<!-- Mini Posts -->
							<section>
								<div class="mini-posts">

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="catalog/cars150.php">До 150 000 рублей</a></h3>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="catalog/cars150.php" class="image"><img src="images/pic04.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="catalog/cars300.php">До 300 000 рублей</a></h3>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="catalog/cars300.php" class="image"><img src="images/pic05.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="#">До 500 000 рублей</a></h3>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="#">До 1 000 000 рублей</a></h3>
												<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
										</article>

								</div>
							</section>
							<?php
							if ($_SESSION['user']) {
								echo 
								'<div> 
									<ul class="actions">
											<li><a href="add.php" class="button big">Создать новость</a></li>
									</ul>
								</div>';
			
			} 
							
			?>
			
			<ul class="Fallback">
										<a href="/fallback" class="button big">Напишите свой отзыв</a>
									</ul>
									
<title>View News</title>
<meta http-equiv="Content-Type" content="text/html; charset="iso"-8859-1">
</head>
<body>
<!-- 
<?php
$link = mysql_connect('p508130.mysql.ihc.ru', 'p508130_vgt', 'Step_by_step');
if(!$link){
   echo('Error connecting to the database: ' . mysql_error());
   exit();
}
$db = @mysql_selectdb('p508130_vgt');
if(!$db){
   echo('Error selecting database: ' . mysql_error());
   exit();
}
$query = "SELECT id, headline, timestamp FROM news ORDER BY timestamp DESC";
$result = @mysql_query($query);
if(!$result){
   echo('Error selecting news: ' . mysql_error());
   exit();
}
if (mysql_num_rows($result) > 0){
    while($row = mysql_fetch_object($result))
    {
    ?>
   <font size="-1"><b><? echo $row->headling; ?></b> <i><? echo formatDate($row->timestamp); ?></i></font>
    <?php
    }
}else{
   ?>
   <font size="-2"></font>
<?php }
   mysql_close($link); ?>
   -->
						
</body>
</html> 