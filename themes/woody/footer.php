<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Woody
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-columns">
			<div class="footer-column">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div><!-- .footer-column -->
			<div class="footer-column">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div><!-- .footer-column -->
			<div class="footer-column">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div><!-- .footer-column -->
			<div class="footer-column">
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</div><!-- .footer-column -->
		</div><!-- .footer-columns -->
		<div class="clearfix"></div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'woody' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'woody' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'woody' ), 'woody', '<a href="http://juliekuehl.com" rel="designer">Julie Kuehl</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
