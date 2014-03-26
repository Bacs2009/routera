<?php
/*
Template Name: Вызов мастера
*/
?>
<?php get_header(); ?>
<body>
	<div id="pagewrap">
		<div id="header">
			<a href="<?php echo home_url('/');?>"><div id="logo"></div></a>
			<?php get_search_form(); ?>
			<div class="top_menu">
				<ul>
					<li><a href="<?php echo home_url('/poddergka');?>">Удаленная поддержка</a></li>
					<li><a href="<?php echo home_url('/obsluguvanie');?>">Обслуживание</a></li>
					<li><a href="<?php echo home_url('/cena');?>">Цены</a></li>
					<li><a href="<?php echo home_url('/contact');?>">Контакты</a></li>
				</ul>
			</div>
			<!--Слайдер-->
			<?php include(TEMPLATEPATH.'/slider.php'); ?>
			<!--Слайдер-->
		</div>
		<?php get_sidebar('left'); ?>
		<div id="content">
			<?php query_posts('pagename=callback&showposts=3'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
			  the_content(); // displays whatever you wrote in the wordpress editor
			  endwhile; endif; //ends the loop
			?>
		</div>
<?php get_footer(); ?>