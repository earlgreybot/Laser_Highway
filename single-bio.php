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
			<div class="row">
			<?php
			while ( have_posts() ) :
				the_post();
				
				get_template_part( 'template-parts/content', get_post_type() );
				?>
				<!--ROLE-->
				<?php if(get_field('role') ): ?>
						<span class='role'><?php the_field('role'); ?></span>
				<?php endif; ?>
				<!--END ROLE-->
				<!--LOCATION-->
				<?php if(get_field('location') ): ?>
						<span class='location'><?php the_field('location'); ?></span>
				<?php endif; ?>
				<!--LOCATION-->
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-4">
				<!-- URLS -->	
				<div class='externallinks'>
				<h3> Find them on: </h3>
				<ul class='externallinks'>
					
					 <?php if(get_field('facebook') ): ?>
						<li> <a class='facebook url' href='<?php the_field('facebook'); ?>'>Facebook</a> </li> 
					<?php endif; ?>
					<?php if(get_field('bandcamp') ): ?>
						<li> <a class='bandcamp url' href='<?php the_field('bandcamp'); ?>'>Bandcamp</a> </li> 
					<?php endif; ?>
					<?php if(get_field('soundcloud') ): ?>
						<li> <a class='soundcloud url' href='<?php the_field('soundcloud'); ?>'>SoundCloud</a> </li> 
					<?php endif; ?>
					<?php if(get_field('Instagram') ): ?>
						<li> <a class='instagram url' href='<?php the_field('Instagram'); ?>'>Instagram</a> </li> 
					<?php endif; ?>
					<?php if(get_field('youtube') ): ?>
						<li> <a class='youtube url' href='<?php the_field('youtube'); ?>'>YouTube</a> </li> 
					<?php endif; ?>
					<?php if(get_field('mixcloud') ): ?>
						<li> <a class='mixcloud url' href='<?php the_field('mixcloud'); ?>'>Mixcloud</a> </li> 
					<?php endif; ?>
					<?php if(get_field('personal_site') ): ?>
						<li> <a class='personalsite url' href='<?php the_field('personal_site'); ?>'>Personal Site</a> </li> 
					<?php endif; ?>
					<!-- CUSTOM URLS -->
					<?php if(get_field('other_url_1') ): ?>
						<li> <a class='custom custom1 url' href='<?php the_field('other_url_1'); ?>'>
							<?php the_field('other_url_1_descr'); ?>
						</a> </li> 
					<?php endif; ?>
					<?php if(get_field('other_url_2') ): ?>
						<li> <a class='custom custom2 url' href='<?php the_field('other_url_2'); ?>'>
							<?php the_field('other_url_2_descr'); ?>
						</a> </li> 
					<?php endif; ?>
					<?php if(get_field('other_url_3') ): ?>
						<li> <a class='custom custom3 url'href='<?php the_field('other_url_3'); ?>'>
							<?php the_field('other_url_3_descr'); ?>
						</a> </li> 
					<?php endif; ?> 
				</ul>
				</div>
				<!--END URLS-->
			</div>
			<div class='col-md-8 col-sm-12'>
				<!--EMBED-->
				<?php if(get_field('embed') ): ?>
						<div><?php the_field('embed'); ?></div>
				<?php endif; ?>
			</div>
				<?php
				the_post_navigation();
		
			endwhile; // End of the loop.
			?>
			
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
