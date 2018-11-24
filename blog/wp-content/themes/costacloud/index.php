<?php 

	get_header();
   
   /**
 	 * Display navigation to next/previous set of posts when applicable.
 	 *
 	 * @since Twenty Fourteen 1.0
 	 *
 	 * @global WP_Query   $wp_query   WordPress Query object.
 	 * @global WP_Rewrite $wp_rewrite WordPress Rewrite object.
 	 */
  function costacloud_paging_nav() {
	global $wp_query, $wp_rewrite;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $wp_query->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&larr; Previous', 'costacloud' ),
		'next_text' => __( 'Next &rarr;', 'costacloud' ),
	) );

	if ( $links ) :

	?>
<!--Pagination-->
<div class="text-center">
  <ul class="pagination">
    <li><a href="#"> <?php echo $links; ?></a></li>
  </ul>
</div>
<!--End Pagination-->
<?php endif;
}
?>
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
  <div class="container">
    <h1 class="pull-left">CostaCloud Blog</h1>
    <ul class="pull-right breadcrumb">
      <li><a href="<?php echo home_url();?>/../index.html">Home</a></li>
      <li class="active">CostaCloud Blog</li>
    </ul>
  </div>
</div>
<!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->
<!--=== Content Part ===-->
<div class="container content">
  <div class="row blog-page">
    <!-- Left Sidebar -->
    <div class="col-md-9 md-margin-bottom-40">
      <?php 
	    if (have_posts()) : 
			while (have_posts()) : the_post(); 
		
		?>
      <!--Blog Post-->
      <div class="row blog blog-medium margin-bottom-40">
        <div class="col-md-5"> 
         <?php 
			if ( has_post_thumbnail() ) {
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
				echo '<img class="img-responsive" src="' . $large_image_url[0] . '" alt=""/>';
			}
		?>
        
        </div>
        
        <div class="col-md-7">
          <h2>
            <?php the_title(); ?>
          </h2>
          <ul class="list-unstyled list-inline blog-info">
            <li><i class="fa fa-calendar"></i>
              <?php the_time('F jS, Y') ?>
            </li>
            <li><i class="fa fa-comments"></i> <a href="#"> <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a></li>
            <li><i class="fa fa-tags"></i> <?php the_tags(); ?></li>
          </ul>
          <p>
            <?php the_content(__('<span class="btn-u btn-u-small"><i class="fa fa-location-arrow"></i> Read More</span>')); ?>
          </p>
          <!--p><a class="btn-u btn-u-small" href="../blog_item.html"><i class="fa fa-location-arrow"></i> Read More</a></p-->
        </div>
      </div>
      <hr class="margin-bottom-40">
      <!--End Blog Post-->
      <?php endwhile; else: ?>
      <p>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
      </p>
      <?php endif; ?>
      <?php costacloud_paging_nav(); ?>
    </div>
    <!-- End Left Sidebar -->
    <?php get_sidebar(); ?>
  </div>
  <!--/row-->
</div>
<!--/container-->
<!--=== End Content Part ===-->
<?php get_footer(); ?>
