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
		<h1> Events test </h1>
		<main id="main" class="site-main">
		
		<?php
		$args = array(
		'post_type' => 'events',
		'orderby' => 'menu_order',
		'order' => 'ASC'
		);
		$event = new WP_Query($args);
		
		if( $event->have_posts() ): 
			while( $event->have_posts() ): $event->the_post(); ?>
				<article class='event'>
					<a href='<?php the_permalink();?>' >
					<?php the_post_thumbnail('medium'); ?>
					<h2 class='event'><?php the_title(); ?></h2>
					</a>
				</article>
			<?php endwhile; ?>
		<?php else: ?>
			<p> sorry, we can't find any events. </p>
		<?php endif; ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();