<?php
/**
 * Template Name: Events
 * The template for displaying all event pages
 *
 * This is the template that displays all event pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Laser_Highway
 */

get_header();
?>

	<div id="primary" class="content-area">
		<h1> event test </h1>
		<main id="main" class="site-main">
		
		<?php
		while ( have_posts() ) :
			get_the_title();
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
			//	comments_template();
			//endif;

		endwhile; // End of the loop.
		?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();