<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" class="search-results_entry">
    <?php
        the_title( sprintf( '<h2 class="search-results_entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
    ?>

	<div class="search-results_entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <a class="more-link" href="<?php esc_url( get_permalink() ) ?>" rel="bookmark">
            <span class="more-link_text">
                <?php echo sprintf( __( 'Show', 'epio' ) ) ?>
            </span>
        </a>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
