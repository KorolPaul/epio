<?php
/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$next_post = get_next_post(true);
$prev_post = get_previous_post(true);

$show_in_catefory = has_category( 'Бизнесы' ) || has_category( 'Businesses' );

if ( $show_in_catefory && ($next_post || $prev_post )) {

	$pagination_classes = '';

	if ( ! $next_post ) {
		$pagination_classes = ' only-one only-prev';
	} elseif ( ! $prev_post ) {
		$pagination_classes = ' only-one only-next';
	}

	?>

	<div class="pagination-single section-inner<?php echo esc_attr( $pagination_classes ); ?>" aria-label="<?php esc_attr_e( 'Post', 'twentytwenty' ); ?>" role="navigation">

		<div class="pagination-single-inner">

			<?php
			if ( $prev_post ) {
				$prev_image = get_the_post_thumbnail_url($prev_post, 'thumbnail');
				?>


				<a class="previous-post" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
                    <span class="next-post_title"><?php echo __('Previous company', 'epio') ?></span>
					<img class="previous-post_image" src="<?php echo $prev_image ?>" alt="" />
				</a>

				<?php
			} else {
                ?> <div></div> <?php
            }

			if ( $next_post ) {
				$next_image = get_the_post_thumbnail_url($next_post, 'thumbnail');

				?>


				<a class="next-post" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
					<span class="next-post_title"><?php echo __('Next company', 'epio') ?></span>
					<img class="next-post_image" src="<?php echo $next_image ?>" alt="" />
				</a>
				<?php
			}
			?>

		</div><!-- .pagination-single-inner -->

	</div><!-- .pagination-single -->

	<?php
}
