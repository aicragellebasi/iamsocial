<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.8
 * @since IAMSocial 1.0.0
 */
?>
<?php get_header(); ?>
		<div class="row">
			<div class="col-md-9">
				<section class="content">
					<?php get_template_part( 'part' , 'content' ); ?>
				</section>
			</div>
			<aside class="col-md-3">
				<?php get_sidebar(); ?>
			</aside>
		</div>

<?php get_footer(); ?>
