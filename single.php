<?php
/**
 * The template for displaying all single posts
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
