<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage IAMSocial 2.0
 * @since IAMSocial 1.0.0
 */
?>
<?php get_header(); ?>
		<div class="row">
			<div class="col-md-9">
				<section class="content">
					<article>
						<h2><?php _e('Oops...', 'iamsocial'); ?></h2>
						<p><?php _e('We cannot find what you are looking for.', 'iamsocial'); ?> <a href="<?php echo esc_url(home_url()); ?>"><?php _e('Try again.', 'iamsocial'); ?></a></p>
					</article>
				</section>
			</div>
			<aside class="col-md-3">
				<?php get_sidebar(); ?>
			</aside>
		</div>
<?php get_footer(); ?>