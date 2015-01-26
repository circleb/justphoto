<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package justphoto
 */
?>

	</div><!-- #content -->

</div><!-- #page -->

<div id="foot-widgets" class="widget-area" role="complementary">
    <div class="container">
    <div class="row">
        <?php dynamic_sidebar( 'footer-1' ); ?>
        <?php dynamic_sidebar( 'footer-2' ); ?>
        <?php dynamic_sidebar( 'footer-3' ); ?>
    </div>
    </div>
</div><!-- #foot-widgets -->

<footer id="colophon" class="footer site-footer container" role="contentinfo">
    <div class="site-info container">
        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'justphoto' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'justphoto' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( __( 'Theme: %1$s by %2$s.', 'justphoto' ), 'justphoto', '<a href="http://www.circlebphoto.com" rel="designer">Ben Owen</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
    
<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43164242-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>