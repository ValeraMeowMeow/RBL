<!DOCTYPE html>
<html lang="ru"> <!--Только на русском -->
	<head>
		<meta charset="utf-8">
		<title>RBL | Регистрация</title>
		<link rel="stylesheet" type="text/css" href="style_1.css" media="all and (orientation:landscape)"/>
		<!--<link rel="stylesheet" type="text/css" href="style_2.css" media="all and (orientation:portrait)"/>-->
		<link rel="shortcut icon" href="logo.jpg" type="image/jpg"> 
		<!--Двухязычный
		<link rel="alternate" hreflang="en" href=""/> -->
	</head>
	<body>
		<?php include "header.php"; ?>
		<!--Главная изменяемая часть-->
		<main class="rama">
		<div class="fon">
			<div class="blg1">
				<div class="go1">
      				<h3>Фамилия</h3>
      				<input class="go2" type="text" placeholder="Введите Фамилию" name="sname" required>
      				<h3>Имя</h3>
      				<input class="go2" type="text" placeholder="Введите имя" name="uname" required>
      				<h3>Отчество (при наличии)</h3>
      				<input class="go2" type="text" placeholder="Введите отчество" name="sname" required>
      				<h3>Дата рождения</h3>
      				<input class="go2" type="date" name="date" required>
      				<h3>Электронная почта</h3>
      				<input class="go2" type="text" placeholder="Введите электронную почту" name="mail" required>
      				<h3>Пол</h3>
      				М<input type="checkbox" name="men">
					Ж<input type="checkbox" name="wu">
      				<h3>Логин</h3>
      				<input class="go2" type="text" placeholder="Введите логин" name="login" required>
      				<h3>Пароль</h3>
      				<input class="go2" type="password" placeholder="Введите пароль" name="psw" required>
      				<h3>Повтор пароля</h3>
      				<input class="go2" type="password" placeholder="Введите пароль" name="psw2" required>
					<h3>Ваш Факультет</h3>
      				<input class="go2" type="text" placeholder="Введите пароль" name="fac" required>
      				<h3>№ учебной группы</h3>
      				<input class="go2" type="text" placeholder="Введитеномер группы" name="n" required>
        			<h3><button class="go2" type="submit">Зарегистрироваться</button></h3>
    			</div>
			</div>
		</div>
		</main>
		<?php include "footer.php"; ?>
	</body>
</html>