<?php
/**
 * The template for displaying all single event posts
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
		?>
			<?php get_template_part( 'template-parts/content', get_post_type() );?>
			<!--START AND END TIMES-->
			<?php if(get_field('event_start_time') AND get_field('event_end_time')  ): ?>
					<span class='event_start_time'>From <?php the_field('event_start_time');?> to <?php the_field('event_end_time');?> </span>
			<?php endif; ?>
			<!--EVENT LOCATION-->
			<?php if(get_field('event_location') ): ?>
					<span class='event_location'><?php the_field('event_location'); ?></span>
			<?php endif; ?>
			<!--EVENT COST -->
			<?php if(get_field('event_cost') ): ?>
					<span class='event_cost'><?php the_field('event_cost'); ?></span>
			<?php endif; ?>
			<p class='ticket'>
				<!--TICKET INFORMATION-->
				<?php if(get_field('ticket_information') ): ?>
						<p class='ticket_information'><?php the_field('ticket_information'); ?></span>
				<?php endif; ?>
				<!--TICKET LINK-->
				<?php if(get_field('ticket_purchase_link') ): ?>
						<span class='ticket_purchase_link'>
							Ticket Purchase Link: 
							<a href='<?php the_field('ticket_purchase_link'); ?>'> 
							<?php the_field('ticket_purchase_link'); ?> 
							</a>
						</span>
				<?php endif; ?>
			<p>
			<!--FACEBOOK EVENT LINK-->
			<?php if(get_field('facebook_event_link') ): ?>
						<span class='facebook_event_link'> 
							<a href='<?php the_field('ticket_purchase_link'); ?>'> 
							Find Event on Facebook
							</a>
						</span>
				<?php endif; ?>
			<!--EVENT GENRES-->
			<?php if(get_field('event_genres') ): ?>
						<p class='event_genres'><?php the_field('event_genres'); ?></p>
				<?php endif; ?>
			<!--EVENT SUMMARY-->
			<?php if(get_field('event_summary') ): ?>
						<p class='event_summary'><?php the_field('event_summary'); ?></p>
				<?php endif; ?>
			<!--EVENT ARTISTS-->
			<?php if(get_field('event_artists') ): ?>
				<ul>
					<?php foreach ( the_field('event_artists') as $post): ?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<span> Post Object Custom Field: <?php the_field('event_artists'); ?></span>
					</li>
						<?php endforeach; ?>
				</ul>		
			<?php wp_reset_postdata(); ?>			
				<?php endif; ?>
			<!--ACK OF COUNTRY-->
			<?php if(get_field('acknowledgement_of_country') ): ?>
						<p class='acknowledgement_of_country'><?php the_field('acknowledgement_of_country'); ?></p>
				<?php endif; ?>
			<?php the_post_navigation(); ?>
			
			
		<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
