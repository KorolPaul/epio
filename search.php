<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

		<main>
            <div class="section section__light">
                <div class="section_content">
                    <?php if ( have_posts() ) : ?>

                        <p class="search-results_title">
                            <?php _e( 'Showing all search results for: ', 'epio' ); ?>
                            <spa><?php echo get_search_query(); ?></span>
                        </p>

                        <?php
                        // Start the Loop.
                        while ( have_posts() ) :
                            the_post();

                            /*
                            * Include the Post-Format-specific template for the content.
                            * If you want to override this in a child theme, then include a file
                            * called content-___.php (where ___ is the Post Format name) and that
                            * will be used instead.
                            */
                            get_template_part( 'template-parts/content/content', 'excerpt' );

                            // End the loop.
                        endwhile;


                        // If no content, include the "No posts found" template.
                    else :
                        get_template_part( 'template-parts/content/content', 'none' );

                    endif;
                    ?>
                </div>
            </div>

		</main><!-- #main -->

<?php
get_footer();
