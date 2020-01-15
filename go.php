<!DOCTYPE html>
<html lang="ru"> <!--Только на русском -->
	<head>
		<meta charset="utf-8">
		<title>RBL | Вход</title>
		<link rel="stylesheet" type="text/css" href="style_1.css" media="all and (orientation:landscape)"/>
		<!--<link rel="stylesheet" type="text/css" href="style_2.css" media="all and (orientation:portrait)"/>-->
		<link rel="shortcut icon" href="logo.jpg" type="image/jpg"> 
		<!--Двухязычный
		<link rel="alternate" hreflang="en" href=""/> -->
	</head>
	<body>
		<?php include "header.php"; ?>
		<!--Главная изменяемая часть-->
		<div class="fon">
		<main class="rama">
			<div class="blg1">
				<div class="go1">
      				<h3>Логин</h3>
      				<input class="go2" type="text" placeholder="Введите логин" name="uname" required>
					<h3>Пароль</h3>
      				<input class="go2" type="password" placeholder="Введите пароль" name="psw" required>
        			<h3><button style="border: none;" class="go2" type="submit">Войти</button></h3>
      				<h3><input type="checkbox" checked="checked" name="remember"> Запомнить меня</h3>
    			</div>
				<a href="reg.php" title="Регистрация">Регистрация</a>
			</div>
		</main>
		</div>
		<?php include "footer.php"; ?>
	</body>
</html>