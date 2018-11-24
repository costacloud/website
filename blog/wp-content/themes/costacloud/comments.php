<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>

<div class="media">
  <?php if ( have_comments() ) : ?>
    <h3>Comments</h3>
  <a class="pull-left" href="#"> <img class="media-object" src="../../assets/img/sliders/elastislide/2.jpg" alt="" /> </a>
  <div class="media-body">
    <h4 class="media-heading">
      <?php
			printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'costacloud' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
		?>
    </h4>
    <p>
      <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
      <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
    <h1 class="screen-reader-text">
      <?php _e( 'Comment navigation', 'costacloud' ); ?>
    </h1>
    <div class="nav-previous">
      <?php previous_comments_link( __( '&larr; Older Comments', 'costacloud' ) ); ?>
    </div>
    <div class="nav-next">
      <?php next_comments_link( __( 'Newer Comments &rarr;', 'costacloud' ) ); ?>
    </div>
    </nav>
    <!-- #comment-nav-above -->
    <?php endif; // Check for comment navigation. ?>
    <ol class="comment-list">
      <?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
				'avatar_size'=> 34,
			) );
		?>
    </ol>
    <!-- .comment-list -->
    </p>
    <hr>
  </div>
  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
  <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
    <h1 class="screen-reader-text">
      <?php _e( 'Comment navigation', 'costacloud' ); ?>
    </h1>
    <div class="nav-previous">
      <?php previous_comments_link( __( '&larr; Older Comments', 'costacloud' ) ); ?>
    </div>
    <div class="nav-next">
      <?php next_comments_link( __( 'Newer Comments &rarr;', 'costacloud' ) ); ?>
    </div>
  </nav>
  <!-- #comment-nav-below -->
  <?php endif; // Check for comment navigation. ?>
  <?php endif; // have_comments() ?>
  
  
  
  <?php 
  
  $args = array(
  'id_form'           => 'commentform',
  'title_reply'       => __( 'Leave a Comment' ),
  'title_reply_to'    => __( 'Leave a Reply to %s' ),
  'cancel_reply_link' => __( 'Cancel Comment' ),
  'label_submit'      => __( 'Post Comment' ),
);
  
  comment_form($args); 
  
  ?>
  
</div>
<!--/media-->
<!-- End Recent Comments -->