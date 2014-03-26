<?php
/*
Template Name: Обслуживание
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
				if(function_exists('the_breadcrumbs'))
				{
					the_breadcrumbs();
				}
				?>
			</div>
			<div class="tune_headers">
				<?php while (have_posts()) : the_post(); ?>
				<h1><?php echo get_the_title(); ?></h1>
				<img class="divide_line" src="<?php bloginfo('template_url'); ?>/img/divide_line_hor.png" />
			</div>
			<div class="news_body">
				<div class="new">
					<?php the_content(); // displays whatever you wrote in the wordpress editor?>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="after-reklama">
				<?php query_posts('p=150&paged='.$paged); ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="after-reklama-block">
					<?php the_content(); // displays whatever you wrote in the wordpress editor?>
					<div class="img-block">
						<img class="after-reklama-img" src="<?php bloginfo('template_url'); ?>/img/first.png" />
						<img class="after-reklama-img" src="<?php bloginfo('template_url'); ?>/img/second.png" />
						<img class="after-reklama-img" src="<?php bloginfo('template_url'); ?>/img/three.png" />
					</div>	
				</div>
				<?php endwhile; ?>
			</div>
		</div>
<?php get_footer(); ?>