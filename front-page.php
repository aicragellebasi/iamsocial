<?php
/**
 * The template for displaying the frontpage
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.8
 * @since IAMSocial 1.0.0
 */
?>
<?php get_header(); ?>
		<section id="slider">
			<?php get_template_part( 'part' , 'slider' ); ?>
		</section>

		<section id="masonryContainer" class="content">
			<?php get_template_part( 'part' , 'content' ); ?>
		</section>
<?php get_footer(); ?>
