<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Главная страница</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700italic&subset=cyrillic-ext' rel='stylesheet' type='text/css'>
<!-- jQuery library (served from Google) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Slider Javascript file -->
<script src="js/jquery.smslider.js"></script>
<script src="js/jquery.mb.browser.js"></script>
<!-- Slider CSS file -->
<link href="css/smslider.css" rel="stylesheet" />
<script type="text/javascript">
$(document).ready(function(){
	$('#sm_slider').smSlider()
})
</script>
</head>
<body>
	<div id="pagewrap">
		<div id="header">
			<div id="logo"></div>
			<div class="search">
			<form>
				<input type="twxt" placeholder="Поиск" name="pwd">
				<button id="bar" type="submit"><img src="img/search.png" /></button>
			</form>
			</div>
			<div class="top_menu">
				<ul>
					<li><a href="#">Удаленная поддержка</a></li>
					<li><a href="#">Обслуживание</a></li>
					<li><a href="#">Цены</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
			<!--Слайдер-->
			<?php include(TEMPLATEPATH.'/slider.php'); ?>
			<!--Слайдер-->
		</div>
		<div id="sidebar2" style="background-image:url(./img/divide_line.png);">
			<h2>НОВОСТИ</h2><img class="news_icon" src="img/news_icon.png" />
			<h4>01.01.2014</h4>
			<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
			<h4>01.01.2014</h4>
			<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
			<h4>01.01.2014</h4>
			<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
			<img class="rekl_block" src="img/rekl_block.png" />
		</div>
		<div id="content" style="height:430px;">
			<h3>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </h3>
			<span>
				The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
			</span>
			<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
			Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
			Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
			Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.
			Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
			
		</div>
		<div id="middle">
			<div class="links">
				<img class="podlozhka_link" src="img/podlozhka_link1.png" />
				<a href="#">Вызов мастера</a>
				<img class="" src="img/podlozhka_link2.png" />
				<a href="#">Бесплатная консультация</a>
			</div>	
		</div>
		<div id="footer" style="margin-top:-5em;">
			<div class="bottom_left_menu">
				<h3>НАСТРОЙКА РОУТЕРА</h3>
				<ul>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
				</ul>
				<h3>ПРОШИВКА РОУТЕРА</h3>
				<ul>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
				</ul>
			</div>
			<div class="bottom_right_menu">
				<h3>НАСТРОЙКА WI-FI СЕТИ</h3>
				<ul>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
				</ul>
				<h3>НАСТРОЙКА WI-FI СЕТИ</h3>
				<ul>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
					<li><a href="#">Many desktop publishing packages and web page editors now use </a></li>
				</ul>
			</div>	
			<div class="cards">
				<span>©2014 Все права защищены</span>
				<img src="img/paypal.png" />
				<img src="img/mastercard.png" />
				<img src="img/visa.png" />
			</div>	
		</div>
	</div>	
</body>
</html>