<?php
/**
 * The sidebar containing the right footer widget area
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.8
 * @since IAMSocial 1.0.0
 */
?>
<?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
	<?php dynamic_sidebar( 'footer-right' ); ?>
<?php endif; ?>
