<?php
/**
 * The sidebar containing the left footer widget area
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.8
 * @since IAMSocial 1.0.0
 */
?>
<?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
	<?php dynamic_sidebar( 'footer-left' ); ?>
<?php endif; ?>
