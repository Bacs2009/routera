<?php
/*
Template Name: Страница новостей
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
		<div id="newscontent" style="margin-left:26%;">
			<div class="breadcrumbs">
				<?php
				if(function_exists('bcn_display'))
				{
					bcn_display();
				}
				?>
			</div>
			<div class="news_headers">
				<h2>НОВОСТИ</h2><img class="news_icon" src="<?php bloginfo('template_url'); ?>/img/news_icon.png" />
			</div>
			<div class="news-page-body">
			
				<!--Блок, отвечающий за правильное отображение пагинации, если используется query_posts-->
				<?php if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
				elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
				else { $paged = 1; } ?>
				<!--Блок, отвечающий за правильное отображение пагинации, если используется query_posts-->
				
				<?php query_posts('category_name=Новости&paged='.$paged); ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="new-page">
					<p class="data">Добавлена: <?php echo get_the_date( 'Y-m-d' ); ?></p>
					<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
					<?php echo content(200); // displays whatever you wrote in the wordpress editor?>
					<a id="more" href="<?php the_permalink() ?>" title="<?php the_title(); ?>" >Читать полностью</a>
				</div>
				<img class="divide_line" src="<?php bloginfo('template_url'); ?>/img/divide_line_hor.png" />
				<?php endwhile; ?>
				<?php if(function_exists('wp_paginate')) {
				wp_paginate();
				} ?>
			</div>
		</div>
<?php get_footer(); ?>