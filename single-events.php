<?php
/**
 * The template for displaying all single event posts
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
			<div class='row'>
			<!--TITLE-->
					<div class="titlelocation col-lg-12">
						<h1 class="eventh1">
						<?php 
						echo get_the_title()?> 
						</h1>
					</div>
				<!--TITLE-->
			</div>
				<div class='row'>
					<!--FEATURED IMAGE-->
					<div class="image col-lg-4 col-sm-12">
						<?php 
						echo the_post_thumbnail()?> 
					</div>
					<!--END FEATURED IMAGE-->
				
				<div class="ticketsandessential col-lg-8">
					<!--EVENT GENRES-->
					<div class="genre">
						<?php if(get_field('event_genres') ): ?>
									<p class='event_genres'><?php the_field('event_genres'); ?></p>
							<?php endif; ?>
						<!--END EVENT GENRES-->
					</div>
					<div class="eventessentials">
						<!--START AND END TIMES-->
						<?php if(get_field('event_start_time') AND get_field('event_end_time')  ): ?>
								<span class='eventtime strong'>From <?php the_field('event_start_time');?> to <?php 
								the_field('event_end_time');?> </span>
						<?php endif; ?>
						<!--END START AND END TIMES-->
						<!--EVENT LOCATION-->
						<div class="eventlocation">
							<?php if(get_field('event_location') ): ?>
									<span class='event_location'><?php the_field('event_location'); ?></span>
							<?php endif; ?>
						<!--END EVENT LOCATION-->
						<!--FACEBOOK EVENT LINK-->
						<?php if(get_field('facebook_event_link') ): ?>
								<br>
								<span class='facebook_event_link'> 
									<a href='<?php the_field('ticket_purchase_link'); ?>'> 
									Find Event on Facebook
									</a>
								</span>
						<?php endif; ?>
						<!--END FACEBOOK EVENT LINK-->
						</div>
					</div>
					
					<div class="eventtickets">
						<!--EVENT COST -->
						<?php if(get_field('event_cost') ): ?>
								<span class='event_cost'><?php the_field('event_cost'); ?></span>
						<?php endif; ?>
						<!--END EVENT COST -->
						<!--TICKET INFORMATION-->
						<?php if(get_field('ticket_information') ): ?>
								<span><?php the_field('ticket_information'); ?>:</span>
						<?php endif; ?>
						<!--END TICKET INFORMATION-->
						<!--TICKET LINK-->
						<?php if(get_field('ticket_purchase_link') ): ?>
								<span class='ticket_purchase_link'>
									<a href='<?php the_field('ticket_purchase_link'); ?>'> 
									<?php the_field('ticket_purchase_link'); ?> 
									</a>
								</span>
						<?php endif; ?>
						<!--END TICKET LINK-->
					</div>
					<div class="detailedeventinfo">
					<!--END FEATURED IMAGE-->
						
						<!--EVENT SUMMARY-->
						<?php if(get_field('event_summary') ): ?>
									<p class='event_summary'><?php the_field('event_summary'); ?></p>
							<?php endif; ?>
						<!--END EVENT SUMMARY-->
					</div>
				</div>
				
			</div>
		</div>	
				

			<div class="eventartists container">
			
			<!--EVENT ARTISTS-->
				<?php $event_artists = get_field('event_artists');
				if( $event_artists ): ?>
					<ul class='biolist'>
					<?php foreach( $event_artists as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
						<li class=" eventbio">
							<a href="<?php the_permalink(); ?>">
								<h3 class='eventbiotitle'>
									<?php the_title(); ?>
								</h3>
							</a>
							<div class="imblock">
								<div class="artistim"> 
									<?php the_post_thumbnail('small'); ?> 
								</div> 
							</div>
							<span>
								<?php the_field('field_name'); 
								$content = get_the_content();
								$length = 200;
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
