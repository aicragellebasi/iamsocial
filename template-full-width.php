<?php
/**
 * Use this template for pages with no sidebar.
 *
 * Learn more: {@link https://developer.wordpress.org/themes/template-files-section/page-template-files/page-templates/}
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.8
 * @since IAMSocial 1.0.0
 */
?>
<?php
/**
 * Template Name: Full Width Template
 */
get_header(); ?>
		<div class="row">
			<div class="col-md-12">
				<section class="content">
					<?php get_template_part( 'part' , 'content' ); ?>
				</section>
			</div>
		</div>
<?php get_footer(); ?>
