<?php
/**
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
	
				<?php $aboutlh = get_field('about_laser_highway');
				if( $aboutlh ): ?>
					<ul class='aboutLH'>
					<?php foreach( $aboutlh as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
						<li class="aboutLH">
							<a href="<?php the_permalink(); ?>">
								<h3 class='aboutlh'>
									<?php the_title(); ?>
								</h3>
							</a>
							<span>
								<?php the_field('field_name'); 
								$content = get_the_content();
								$length = 1000;
								if(strlen($content) > $length) 
								{
								$content = substr($content, 0, $length) . "..."; 
								}
								echo $content; ?>
								<span><a href='<?php the_permalink(); ?>'> See Full Bio</a></span>
								</span>
						</li>
					<?php endforeach; ?>
					</ul>
			
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works 
				correctly ?>
			<!--END EVENT ARTISTS-->
			</div>
				<?php endif;
			?>
			
		
		
		
		
		
		
		
		
			<!--ACK OF COUNTRY-->
			<?php if(get_field('acknowledgement_of_country') ): ?>
						<p class="acknowledgement_of_country row"><?php the_field('acknowledgement_of_country'); ?></p>
				<?php endif; ?>
			</div>
			
		<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
