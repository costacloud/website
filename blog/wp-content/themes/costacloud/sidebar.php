<!-- Right Sidebar -->

<div class="col-md-3">
  <!-- Social Icons -->
  <div class="magazine-sb-social margin-bottom-30">
    <div class="headline headline-md">
      <h2>Social Icons</h2>
    </div>
    <ul class="social-icons social-icons-color">
      <li><a class="social_rss" data-original-title="Feed" href="feed/"></a></li>
      <li><a class="social_facebook" data-original-title="Facebook" href="http://facebook.com/costacloud"></a></li>
      <li><a class="social_twitter" data-original-title="Twitter" href="https://twitter.com/costa_cloud"></a></li>
      <li><a class="social_vimeo" data-original-title="Vimeo" href="#"></a></li>
      <li><a class="social_googleplus" data-original-title="Goole Plus" href="#"></a></li>
      <li><a class="social_pintrest" data-original-title="Pinterest" href="http://www.pinterest.com/costacloud/"></a></li>
      <li><a class="social_linkedin" data-original-title="Linkedin" href="https://www.linkedin.com/in/costacloud"></a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!-- End Social Icons -->
  
  <!-- Search Bar -->
  <div class="headline headline-md">
    <h2>Search</h2>
  </div>
  <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
		<?php dynamic_sidebar( 'home_right_1' ); ?>
  <?php endif; ?>
  <!-- End Search -->
  
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
  
  <!-- Photo Stream -->
  <div class="headline headline-md">
    <h2>Photo Stream</h2>
  </div>
  <ul class="list-unstyled blog-photos margin-bottom-30">
    <li><a href="#"><img class="hover-effect" alt="" src="<?php echo home_url();?>/../assets/img/sliders/elastislide/5.jpg"></a></li>
    <li><a href="#"><img class="hover-effect" alt="" src="<?php echo home_url();?>/../assets/img/sliders/elastislide/6.jpg"></a></li>
    <li><a href="#"><img class="hover-effect" alt="" src="<?php echo home_url();?>/../assets/img/sliders/elastislide/8.jpg"></a></li>
    <li><a href="#"><img class="hover-effect" alt="" src="<?php echo home_url();?>/../assets/img/sliders/elastislide/10.jpg"></a></li>
    <li><a href="#"><img class="hover-effect" alt="" src="<?php echo home_url();?>/../assets/img/sliders/elastislide/11.jpg"></a></li>
    <li><a href="#"><img class="hover-effect" alt="" src="<?php echo home_url();?>/../assets/img/sliders/elastislide/1.jpg"></a></li>
    <li><a href="#"><img class="hover-effect" alt="" src="<?php echo home_url();?>/../assets/img/sliders/elastislide/2.jpg"></a></li>
    <li><a href="#"><img class="hover-effect" alt="" src="<?php echo home_url();?>/../assets/img/sliders/elastislide/7.jpg"></a></li>
  </ul>
  <!-- End Photo Stream -->
</div>
<!-- End Right Sidebar -->
