<?php
/**

		Template Name: Contact Us Page
 *
 * @package bodnerWineCompany-05-26-15
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			<div class="side-contact">
				<?php get_sidebar(); ?>
			</div><!--/side-contect-->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
