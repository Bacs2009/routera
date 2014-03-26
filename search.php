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
			<h1><?php echo 'Результат поиска: ' . '<span>' . get_search_query() . '</span>'; ?></h1>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <div id="posts">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                    <div id="post_info">
                        <div>Автор: <?php the_author() ?></div>
                        <div>Дата добавления: <?php the_date() ?></div>
                        <div id="clear"></div>
                    </div>
                    <p><?php the_excerpt() ?></p>
                    <span>Категория: <?php the_category(', ') ?></span>
                </div>
				<img class="divide_line" src="<?php bloginfo('template_url'); ?>/img/divide_line_hor.png" />
            <?php endwhile; ?>
			<?php if(function_exists('wp_paginate')) {
			wp_paginate();
			} ?>
        <?php
        else :
            echo "Извините по Вашему результату ничего не найдено";
        endif;
        ?>
		</div>
<?php get_footer(); ?>