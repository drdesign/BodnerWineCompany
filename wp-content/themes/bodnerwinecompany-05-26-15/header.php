<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bodnerWineCompany-05-26-15
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<?php wp_head(); ?>

 <script>
    $(function(){
      $("#slides").slidesjs({
        width: 940,
        height: 528
      });
    });
  </script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="container">
			<div class="wrapper">
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bodnerwinecompany-05-26-15' ); ?></a>

				<header id="masthead" class="site-header" role="banner">
							
								<div class="header-image-container">
									<div id="header-image">
									    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
									       <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Bodner Wine Company"/>
									    </a>
										
											    <nav id="site-navigation" class="main-navigation" role="navigation">
													<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bodnerwinecompany-05-26-15' ); ?></button>
													<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
												</nav><!-- #site-navigation -->
											
									</div><!-- /header-image -->
								</div><!-- /header-image-container -->	
								

								
							
				</header><!-- #masthead -->

