<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.8
 * @since IAMSocial 1.0.0
 */
?>
<?php
// don't load it if you can't comment
if ( post_password_required() ) {
	return;
}

?>

<?php if ( have_comments() ) : ?>

			<?php
				wp_list_comments( array(
					'style'             => 'article',
					'short_ping'        => true,
					'avatar_size'       => 50,
					'type'              => 'all',
					'reply_text'        => __( 'Reply','iamsocial' ),
					'page'              => '',
					'per_page'          => '',
					'reverse_top_level' => null,
					'reverse_children'  => '',
					'format'            => 'html5',
				) );
			?>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<article class="">
			<nav class="row" role="navigation">
				<small class="nav-previous col-xs-6"><?php previous_comments_link( '&larr; '.__( 'Previous Comments' , 'iamsocial' ) ); ?></small>
				<small class="nav-previous col-xs-6 text-right"><?php next_comments_link( __( 'Next Comments' , 'iamsocial' ).' &rarr;' ); ?></small>
			</nav>
	</article>
<?php endif; ?>

<?php endif; // have_comments() ?>

		<?php if ( comments_open() ) { ?>
				<?php comment_form(); ?>
		<?php } ?>
