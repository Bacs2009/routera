<?php get_header(); ?>
<body>
	<div id="pagewrap">
		<div id="header">
			<a href="<?php echo home_url();?>"><div id="logo"></div></a>
			<div class="search">
			<form>
				<input type="twxt" placeholder="Поиск" name="pwd">
				<button id="bar" type="submit"><img src="<?php bloginfo('template_url'); ?>/img/search.png" /></button>
			</form>
			</div>
			<div class="top_menu">
				<ul>
					<li><a href="<?php echo home_url('/poddergka');?>">Удаленная поддержка</a></li>
					<li><a href="<?php echo home_url('/obsluguvanie');?>">Обслуживание</a></li>
					<li><a href="<?php echo home_url('/cena');?>">Цены</a></li>
					<li><a href="<?php echo home_url('/contact');?>">Контакты</a></li>
				</ul>
			</div>
			<!--Слайдер-->
			<div id="sm_slider">
				<ul>
					<li>
						<div class="slide1">
							<img src="<?php bloginfo('template_url'); ?>/img/slide1.png" />
							<div class="description">
								<h2>Подробное описание</h2>
								<h3>установки и настройка роутера</h3>
								<p>Итак, как работает WI FI и какие плюсы он нам даёт. Например, представим что у нас есть в наличии два ноутбука с встроенным адаптером беспроводной сети (WIFI), кабель Ethernet (RJ-45) от провайдера интернета.</p>
								<text>В данном случае конечно было бы удобно чтобы ноутбуки небыли привязаны к определённому месту, где располагается кабель с поступающим Интернетом, а можно было их перемещать по квартире, офису в любое место. Итак чтобы всё это заработало нам необходимо иметь в наличии WIFI Router (маршрутизатор) с поддержкой NAT. Маршрутизатор – сетевое устройство, на основании информации о топологии сети и определённых правил, принимающее решения о пересылке пакетов сетевого уровня между различными сегментами сети.</text>
								<img src="<?php bloginfo('template_url'); ?>/img/podrobnee.png" />
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
		<?php get_sidebar(); ?>
		<div id="content" style="height:430px;">
			<?php query_posts('category_name=Главная страница&showposts=1'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();     
			  echo content(250); // displays whatever you wrote in the wordpress editor
			  endwhile; endif; //ends the loop
			?>
		</div>
		<div id="middle">
			<div class="links">
				<img class="podlozhka_link" src="<?php bloginfo('template_url'); ?>/img/podlozhka_link1.png" />
				<a href="#">Вызов мастера</a>
				<img class="" src="<?php bloginfo('template_url'); ?>/img/podlozhka_link2.png" />
				<a href="#">Бесплатная консультация</a>
			</div>	
		</div>
<?php get_footer('main'); ?>