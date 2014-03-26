<div class="comments">
<h4>Комментарии</h4>
<br/><br/><br/><br/><br/>
<?php // Do not delete these lines
     if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
     die ('Please do not load this page directly. Thanks!');

     if ( post_password_required() ) { ?>
             <p>This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
		/* This variable is for alternating comment background */
$oddcomment = 'alt';
if ( have_comments() ) : ?>

<?php foreach ($comments as $comment) : ?>
<div class="com">
	<div class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">

	<?php echo get_avatar( $comment, $size = '55'); ?>

	<p>
	<a href="<?php comment_author_url(); ?>" class="author">
	<?php comment_author(); ?>
	</a>
	</p> 

	<div class="add-date"><?php comment_date('j.n.Y') ?>
	в <?php comment_time() ?>
	</div>
	<?php edit_comment_link('Изменить','',''); ?>

	<?php if ($comment->comment_approved == '0') : ?>
	<em><?php _e('Ваш комментарий отправлен на проверку модератору.'); ?></em>
	<?php endif; ?>
	</div>


	<div class="comment-text"><?php comment_text(); ?></div>
</div>	
<?php /* Changes every other comment to a different class */
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt';
?>

<?php endforeach; /* end for each comment */ ?>

<?php previous_comments_link() ?>
<?php next_comments_link() ?>

<?php else : echo "Коментариев пока нет"; ?>

	<?php if ('open' == $post->comment_status) : ?>
	 <?php else : // comments are closed ?>
		<p>Comments are closed.</p>
	<?php endif; ?>

<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>
<img class="divide_line" src="<?php bloginfo('template_url'); ?>/img/divide_line_hor.png" />

<!--ФОРМА ВВОДА-->

<div id="respond">

<h2>
<?php comment_form_title( 'Оставьте комментарий', 'Оставьте комментарий на %s' ); ?>
</h2>

<div class="cancel-comment-reply">
<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Вы должны быть <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">залогинены</a> , чтобы оставить комментарий.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<?php echo get_avatar( $comment, $size = '55'); ?>
<p>Вы вошли, как: <a class="author-user" href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a class="author-logout" href="<?php echo wp_logout_url(get_permalink()); ?>" title="Выйти из аккаунта">Выйти</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><small>Имя <?php if ($req) echo ""; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><small>Email (не опубликован) <?php if ($req) echo ""; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Сайт</small></label></p>

<?php endif; ?>

<p>
<textarea name="comment" id="comment" cols="50%" rows="10" tabindex="4">
</textarea>
</p>

<p>
<input class="form_button_submit" name="submit" type="image" src="<?php bloginfo('template_url'); ?>/img/form_send_button.png" id="submit" tabindex="5" value="Submit" />
   <?php comment_id_fields(); ?>
</p>
   <?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<!--ФОРМА ВВОДА-->

<?php endif; ?>
</div>


<!--
<h4>Комментарии</h4>
<br/><br/><br/><br/><br/>
<img class="avatar" src="img/avatar.png" />
<p>Татьяна</p>
<time>03.03.2014 в 15:45</time>
<text>
	
</text>
	-->