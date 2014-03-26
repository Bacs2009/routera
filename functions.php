<?php
function excerpt($limit) {
 if (preg_match("|<text>(.*)</text>|sei", get_the_content(), $arr))
  $arr = $arr[1];
  $excerpt = explode(' ', $arr, $limit);
  if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...';
  } else {
	$excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
	array_pop($content);
	$content = implode(" ",$content).'...';
  } else {
	$content = implode(" ",$content);
  } 
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

add_theme_support ('post-thumbnails'); // поддержка миниатюр
set_post_thumbnail_size (540, 230, false);

//Хлебные крошки
function the_breadcrumb() {
	echo '<div id="breadcrumb"><ul><li><a href="/">Главная</a></li><li>\</li>';
	 
	if ( is_category() || is_single() ) {
	$cats = get_the_category();
	$cat = $cats[0];
	echo '<li><a href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a></li><li>\</li>';
	}
	 
	if(is_single()){
	echo '<li>';
	the_title();
	echo '</li>';
	}
	 
	if(is_page()){
	echo '<li>';
	the_title();
	echo '</li>';
	}
	 
	echo '</ul><div class="clear"></div></div>';
}

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'New Sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));
	register_sidebar(array(
        'name' => 'Tariff1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));
	register_sidebar(array(
        'name' => 'Tariff2',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));
	register_sidebar(array(
        'name' => 'Tariff3',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));
	register_sidebar(array(
        'name' => 'Tariff4',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));
add_theme_support('menus');	

function the_breadcrumbs() {
echo '<div id="breadcrumb"><ul><li><a href="/">Главная</a></li><li>\</li>';
 
if ( is_category() || is_single() || is_search()) {
$cats = get_the_category();
$cat = $cats[0];
echo '<li><a href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a></li><li>\</li>';
}
 
if(is_single()){
echo '<li>';
the_title();
echo '</li>';
}
 
if(is_page()){
echo '<li>';
the_title();
echo '</li>';
}
 
echo '</ul><div class="clear"></div></div>';
}
?>