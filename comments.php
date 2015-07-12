<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 class="comments_headers"><a name="comments"><?php comments_number('No Comments Yet', '1 Comment', '% Comments' );?></a></h3>

	<ol class="commentlist">
	<?php wp_list_comments('callback=custom_comments'); ?>
	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<?php if ( $comment_author != "" ) : ?>
<script type="text/javascript">function setStyleDisplay(id, status){document.getElementById(id).style.display = status;}</script>
<?php printf(__('Hello, <strong>%s</strong>'), $comment_author) ?>

<span id="show_author_info"><a href="javascript:setStyleDisplay('author_info','');setStyleDisplay('show_author_info','none');setStyleDisplay('hide_author_info','');"><?php _e('Change &raquo;'); ?></a></span>
 
<span id="hide_author_info"><a href="javascript:setStyleDisplay('author_info','none');setStyleDisplay('show_author_info','');setStyleDisplay('hide_author_info','none');"><?php _e('Cancel &raquo;'); ?></a></span>
<?php endif; ?>

<div style="float:left;">
<div id="author_info">
<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="35" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />&nbsp;Name
<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="35" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />&nbsp;Mail
<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="35" tabindex="3" />&nbsp;Home
</div>

<font color=#880000>[Name and Mail is required. Mail won't be published.]</font><br />
</div>
<?php if ( $comment_author != "" ) : ?>
<script type="text/javascript">setStyleDisplay('hide_author_info','none');setStyleDisplay('author_info','none');</script>
<?php endif; ?>
<?php endif; ?>

<div style="float:left;margin-left:30px;"><textarea name="comment" id="comment" cols="100" rows="10" tabindex="4"></textarea>
<br />
<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<?php comment_id_fields(); ?>
</div>
<?php do_action('comment_form', $post->ID); ?>

</form>
<br clear="all" />
<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
