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
		<?php get_sidebar('left'); ?>
		<div id="content" style="margin-left:6em;">
			<?php query_posts('pagename=cena&showposts=3'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
			  the_content(); // displays whatever you wrote in the wordpress editor
			  endwhile; endif; //ends the loop
			?>
		</div>
<?php get_footer(); ?>