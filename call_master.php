<?php
session_start();
$cap = 'notEq';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['captcha'] == $_SESSION['cap_code']) {
        // Captcha verification is Correct. Do something here!
        $cap = 'Eq';
    } else {
        // Captcha verification is wrong. Take other action
        $cap = '';
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Вызов мастера</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700italic&subset=cyrillic-ext' rel='stylesheet' type='text/css'>
<!-- jQuery library (served from Google) -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!-- Slider Javascript file -->
<script src="js/jquery.smslider.js"></script>
<!-- Slider CSS file -->
<link href="css/smslider.css" rel="stylesheet" />
<script src="js/jquery.mb.browser.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#sm_slider').smSlider();
	/* $(function() {
		$( ".call_master" ).draggable({
			handle: ".header_call_master_form",
			containment:"document",
			opacity: 0.35,
			cursor: "move"
		});
	}); */
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('#submit').click(function(){
		var name = $('#name').val();
		var msg = $('#msg').val();
		var captcha = $('#captcha').val();
		
		if( name.length == 0){
			$('#name').addClass('error');
		}
		else{
			$('#name').removeClass('error');
		}

		if( msg.length == 0){
			$('#msg').addClass('error');
		}
		else{
			$('#msg').removeClass('error');
		}

		if( captcha.length == 0){
			$('#captcha').addClass('error');
		}
		else{
			$('#captcha').removeClass('error');
		}
		
		if(name.length != 0 && msg.length != 0 && captcha.length != 0){
			return true;
		}
		return false;
	});

	var capch = '<?php echo $cap; ?>';
	if(capch != 'notEq'){
		if(capch == 'Eq'){
			$('.cap_status').html("Your form is successfully Submitted ").fadeIn('slow').delay(3000).fadeOut('slow');
		}else{
			$('.cap_status').html("Human verification Wrong!").addClass('cap_status_error').fadeIn('slow');
		}
	}
});
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
		<div id="sidebar">
			<div class="button_call_master"></div>
			<div class="button_free_consult"></div>
			<h2>НОВОСТИ</h2><img class="news_icon" src="img/news_icon.png" />
			<h4>01.01.2014</h4>
			<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
			<h4>01.01.2014</h4>
			<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
			<h4>01.01.2014</h4>
			<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
		</div>
		<div id="content">
			<div class="call_master">
				<div class="header_call_master_form">Вызов мастера</div>
				<form action="call_master.php" id="callForm" method="post">
					<input type="text" id="name" name="name" placeholder="Ваше имя"/><br>
					<input type="phone" id="phone" name="phone" placeholder="Ваш телефон"/><br>
					<input type="email" id="email" name="email" placeholder="Ваш e-mail"/><br>
					<textarea rows="4" cols="30" id="msg" name="msg" placeholder="Описание проблемы"/></textarea>
					<div class="testcode">Проверочный код</div>
					<div class="imgcaptcha"><img src="captcha.php"/></div>
					<input class="capcha" id="captcha" type="captcha" name="captcha" maxlength="6"><br>
					<button id="submit" type="submit" value="submit" class="submitForm" />
				</form>
			</div>
		</div>
		 <div class="cap_status"></div>
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