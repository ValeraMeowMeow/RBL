<!DOCTYPE html>
<html lang="ru"> <!--Только на русском -->
	<head>
		<meta charset="utf-8">
		<title>RBL | Обучение</title>
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
			<div class="tab">
  				<button class="tablinks" onclick="shtuka(event, 'Предмет')">Предмет</button>
  				<button class="tablinks" onclick="shtuka(event, 'Преподаватель')">Преподаватель</button>
  				<button class="tablinks" onclick="shtuka(event, 'Вебинары')">Вебинары</button>
  				<button class="tablinks" onclick="shtuka(event, 'Тесты')">Тесты</button>
  				<button class="tablinks" onclick="shtuka(event, 'Литература')">Литература</button>
			</div>
			<div class="ramap">
			<div id="Предмет" class="tabcontent">
  				<h3>Предмет</h3>
  				<p class="bl">Компьютер</p>
			</div>
			<div id="Преподаватель" class="tabcontent">
  				<h3>Преподаватель</h3>
  				<p class="bl">Пин</p> 
			</div>
			<div id="Вебинары" class="tabcontent">
  				<h3>Вебинары</h3>
  				<button class="accordion">Глава 1. Мышка</button>
				<div class="panel">
  					<p>Компью́терная мышь — координатное устройство для управления курсором и отдачи различных команд компьютеру. Управление курсором осуществляется путём перемещения мыши по поверхности стола или коврика для мыши. Клавиши и колёсико мыши вызывают определённые действия, например: активация указанного объекта, вызов контекстного меню, вертикальная и горизонтальная (в специализированных мышках) прокрутка веб-страниц, окон операционной системы и электронных документов.</p>
				</div>
  				<button class="accordion">Глава 2. Клавиатура</button>
				<div class="panel">
  					<p>Компью́терная клавиату́ра — устройство, позволяющее пользователю вводить информацию в компьютер (устройство ввода). Представляет собой набор клавиш (кнопок), расположенных в определённом порядке.</p>
  					<iframe width="560" height="315" src="https://www.youtube.com/embed/bpqLp-puLeQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
  				<script>
					var acc = document.getElementsByClassName("accordion");
					var i;
					for (i = 0; i < acc.length; i++) {
    				acc[i].addEventListener("click", function() {
        			this.classList.toggle("active");
        			var panel = this.nextElementSibling;
        			if (panel.style.display === "block") {
            		panel.style.display = "none";
        			} else {
            		panel.style.display = "block";
       				} }); }
				</script>
			</div>
			<div id="Тесты" class="tabcontent">
  				<h3>Тесты</h3>
  				<p class="bl">
  					<?php include "test_1.php"; ?></p>
			</div>
			<div id="Литература" class="tabcontent">
  				<h3>Литература</h3>
  				<ul class="bl">
  					<li><a href="https://www.citilink.ru/catalog/computers_and_notebooks/computers/"></a>Компьютер</li>
  					<li><a href="https://www.dns-shop.ru/catalog/17a8a69116404e77/myshi/"></a>Мышь</li>
  					<li><a href="https://www.dns-shop.ru/catalog/17a8950d16404e77/klaviatury/"></a>Клавиатура</li>
  				</ul>
			</div>
		<script>
			function shtuka(evt, cityName) {
    		var i, tabcontent, tablinks;
    		tabcontent = document.getElementsByClassName("tabcontent");
    		for (i = 0; i < tabcontent.length; i++)
        		tabcontent[i].style.display = "none";
    		tablinks = document.getElementsByClassName("tablinks");
    		for (i = 0; i < tablinks.length; i++)
        	tablinks[i].className = tablinks[i].className.replace(" active", "");
    		document.getElementById(cityName).style.display = "block";
    		evt.currentTarget.className += " active";
			}
			document.getElementById("defaultOpen").click();
		</script></div>
		</main>
		</div>
		<?php include "footer.php"; ?>
	</body>
</html>