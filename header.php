<?php
/**
 * The Header template for IAMSocial
 *
 * Displays all of the <head> section and everything up till <section>
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.9
 * @since IAMSocial 1.0.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav id="top-menu" class="navbar navbar-default">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 visible-sm-inline-block visible-md-inline-block visible-lg-inline-block ">
					<?php get_sidebar( 'top-bar' ); ?>
				</div>
				<nav class="col-sm-4 topSocials">
					<div class="sidebar-top">
						<?php
						if ( get_theme_mod( 'icon1_link' ) ) { ?>
						<a href="<?php echo esc_url( get_theme_mod( 'icon1_link' ) ); ?>" target="_blank"> 
							<i class="fa fa-facebook-square fa-2x"></i>
						</a>
						<?php }
						if ( get_theme_mod( 'icon2_link' ) ) { ?>
						<a href="<?php echo esc_url( get_theme_mod( 'icon2_link' ) ); ?>" target="_blank"> 
							<i class="fa fa-twitter-square fa-2x"></i>
						</a>
						<?php }
						if ( get_theme_mod( 'icon3_link' ) ) { ?>
						<a href="<?php echo esc_url( get_theme_mod( 'icon3_link' ) ); ?>" target="_blank"> 
							<i class="fa fa-google-plus-square fa-2x"></i>
						</a>
						<?php }
						if ( get_theme_mod( 'icon4_link' ) ) { ?>
						<a href="<?php echo esc_url(get_theme_mod( 'icon4_link' ) ); ?>" target="_blank"> 
							<i class="fa fa-instagram fa-2x"></i>
						</a>
						<?php }
						if ( get_theme_mod( 'icon5_link' ) ) { ?>
						<a href="<?php echo esc_url( get_theme_mod( 'icon5_link' ) ); ?>" target="_blank"> 
							<i class="fa fa-linkedin-square fa-2x"></i>
						</a>
						<?php }
						if ( get_theme_mod( 'icon6_link' ) ) { ?>
						<a href="<?php echo esc_url( get_theme_mod( 'icon6_link' ) ); ?>" target="_blank"> 
							<i class="fa fa-youtube-square fa-2x"></i>
						</a>
						<?php }
						if ( get_theme_mod( 'icon7_link' ) ) { ?>
						<a href="<?php echo esc_url( get_theme_mod( 'icon7_link' ) ); ?>" target="_blank"> 
							<i class="fa fa-pinterest-square fa-2x"></i>
						</a>
						<?php }
						if ( get_theme_mod( 'icon8_link' ) ) { ?>
						<a href="<?php echo esc_url( get_theme_mod( 'icon8_link' ) ); ?>" target="_blank"> 
							<i class="fa fa-tumblr-square fa-2x"></i>
						</a>
						<?php } ?>
					</div>
				</nav>
			</div>
			
		</div>
	</nav>

	<div class="container" role="main"> <!-- this will close in footer.php -->
		<header id="header">
			<div class="row">
				<div class="col-sm-12">
					<?php if ( get_header_image() ) { ?>
						<div class="sitelogo">
							<a href="<?php echo esc_url( home_url() ); ?>">
								<img src="<?php header_image(); ?>" height="<?php esc_attr( get_custom_header()->height,'iamsocial' ); ?>" width="<?php esc_attr( get_custom_header()->width, 'iamsocial' ); ?>" alt="<?php esc_attr_e( 'Logo', 'iamsocial' ); ?>" class="img-responsive"  id='logo' />
							</a>
						</div>
					<?php } ?>
						<div class="sitetitle">
							<h1><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							<h2><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'description' ); ?></a></h2>
						</div>
				</div>
			</div>
		</header>


	<nav id="main-menu" class="navbar navbar-default" role="navigation">
		<div class="row">
			<div class="col-md-12">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-list">
					<span class="sr-only"><?php _e('Toggle navigation','iamsocial'); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'main-menu-list',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?>
			</div>
		</div>
	</nav>		

		   



