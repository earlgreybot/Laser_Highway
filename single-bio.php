<?php
/**
 * The template for displaying all single bio posts
 *
 * @package Laser_Highway
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

		<?php
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', get_post_type() );
			?>
			<p>
			 <?php if(get_field('facebook') ): ?>
				<a href='<?php the_field('facebook'); ?>'>Facebook</a>
				<?php endif; ?>
				<?php if(get_field('bandcamp') ): ?>
				<a href='<?php the_field('bandcamp'); ?>'>Bandcamp</a>
				<?php endif; ?>
			</p>
			<?php
			the_post_navigation();
	
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
