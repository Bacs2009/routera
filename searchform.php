<div class="search">
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" placeholder="Поиск" maxlength="20" name="s" id="s">
		<button id="bar" type="submit" name="submit"><img src="<?php bloginfo('template_url'); ?>/img/search.png" /></button>
	</form>
</div>