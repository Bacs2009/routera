<?php get_header(); ?>
<body>
	<div id="pagewrap">
		<div id="header">
			<a href="<?php echo home_url();?>"><div id="logo"></div></a>
			<?php get_search_form(); ?>
			<!--Верхнее меню-->
			<?php include(TEMPLATEPATH.'/top_menu.php'); ?>
			<!--Верхнее меню-->
			<!--Слайдер-->
			<!--Слайдер-->
			<?php include(TEMPLATEPATH.'/slider.php'); ?>
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
				<a href="<?php echo home_url('/callback');?>">Вызов мастера</a>
				<img class="" src="<?php bloginfo('template_url'); ?>/img/podlozhka_link2.png" />
				<a href="<?php echo home_url('/consult');?>">Бесплатная консультация</a>
			</div>	
		</div>
<?php get_footer('main'); ?>