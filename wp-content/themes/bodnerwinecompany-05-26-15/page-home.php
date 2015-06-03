<?php
/**
 	Template Name: Home Page
 * @package bodnerWineCompany-05-26-15
 */

get_header(); ?>
	</header>
		
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
				
				
					<div class="hero-wrapper">
						<div id="hero-frame">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider-border.png" alt="Bodner Wine Company" id="slider-border"/>
						</div><!--/hero frame-->    
						    <?php echo do_shortcode("[huge_it_slider id='1']"); ?> 
					</div> 
			
			<?php if ( have_posts() ) : ?>

			<!-- <div class="container">
					<div class="wrapper"> -->
						<div class="content">
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

										<?php
										
											/* Include the Post-Format-specific template for the content.
											 * If you want to override this in a child theme, then include a file
											 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
											 */
										
											get_template_part( 'template-parts/content', get_post_format() );
										?>

										

							<?php endwhile; ?>
					<!-- 	</div>
					</div> -->
			

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_footer(); ?>
