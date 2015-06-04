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
							<div class="content-divider-right">

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

			
					</div><!--content-divider-right-->

						<?php $snippets = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 2, 'paged' => get_query_var('paged') ) );
							
							if( $snippets->have_posts() ) : while( $snippets->have_posts() ) : $snippets->the_post(); ?>

								<?php endwhile; endif; wp_reset_postdata(); ?>

					<div class="content-divider-left">

						<div class="entry-content">
							<h2><?php single_post_title( 'From Our Blog: ' ); ?></h2>
								<?php $my_query = "showposts=2"; $my_query = new WP_Query($my_query); ?>
									<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

										<!-- standard tags to display blog post information like the_title() here -->
										<div class="thumbnail-snippet">
											<?php the_post_thumbnail(); ?>
										</div>	

										<div id="blog-snippet-front"> 
											<?php the_title( '<h3>', '</h3>' ); ?>
											<?php the_excerpt(); ?>
				 							<?php the_shortlink(__('Read More...')); ?>
			 							</div>
									<?php endwhile; // end of one post ?>
								<?php endif; //end of loop ?>
						</div><!--entry-content-->
					</div>	<!--content-divider-left-->
				</div><!--content-->
			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_footer(); ?>
