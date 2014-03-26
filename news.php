<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Новости</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700italic&subset=cyrillic-ext' rel='stylesheet' type='text/css'>
<!-- jQuery library (served from Google) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Slider Javascript file -->
<script src="js/jquery.smslider.js"></script>
<script src="js/jquery.mb.browser.js"></script>
<script type="text/javascript" src="js/jquery.rating.min.js"></script>
<!-- Slider CSS file -->
<link href="css/smslider.css" rel="stylesheet" />
<link href="rating/styles/jquery.rating.css" rel="stylesheet" type="text/css" /> 
<script type="text/javascript">
$(document).ready(function(){
	$('#sm_slider').smSlider()
})
</script>
<script type="text/javascript">
$(function(){
	$('#rating_1, #rating2').rating({
		fx: 'full',
        image: 'rating/images/stars.png',
        loader: 'rating/images/ajax-loader.gif',
        width: 32,
		url: 'rating.php'
	});
	$('#rating_2').rating({
		fx: 'full',
        image: 'rating/images/stars.png',
        loader: 'rating/images/ajax-loader.gif',
        width: 32,
		url: 'rating.php'
	});
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
			<div id="sm_slider">
				<ul>
					<li>
						<div class="slide1">
							<img src="img/slide1.png" />
							<div class="description">
								<h2>Подробное описание</h2>
								<h3>установки и настройка роутера</h3>
								<p>Итак, как работает WI FI и какие плюсы он нам даёт. Например, представим что у нас есть в наличии два ноутбука с встроенным адаптером беспроводной сети (WIFI), кабель Ethernet (RJ-45) от провайдера интернета.</p>
								<text>В данном случае конечно было бы удобно чтобы ноутбуки небыли привязаны к определённому месту, где располагается кабель с поступающим Интернетом, а можно было их перемещать по квартире, офису в любое место. Итак чтобы всё это заработало нам необходимо иметь в наличии WIFI Router (маршрутизатор) с поддержкой NAT. Маршрутизатор – сетевое устройство, на основании информации о топологии сети и определённых правил, принимающее решения о пересылке пакетов сетевого уровня между различными сегментами сети.</text>
								<img src="img/podrobnee.png" />
							</div>	
						</div>
					</li>
					<li><div class="button_call_master"></div></li>
					<li>...</li>
					<li>...</li>
				</ul>
			</div>
			<!--Слайдер-->
		</div>
		<div id="newscontent">
			<div class="navi">
				<p><a>Главная&nbsp;</a> \<a>Новости&nbsp;</a> \<a>Название темы</a></p>
			</div>	
			<div class="news_headers">
				<h2>НОВОСТИ</h2><img class="news_icon" src="img/news_icon.png" />
				<img class="divide_line" src="img/divide_line_hor.png" />
				<h3>It is a long established fact that a reader will be distracted </h3>
				<h4>Подзаголовок 1</h4>
				<p>Добавлена 03.03.2014</p>
				<div class="wrap">
					<div id="rating_1">
						<input type="hidden" class="val" value="1.75"/>
						<input type="hidden" class="votes" value="2"/>
					</div>
				</div>	
			</div>
			<div class="news_body">
				<div class="new">
					<img class="news_thumbnail" src="img/thumb1.png" />
					<text>
						Many desktop publishing packages and web page editors now use 
						Lorem Ipsum as their default model text, and a search for 'lorem ipsum' 
						will uncover many web sites still in their infancy. Various versions have evolved over the years, 
						sometimes by accident, sometimes on purpose (injected humour and the like).
						Many desktop publishing packages and web page editors now use Lorem 
						Ipsum as their default model text, and a search for 'lorem ipsum' 
						will uncover many web sites still in their infancy. 
						Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, 
						and a search for 'lorem ipsum' will uncover many web sites still in their infancy.<br/>
						Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						Many desktop publishing packages and web page editors now use Lorem 
						Ipsum as their default model text, and a search for 'lorem ipsum' 
						will uncover many web sites still in their infancy.<br/>
						Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						Many desktop publishing packages and web page editors now use Lorem 
						Ipsum as their default model text, and a search for 'lorem ipsum' 
						will uncover many web sites still in their infancy.<br/>
						Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, 
						and a search for 'lorem ipsum' will uncover many web sites still in their infancy. 
						Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
					</text>
				</div>
				<br/>
				<div class="news_headers">
					<h4>Подзаголовок 2</h4>
					<p>Добавлена 03.03.2014</p>
					<div class="wrap">
						<div id="rating_2">
							<input type="hidden" class="val" value="1.75"/>
							<input type="hidden" class="votes" value="2"/>
						</div>
					</div>
				</div>
				<br/><br/><br/><br/>
				<div class="new">
					<img class="news_thumbnail" style="float:right;" src="img/thumb1.png" />
					<text>
						Many desktop publishing packages and web page editors now use 
						Lorem Ipsum as their default model text, and a search for 'lorem ipsum' 
						will uncover many web sites still in their infancy. Various versions have evolved over the years, 
						sometimes by accident, sometimes on purpose (injected humour and the like).
						Many desktop publishing packages and web page editors now use Lorem 
						Ipsum as their default model text, and a search for 'lorem ipsum' 
						will uncover many web sites still in their infancy. 
						Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, 
						and a search for 'lorem ipsum' will uncover many web sites still in their infancy.<br/>
						Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						Many desktop publishing packages and web page editors now use Lorem 
						Ipsum as their default model text, and a search for 'lorem ipsum' 
						will uncover many web sites still in their infancy.<br/>
						Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						Many desktop publishing packages and web page editors now use Lorem 
						Ipsum as their default model text, and a search for 'lorem ipsum' 
						will uncover many web sites still in their infancy.<br/>
						Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, 
						and a search for 'lorem ipsum' will uncover many web sites still in their infancy. 
						Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
					</text>
				</div>
			</div>
			<img class="divide_line" src="img/divide_line_hor.png" />
			<div class="comments">
				<h4>Комментарии</h4>
				<br/><br/><br/><br/><br/>
				<img class="avatar" src="img/avatar.png" />
				<p>Татьяна</p>
				<time>03.03.2014 в 15:45</time>
				<text>
					Спасибо за оказанную услугу. Все было сделано быстро и а качественно. Мы остались довольны вашим индивидуальным подходом и оперативностью. Все установленное программное обеспечение работает без ошибок и сбоев. Надеемся продолжить сотрудничество, так как надо еще установить ряд программ.
				</text>	
				<img class="avatar" src="img/avatar.png" />
				<p>Татьяна</p>
				<time>03.03.2014 в 15:45</time>
				<text>
					Спасибо за оказанную услугу. Все было сделано быстро и а качественно. Мы остались довольны вашим индивидуальным подходом и оперативностью. Все установленное программное обеспечение работает без ошибок и сбоев. Надеемся продолжить сотрудничество, так как надо еще установить ряд программ.
				</text>	
			</div>
		</div>	
		<div id="footer">
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