<?php 

	$fields =  array(
		'author' =>
		'<div class="uk-grid" style="margin-top: 30px;"><div class="uk-width-small-2-10"><p class="comment-form-author"><label class="label-inline" for="author"><i class="uk-icon-smile-o"></i> ' . __( 'Name', 'domainreference' ) . '</label>' .
		( $req ? ' <span class="required">*</span>' : '' ) .
		'</div><div class="uk-width-small-8-10"><input class="uk-form-large" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30"' . $aria_req . ' /></div></div>',
		'email' =>
		'<div class="uk-grid" style="margin-top: 15px;"><div class="uk-width-small-2-10"><p class="comment-form-email"><label class="label-inline" for="email"><i class="uk-icon-envelope-o"></i> ' . __( 'Email', 'domainreference' ) . '</label> ' .
		( $req ? '<span class="required">*</span>' : '' ) .
		'</div><div class="uk-width-small-8-10"><input class="uk-form-large" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		'" size="30"' . $aria_req . ' /></div></div>',
	);

	$form_args = array(
	  'id_form'           => 'commentform',
	  'id_submit'         => 'submit',
	  'class_submit'      => 'submit',
	  'name_submit'       => 'submit',
	  'title_reply'       => __( 'แสดงความคิดเห็นของคุณที่นี่' ),
	  'title_reply_to'    => __( 'ตอบกลับไปยัง %s' ),
	  'cancel_reply_link' => __( 'ยกเลิกการตอบ' ),
	  'label_submit'      => 'ส่งความเห็น',
	  'format'            => 'xhtml',

	  'comment_field' =>  '<p class="comment-form-comment"><label for="comment" class="uk-form-label"><i class="uk-icon-comment-o"></i> ' . _x( 'Comment', 'noun' ) .
	    '</label><textarea id="comment" class="uk-form-controls uk-width-1-1" name="comment" cols="45" rows="8" aria-required="true">' .
	    '</textarea></p>',

	  'must_log_in' => '<p class="must-log-in">' .
	    sprintf(
	      __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
	      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
	    ) . '</p>',

	  'logged_in_as' => '<p class="logged-in-as"><i class="uk-icon-user"></i> ' .
	    sprintf(
	    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">คลิกที่นี่ เพื่อออกจากระบบ</a>' ),
	      admin_url( 'profile.php' ),
	      $user_identity,
	      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
	    ) . '</p>',

	  'comment_notes_before' => '',
	  'comment_notes_after' => '',
	  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
	);

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title"> <i class="uk-icon-comments-o"></i> ความคิดเห็นจากบุคคลอื่นๆ
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfifteen' ); ?></h2>
				<div class="nav-links">
					<?php
						if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'twentyfifteen' ) ) ) :
							printf( '<div class="nav-previous">%s</div>', $prev_link );
						endif;

						if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'twentyfifteen' ) ) ) :
							printf( '<div class="nav-next">%s</div>', $next_link );
						endif;
					?>
				</div><!-- .nav-links -->
			</nav><!-- .comment-navigation -->
		<?php	endif; ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 32,
				) );
			?>
		</ol><!-- .comment-list -->
		
	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfifteen' ); ?></p>
	<?php endif; ?>

	<?php comment_form($form_args); ?>

</div>