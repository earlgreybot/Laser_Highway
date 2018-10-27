<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Laser_Highway
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class=" container site-footer">
		<div class='row'>
			<div class="site-info col-md-8">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Laser Highway' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'Laser Highway' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | 
					</span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'Laser Highway' ), 'Laser Highway', '<a href="http://earlgreybot.com">Grey McGowan</a>' );
					?>
					<div>
						Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
					</div>
			</div>
			<div id="secondary col-md-4" class="widget-area">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
