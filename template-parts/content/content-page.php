<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'epio' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
<?php

if ( is_single() ) {

    get_template_part( 'template-parts/navigation' );

}
?>
