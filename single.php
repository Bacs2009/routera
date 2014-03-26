<?php
/*
Template Name: Страница обслуживания
*/
?>
<?php get_header(); ?>
<body>
	<div id="pagewrap">
		<div id="header">
			<a href="<?php echo home_url('/');?>"><div id="logo"></div></a>
			<?php get_search_form(); ?>
			<!--Верхнее меню-->
			<?php include(TEMPLATEPATH.'/top_menu.php'); ?>
			<!--Верхнее меню-->
			<!--Слайдер-->
			<?php include(TEMPLATEPATH.'/slider.php'); ?>
			<!--Слайдер-->
		</div>
		<div id="newscontent">
			<div class="breadcrumbs">
				<?php
				if(function_exists('bcn_display'))
				{
					bcn_display();
				}
				?>
			</div>
			<div class="news_headers" id="sing">
				<h1>НОВОСТИ</h1><img class="news_icon" src="<?php bloginfo('template_url'); ?>/img/news_icon.png" />
				<img class="divide_line" src="<?php bloginfo('template_url'); ?>/img/divide_line_hor.png" />
				<?php while (have_posts()) : the_post(); ?>
				<p class="data">Добавлена: <?php echo get_the_date( 'Y-m-d' ); ?></p>
				<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
				<?php endwhile; ?>
			</div>
			<div class="news_body">
				<?php while (have_posts()) : the_post(); ?>
				<div class="new">
					<?php the_content(); // displays whatever you wrote in the wordpress editor?>
				</div>
				<?php endwhile; ?>
			</div>
			<img class="divide_line" src="<?php bloginfo('template_url'); ?>/img/divide_line_hor.png" />
			<?php while (have_posts()) : the_post(); ?>
			  <?php comments_template(); ?>
			<?php endwhile; ?>
		</div>
<?php get_footer(); ?>