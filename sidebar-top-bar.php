<?php if ( is_active_sidebar( 'top-bar' ) ) {
	dynamic_sidebar( 'top-bar' );
} else {
	echo '<div class="sidebar-top">';
	the_widget( 'WP_Widget_Search' );
	echo '</div>';
}
?>
