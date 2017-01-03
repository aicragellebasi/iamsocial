<?php
/**
 * Include WordPress Loop
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.8
 * @since IAMSocial 1.0.0
 */
?>
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( ! ( is_single() || is_page()) ) { ?><div class="masonry-layout__panel"><?php } ?><!--Mansory Layout fix: wrap each article-->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
			<figure>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php echo the_post_thumbnail( 'large' );  ?>
			</a> 
			</figure>
			<?php if ( is_single() || is_page() ) { the_content(); } else { the_excerpt(); ?>
					<small class="clearfix readmore"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php _e( 'Read More', 'iamsocial' ); ?></a></small>
					<span class="screen-reader-text"><?php the_title(); ?></span>
			<?php } ?>
			<?php  if ( ! is_page() ) {  ?>
				<div class="metas">
					<small><i class="fa fa-calendar-o"></i> <?php the_time( 'F jS, Y' ) ?> </small><br>
					<small class="postmetadata"><i class="fa fa-folder-open-o"></i> <?php esc_html_e( 'Posted in', 'iamsocial' ); ?> <?php the_category( ', ' ); ?></small><br>
					<?php if ( has_tag() ) { ?>
						<small><i class="fa fa-tags"></i> <?php the_tags(); ?></small>
					<?php } ?>
					<?php  if ( ! is_single() ) { // Show Comments total, if any. only on pages of type category / archives / tags etc... ?>
						<small class="comments">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php comments_number( '', '<i class="fa fa-comment-o"></i> One Comment', '<i class="fa fa-comment-o"></i> % Comments' );?>
							</a> 
						</small>
					<?php } ?>
				</div>
			<?php } /*End if is not page */ ?>
		</article>
		<?php if ( ! ( is_single() || is_page()) ) { ?></div><?php } ?><!--Mansory Layout fix: wrap each article-->
		
		<?php /* Check if the post is divided in several pages.
		If so, show the pagination */
		global $numpages;
		if ( $numpages > 1 ) {
			if ( is_single() || is_page() ) {
				$args = array(
					'before'           => '<nav><small>' . __( 'Pages:', 'iamsocial' ),
					'after'            => '</small></nav>',
					'link_before'      => '',
					'link_after'       => '',
					'next_or_number'   => 'number',
					'separator'        => ' ',
					'nextpagelink'     => __( 'Next page', 'iamsocial' ),
					'previouspagelink' => __( 'Previous page', 'iamsocial' ),
					'pagelink'         => '%',
					'echo'             => 1,
				);
				echo '<article>';
					wp_link_pages( $args );
				echo '</article>';
			}
		}
		?>
		<?php comments_template(); ?>
		<?php endwhile; ?>
		<?php  if ( ! is_page() ) {  ?>
			<?php  if ( is_single() ) {  ?>
				<article id="single">
					<nav class="row">
						<small class="nav-previous col-xs-6"><?php next_post_link( '%link', '<i class="fa fa-chevron-left"></i> '.__( 'Prev', 'iamsocial' ), true ); ?></small>
						<small class="nav-next col-xs-6 text-right"><?php previous_post_link( '%link', __( 'Next', 'iamsocial' ).' <i class="fa fa-chevron-right"></i>', true ); ?></small>
					</nav>
				</article>
			<?php } else {
					$prev_link = get_previous_posts_link( '&laquo; '.__( 'Older Entries', 'iamsocial' ) );
					$next_link = get_next_posts_link( __( 'Newer Entries', 'iamsocial' ).' &raquo;' );
					// checking if there is next or previous. If yes, show the nav.
					if ( $prev_link || $next_link ) { ?>
						<article id="frontpage">
							<nav class="row">
								<small class="nav-previous col-xs-6"><?php next_posts_link( '<i class="fa fa-chevron-left"></i> '.__( 'Older Posts', 'iamsocial' ) ); ?></small>
								<small class="nav-next col-xs-6 text-right"><?php previous_posts_link( __( 'Newer Posts', 'iamsocial' ).' <i class="fa fa-chevron-right"></i>' ); ?></small>
							</nav>
						</article>
					<?php }
				}
			} /*End if is not page */ ?>
		
	<?php else : ?>
			<h2 class="center"><?php esc_html_e( 'Not Found','iamsocial' ); ?></h2>
			<p class="center"><?php esc_html_e( "Sorry, but you are looking for something that isn't here.", 'iamsocial' ); ?></p>
	<?php endif; ?>
