<?php
/**
 * Template Name: Bios
 * The template for displaying all bio pages
 *
 * This is the template that displays all bio pages by default.
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
		<h1> Biographies </h1>	
		<main id="main bio" class="site-main">
	
		<?php
		$args = array(
		'post_type' => 'bio',
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'posts_per_page'=>'5'
		);
		$bio = new WP_Query($args);
		
		if( $bio->have_posts() ): 
			while( $bio->have_posts() ): $bio->the_post(); ?>
				<article class='bio'>
					<a href='<?php the_permalink();?>' >
					<?php the_post_thumbnail('medium'); ?>
					<h2><?php the_title(); ?> TEST</h2>
					</a>
				</article>
			<?php endwhile; ?>
		<?php else: ?>
			<p> sorry, we can't find any bios. </p>
		<?php endif; ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
