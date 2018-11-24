<!-- Right Sidebar -->

<div class="col-md-3 magazine-page">
  <!-- Search Bar -->
  <div class="headline headline-md">
    <h2>Search</h2>
  </div>
  <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
		<?php dynamic_sidebar( 'home_right_1' ); ?>
  <?php endif; ?>
    
  <!-- Posts -->
  <div class="posts margin-bottom-40">
    <div class="headline headline-md">
      <h2>Recent Posts</h2>
    </div>
    <?php
						$args = array( 'numberposts' => '3' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<dl class="dl-horizontal">';
								//if ( has_post_thumbnail() ) {
									$small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts["ID"] ), 'small' );
								    echo '<dt><a href="#"><img src="'. $small_image_url[0] .'" alt="" /></a></dt>';

								//}
	                        	echo '<dd>';
                            echo '<p><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></p>'; 
                        	echo '</dd>';
                    		echo '</dl>';
                   		}
					?>
  </div>
  <!-- End Posts -->

  <!-- Blog Tags -->
  <div class="headline headline-md">
    <h2>Blog Tags</h2>
  </div>
  <ul class="list-unstyled blog-tags margin-bottom-30">
    <li>
      <?php wp_tag_cloud(''); ?>
    </li>
  </ul>
  <!-- End Blog Tags -->
  <!-- Blog Latest Tweets -->
  <div class="blog-twitter margin-bottom-30">
    <div class="headline headline-md">
      <h2>Latest Tweets</h2>
    </div>
    
     <a class="twitter-timeline" height=300  data-dnt="true" href="https://twitter.com/costa_cloud" data-widget-id="515079704965947392">Tweets by @costa_cloud</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
    <!--div class="blog-twitter-inner"> <i class="fa fa-twitter"></i> <a href="#">@htmlstream</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/sBav7dm</a> <span>5 hours ago</span> </div-->
  </div>
  <!-- End Blog Latest Tweets -->
</div>
<!-- End Right Sidebar -->
