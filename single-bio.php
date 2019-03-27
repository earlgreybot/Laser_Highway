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
			<!-- URLS -->	
			<p>
			 <?php if(get_field('facebook') ): ?>
				<a class='facebook url' href='<?php the_field('facebook'); ?>'>Facebook</a>
			<?php endif; ?>
			<?php if(get_field('bandcamp') ): ?>
				<a class='bandcamp url' href='<?php the_field('bandcamp'); ?>'>Bandcamp</a>
			<?php endif; ?>
			<?php if(get_field('soundcloud') ): ?>
				<a class='soundcloud url' href='<?php the_field('soundcloud'); ?>'>SoundCloud</a>
			<?php endif; ?>
			<?php if(get_field('Instagram') ): ?>
				<a class='instagram url' href='<?php the_field('Instagram'); ?>'>Instagram</a>
			<?php endif; ?>
			<?php if(get_field('youtube') ): ?>
				<a class='youtube url' href='<?php the_field('youtube'); ?>'>YouTube</a>
			<?php endif; ?>
			<?php if(get_field('mixcloud') ): ?>
				<a class='mixcloud url' href='<?php the_field('mixcloud'); ?>'>Mixcloud</a>
			<?php endif; ?>
			<?php if(get_field('personal_site') ): ?>
				<a class='personalsite url' href='<?php the_field('personal_site'); ?>'>Personal Site</a>
			<?php endif; ?>
			<!-- CUSTOM URLS -->
			<?php if(get_field('other_url_1') ): ?>
				<a class='custom custom1 url' href='<?php the_field('other_url_1'); ?>'>
					<?php the_field('other_url_1_descr'); ?>
				</a>
			<?php endif; ?>
			<?php if(get_field('other_url_2') ): ?>
				<a class='custom custom2 url' href='<?php the_field('other_url_2'); ?>'>
					<?php the_field('other_url_2_descr'); ?>
				</a>
			<?php endif; ?>
			<?php if(get_field('other_url_3') ): ?>
				<a class='custom custom3 url'href='<?php the_field('other_url_3'); ?>'>
					<?php the_field('other_url_3_descr'); ?>
				</a>
			<?php endif; ?>
			</p>
			<!--END URLS-->
			<!--EMBED-->
			<?php if(get_field('embed') ): ?>
					<div><?php the_field('embed'); ?></div>
			<?php endif; ?>
			<?php
			the_post_navigation();
	
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
