<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one: tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.8
 * @since IAMSocial 1.0.0
 */
?>
<?php get_header(); ?>
		<div class="row">
			<div class="col-md-9">
				<section id="masonryContainer" class="content">
				<?php get_template_part( 'part' , 'content' ); ?>
			</section>
			</div>
			<aside class="col-md-3">
				<?php get_sidebar(); ?>
			</aside>
		</div>
<?php get_footer(); ?>
