<!DOCTYPE html>
<html lang="ru"> <!--Только на русском -->
	<head>
		<meta charset="utf-8">
		<title>RBL | Главная страница</title>
		<link rel="stylesheet" type="text/css" href="style_1.css" media="all and (orientation:landscape)"/>
		<!--<link rel="stylesheet" type="text/css" href="style_2.css" media="all and (orientation:portrait)"/>-->
		<link rel="shortcut icon" href="logo.jpg" type="image/jpg"> 
		<!--Двухязычный
		<link rel="alternate" hreflang="en" href=""/> -->
	</head>
	<body>
		<?php include "header.php"; ?>
		<!--Главная изменяемая часть-->
		<main>
			<div class="bgimg-1">
				<div class="caption">
					<p><span class="border">RBL | Ready Be Learn</span></p>
					<p><span class="border">Дистанционное обучение</span></p>
				</div>
			</div>
			<div class="blg1">
				<h3>Новости</h3>
				<p>Долгожданое Beta-тестирование и открытие нашего сервиса RBL | Ready Be Learn для дистанционного обучения</p>
			</div>
			<div class="bgimg-2">
				<div class="caption">
					<span class="border2">Хочешь подтянуть свои знания?</span>
					<span class="border2">Мы поможем тебе с этим</span>
				</div>
			</div>
			<div class="blg2">
				<h3>Обновляния</h3>
				<p>На наш серсис были добавлены новости о нашей команде разработчиков и информация, как связаться с нами и где мы находимся</p>
			</div>
			<div class="bgimg-1">
				<div class="caption">
					<a href="reg.php">
						<span class="border">Зарегистрироваться</span>
					</a>
				</div>
			</div>
			<?php include "footer.php"; ?>
		</main>
	</body>
</html>