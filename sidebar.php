<div id="sidebar2" style="background-image:url(<?php bloginfo('template_url'); ?>/img/divide_line.png);">
	<h2>НОВОСТИ</h2><img class="news_icon" src="<?php bloginfo('template_url'); ?>/img/news_icon.png" />
	<?php query_posts('category_name=Новости&showposts=3'); ?>
	<?php while (have_posts()) : the_post(); ?>
	<h4><?php echo get_the_date( 'Y-m-d' ); ?></h4>
	<a href="<?php the_permalink(); ?>">
	<p><?php echo excerpt(15); ?></p>
	</a>
	<?php endwhile; ?>
	
	
	<img class="rekl_block" src="<?php bloginfo('template_url'); ?>/img/rekl_block.png" />
</div>