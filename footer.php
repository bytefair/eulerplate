<?php
/**
 * @package WordPress
 * @subpackage Eulerplate
 */
?>

  <footer>
      <p>
        <?php bloginfo('name'); ?> is proudly powered by
        <a href="http://wordpress.org/">WordPress</a>, and built using <a href="http://github.com/bytefair/eulerplate">Eulerplate</a>.
        <br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
        and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
        <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
      </p>
  </footer>
</div> <!--! end of #container -->


<!-- JavaScript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write(<?php wp_deregister_script('jquery'); wp_enqueue_script( 'jquery', get_template_directory_uri().'/html5-boilerplate/js/libs/jquery-1.7.1.js' ); ?>)</script>

<!-- scripts concatenated and minified via build script -->
<?php wp_enqueue_script( 'jquery-plugins', get_template_directory_uri().'/html5-boilerplate/js/plugins.js', array('jquery'), '0'); ?>
<?php wp_enqueue_script( 'jquery-script', get_template_directory_uri().'/html5-boilerplate/js/script.js', array('jquery'), '0'); ?>
<!-- end scripts -->

<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
		 mathiasbynens.be/notes/async-analytics-snippet, uncomment to use
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

-->

  <?php wp_footer(); ?>

</body>
</html>
