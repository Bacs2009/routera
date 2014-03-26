<?php
/*
Template Name: Другая
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
		<?php get_sidebar('else'); ?>
		<div id="content-else">
			<?php query_posts('pagename=obsluguvanie&showposts=1'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
			  the_content(); // displays whatever you wrote in the wordpress editor
			  endwhile; endif; //ends the loop
			?>
		</div>
		<div class="after-content">
			<div class="after-content-in">
				<br/>
				<div class="tariff">
					<div class="tariff-name"></div>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Tariff1") ) : ?>
					<?php endif; ?>
					<div class="more"></div>
				</div>
				<div class="tariff">
					<div class="tariff-name"></div>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Tariff2") ) : ?>
					<?php endif; ?>
					<div class="more"></div>
				</div>
				<div class="tariff">
					<div class="tariff-name"></div>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Tariff3") ) : ?>
					<?php endif; ?>
					<div class="more"></div>
				</div>
				<div class="tariff">
					<div class="tariff-name"></div>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Tariff4") ) : ?>
					<?php endif; ?>
					<div class="more"></div>
				</div>
			</div>
		</div>
		<div class="after-content-text">
			<?php query_posts('p=143&showposts=1'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
			  echo content(300); // displays whatever you wrote in the wordpress editor
			  endwhile; endif; //ends the loop
			?>
		</div>
<?php get_footer(); ?>