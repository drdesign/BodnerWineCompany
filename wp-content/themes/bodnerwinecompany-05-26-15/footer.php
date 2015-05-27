<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bodnerWineCompany-05-26-15
 */
?>
			</div><!-- #content -->
		</div><!-- .wrapper-->
	</div><!-- .container -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="wrapper">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'bodnerwinecompany-05-26-15' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bodnerwinecompany-05-26-15' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bodnerwinecompany-05-26-15' ), 'bodnerwinecompany-05-26-15', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
				</div><!-- .site-info -->
			</div><!--.wrapper-->
		</div><!--.container-->	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
