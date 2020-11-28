<?php
session_start();

if (!$_SESSION['user']['name']) {
		header('location: http://myhostphp.ru.com/log/');
	}
?>
<?php require 'tpl/header.php'; ?>
<!doctype html>
	<body>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="">Ваш профиль</a></h2>
										<p>Наслаждайтесь</p>
									</div>
								</header>
									<CENTER>
									<?php
									if ($_SESSION['user']['avatar'] == "uploads/") {
										$_SESSION['user']['avatar'] = "uploads/no_avatar.gif";
									}
									?>
								<img src="/<?= $_SESSION['user']['avatar'] ?>" width = "200" alt ="">
								<h2><br>Ваш Логин - <?= $_SESSION['user']['name'] ?></h2>
								<a href="#">Ваша почта - <?= $_SESSION['user']['email'] ?></a>
								<h2><br>Функционала с профилем пока нет</h2>
								<a href="../logout.php" class="button">Выход из профиля</a>
	
								</CENTER>
								
							</article>
                            
					</div>

			

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>