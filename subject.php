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
  				<p class="bl">Огородное знание</p>
			</div>
			<div id="Преподаватель" class="tabcontent">
  				<h3>Преподаватель</h3>
  				<p class="bl">Копатыч</p> 
			</div>
			<div id="Вебинары" class="tabcontent">
  				<h3>Вебинары</h3>
  				<button class="accordion">Глава 1. Кукуруза</button>
				<div class="panel">
  					<p>Кукуру́за са́харная, также маи́с (лат. Zéa máys[2]) — однолетнее травянистое культурное растение[3], единственный культурный представитель рода Кукуруза (Zea) семейства Злаки (Poaceae). Помимо культурной кукурузы, род Кукуруза включает четыре вида — Zea diploperennis, Zea perennis, Zea luxurians, Zea nicaraguensis — и три дикорастущих подвида Zea mays: ssp. parviglumis, ssp. mexicana и ssp. huehuetenangensis. Считается, что многие из названных таксонов играли роль в селекции культурной кукурузы в древней Мексике. Существует предположение, что кукуруза — самое древнее хлебное растение в мире.</p>
				</div>
  				<button class="accordion">Глава 2. Томат или Помидор</button>
				<div class="panel">
  					<p>Тома́т или помидóр (лат. Solánum lycopérsicum) — однолетнее или многолетнее травянистое растение, вид рода Паслён (Solanum)[2] семейства Паслёновые (Solanaceae). Возделывается как овощная культура.</p>
  					<iframe width="560" height="315" src="https://www.youtube.com/embed/bpqLp-puLeQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
  				<button class="accordion">Глава 3. Огурец</button>
				<div class="panel">
  					<p>Огуре́ц обыкнове́нный, или Огурец посевно́й (лат. Cucumis sativus), — однолетнее травянистое растение, вид рода Огурец (Cucumis) семейства Тыквенные (Cucurbitaceae), овощная культура.</p>
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
  					<li><a href="https://www.labirint.ru/books/428483/"></a>Большая книга об овощах</li>
  					<li><a href="https://www.pomidorko.ru/"></a>Помидорки</li>
  					<li><a href="https://snob.ru/profile/7574/blog/101270"></a>Мир глазами овоща</li>
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