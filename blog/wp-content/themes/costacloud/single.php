<?php get_header(); ?>
<!--=== Breadcrumbs ===-->

<div class="breadcrumbs">
  <div class="container">
    <h1 class="pull-left">CostaCloud Blog</h1>
    <ul class="pull-right breadcrumb">
      <li><a href="<?php echo home_url();?>/../index.html">Home</a></li>
      <li><a href="<?php echo home_url();?>">CostaCloud Blog</a></li>
      <li class="active"><?php the_title(); ?></li>
    </ul>
  </div>
</div>
<!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->
<!--=== Content Part ===-->
<div class="container content">
  <div class="row blog-page blog-item">
    <!-- Left Sidebar -->
    <div class="col-md-9 md-margin-bottom-60">
      <!--Blog Post-->
      <div class="blog margin-bottom-40">
        <h2><a href="blog_item_option1.html">
          <?php the_title(); ?>
          </a></h2>
        <div class="blog-post-tags">
          <ul class="list-unstyled list-inline blog-info">
            <li><i class="fa fa-calendar"></i>
              <?php the_time('F jS, Y') ?>
            </li>
            <li><i class="fa fa-comments"></i> <a href="#">
              <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?>
              </a></li>
          </ul>
          <ul class="list-unstyled list-inline blog-tags">
            <li> <i class="fa fa-tags"></i> <a href="#">
              <?php the_tags(); ?>
              </a> </li>
          </ul>
        </div>
        <div class="blog-img"> 
        <?php 
			if ( has_post_thumbnail() ) {
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
				echo '<img class="img-responsive" src="'. $large_image_url[0] .'" alt=""/>';
			}
		?>
        </div>
        <p>
          <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					$format = get_post_format();
					if ( false === $format ) {
						$format = 'page';
					}
					
					//get_template_part( 'content', $format );
					 echo '<p>' . the_content() .'</p><br>';

					// Previous/next post navigation.
					//twentyfourteen_post_nav();

					
				endwhile;
			?>
        </p>
      </div>
      <!--End Blog Post-->
      <hr>
      <!-- Recent Comments -->
      <?php 
					//If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
				} ?>
      <hr>
    </div>
    <!-- End Left Sidebar -->
      <?php get_sidebar('single'); ?>
  </div>
  <!--/row-->
</div>
<!--/container-->
<!--=== End Content Part ===-->
<?php get_footer(); ?>
