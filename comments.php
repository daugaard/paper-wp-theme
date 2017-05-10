<?php if ( post_password_required() ) {
	return;
} ?>
<hr/>
<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h4 class="comments-title">
			<?php
			printf( _nx( 'One comment', '%1$s comments', get_comments_number()),	number_format_i18n( get_comments_number() ) );
			?>
		</h4>
		<ul class="comment-list">
			<?php
			wp_list_comments( array(
				'short_ping'  => true,
				'avatar_size' => 50,
			) );
			?>
		</ul>
	<?php endif; ?>
	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments">
			<?php _e( 'Comments are closed.' ); ?>
		</p>
	<?php endif; ?>
	<?php

  $fields =  array(
    'author' =>
      '<div class="form-group">
      <label for="author" class="col-lg-2 control-label">' . __( 'Name', 'domainreference' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="author" name="author" placeholder="' . __( 'Name', 'domainreference' ) . '" value="' . esc_attr(  $commenter['comment_author'] ) .'" '. $aria_req . '>
      </div>
    </div>',

    'email' =>
      '<div class="form-group">
      <label for="email" class="col-lg-2 control-label">' . __( 'Email', 'domainreference' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="email" name="email" placeholder="' . __( 'Email', 'domainreference' ) . '" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" ' . $aria_req . ' >
      </div>
    </div>',

    'url' =>
      '<div class="form-group">
      <label for="url" class="col-lg-2 control-label">' . __( 'Website', 'domainreference' ) . '</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="url" name="url" placeholder="' . __( 'Website', 'domainreference' ) . '" value="' . esc_attr(  $commenter['comment_author_url'] ) .'" >
      </div>
    </div>',
  );


   comment_form( array(
    'class_submit' => 'btn btn-primary comment-submit-button',
    'comment_field' =>  '<div class="form-group">
      <label for="comment" class="col-lg-2 control-label">' . _x( 'Comment', 'noun' ) .'</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="8" id="comment" name="comment" aria-required="true"></textarea>
        <span class="help-block"></span>
      </div>
    </div>',
    'fields' => apply_filters( 'comment_form_default_fields', $fields )
) ); ?>
</div>
