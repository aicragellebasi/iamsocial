<?php
/**
* Include IAMSocial Slider 
*
* @package WordPress
* @subpackage IAMSocial 1.0.8
* @since IAMSocial 1.0.0
*/
?>
<div id="carousel-home" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-home" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-home" data-slide-to="1"></li>
		<li data-target="#carousel-home" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
						<a href="<?php echo esc_url( get_theme_mod( 'slide1_link', 'www.isabellegarcia.me/iamsocial' ) ) ?>"> 
								<img src="<?php echo ( get_theme_mod( 'slide1_img' ) ? esc_url( get_theme_mod( 'slide1_img' ) ) : get_template_directory_uri().'/img/slider/slide-1.png' ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'slide1_caption' ) ); ?>" class="img-responsive">
						</a>
				<div class="carousel-caption">
						<h2 id="caption-1"><a href="<?php echo esc_url( get_theme_mod( 'slide1_link', 'www.isabellegarcia.com/iamsocial' ) ) ?>"><?php echo wp_kses_post(get_theme_mod( 'slide1_caption', __( 'change your caption in the admin', 'iamsocial' ) ) ); ?></a></h2>
				</div>
		</div>
		<div class="item">
						<a href="<?php echo esc_url( get_theme_mod( 'slide2_link', 'www.isabellegarcia.me/iamsocial' ) ) ?>"> 
								<img src="<?php echo ( get_theme_mod('slide2_img') ? esc_url( get_theme_mod( 'slide2_img' ) ) :  get_template_directory_uri().'/img/slider/slide-2.png' ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'slide2_caption' ) ); ?>" class="img-responsive">
						</a>
				<div class="carousel-caption">
						<h2 id="caption-2"><a href="<?php echo esc_url( get_theme_mod( 'slide2_link', 'www.isabellegarcia.com/iamsocial' ) ) ?>"><?php echo wp_kses_post(get_theme_mod( 'slide2_caption', __( 'change your caption in the admin', 'iamsocial' ) ) ); ?></a></h2>
				</div>
		</div>
		<div class="item">
						<a href="<?php echo esc_url( get_theme_mod( 'slide3_link', 'www.isabellegarcia.me/iamsocial' ) ) ?>"> 
								<img src="<?php echo ( get_theme_mod( 'slide3_img' ) ? esc_url( get_theme_mod( 'slide3_img' ) ) :  get_template_directory_uri().'/img/slider/slide-3.png' ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'slide3_caption' ) ); ?>" class="img-responsive">
						</a>
				<div class="carousel-caption">
						<h2 id="caption-3"><a href="<?php echo esc_url( get_theme_mod( 'slide3_link', 'www.isabellegarcia.com/iamsocial' ) ) ?>"><?php echo wp_kses_post(get_theme_mod( 'slide3_caption', __( 'change your caption in the admin','iamsocial' ) ) ); ?></a></h2>
				</div>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only"><?php esc_html_e( 'Previous', 'iamsocial' ); ?></span>
	</a>
	<a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only"><?php esc_html_e( 'Next', 'iamsocial' ); ?></span>
	</a>
</div>
