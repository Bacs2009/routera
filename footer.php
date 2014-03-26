<div id="footer" style="margin-top:5%;">
	<?php query_posts('category_name=Подвал'); ?>
	<?php if ( have_posts() ) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="new">
		<?php the_content(); // displays whatever you wrote in the wordpress editor?>
	</div>
	<?php endwhile; ?>
	<?php endif;?>
	<div class="cards">
		<span>©2014 Все права защищены</span>
		<img src="<?php bloginfo('template_url'); ?>/img/paypal.png" />
		<img src="<?php bloginfo('template_url'); ?>/img/mastercard.png" />
		<img src="<?php bloginfo('template_url'); ?>/img/visa.png" />
	</div>
</div>
</div>	
</body>
</html>
<?php wp_footer(); ?>