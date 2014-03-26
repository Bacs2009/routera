<div id="sidebar">
	<a href="<?php echo home_url('/callback');?>"><div class="button_call_master"></div></a>
	<a href="<?php echo home_url('/consult');?>"><div class="button_free_consult"></div></a>
	<h2>НОВОСТИ</h2><img class="news_icon" src="<?php bloginfo('template_url'); ?>/img/news_icon.png" />
	<?php query_posts('category_name=Новости&showposts=5'); ?>
	<?php while (have_posts()) : the_post(); ?>
	<h4><?php echo get_the_date( 'Y-m-d' ); ?></h4>
	<a href="<?php the_permalink(); ?>">
	<p><?php echo excerpt(15); ?></p>
	</a>
	<?php endwhile; ?>
</div>