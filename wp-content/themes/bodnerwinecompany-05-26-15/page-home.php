<?php
/**
 	Template Name: Home Page
 * @package bodnerWineCompany-05-26-15
 */

get_header(); ?>
	</header>
		<div class="slider-border"></div> 
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				
					<div id="slides" class="slider">
					    <img src="" class="slider-img-1">
					    <img src="http://placehold.it/940x528" class="slider-img-2">
					    <img src="http://placehold.it/940x528" class="slider-img-3">
					    <img src="http://placehold.it/940x528" class="slider-img-4">
					 
				</div>
			<?php if ( have_posts() ) : ?>

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

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
