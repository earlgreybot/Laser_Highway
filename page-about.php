<?php
/**
 * Template Name:Home
 * The template for displaying the about/homepage
 *
 * @package Laser_Highway
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
		?>
		<div class="container">
				<!--FEATURED EVENT-->
				<?php $featuredevent = get_field('featured_event');
				if( $featuredevent ): ?>
					<div class='featuredevent'>
					<?php foreach( $featuredevent as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
						<div class="featuredevent">
							<a href="<?php the_permalink(); ?>">
								<h3 class='featuredevent'>
									<?php the_title(); ?>
								</h3>
								<div class='body'>
									<?php the_post_thumbnail(medium);?>
									<?php the_field(event_summary);?>
								
							
								</div>
					<?php endforeach; ?>
					</div>
				<?php endif;?>	
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works 
				correctly ?>
			<!--END ABOUT FEATURED EVENT-->
				<!--ABOUT LH-->
				<?php $aboutlh = get_field('about_laser_highway');
				if( $aboutlh ): ?>
					<div class='aboutLH'>
					<?php foreach( $aboutlh as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
						<div class="aboutLH">
							<a href="<?php the_permalink(); ?>">
								<h3 class='aboutlh'>
									<?php the_title(); ?>
								</h3>
							</a>
							<div>
								<?php the_content(); ?>
							</div>	
						</div>
					<?php endforeach; ?>
					</div>
				<?php endif;?>	
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works 
				correctly ?>
			<!--END ABOUT LH-->
			<!--ABOUT ZEROTONINE-->
				<?php $aboutz29 = get_field('about_zerotonine');
				if( $aboutlh ): ?>
					<div class='aboutz29'>
					<?php foreach( $aboutz29 as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
						<div class="aboutz29">
							<a href="<?php the_permalink(); ?>">
								<h3 class='aboutz29'>
									<?php the_title(); ?>
								</h3>
							</a>
							<div>
								<?php the_content(); ?>
							</div>	
						</div>
					</div>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works 
				correctly ?>
			<!--END ABOUT ZEROTONINE-->
					<?php endforeach; ?>
					
			</div>
				<?php endif;
			?>
			
			
		<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
