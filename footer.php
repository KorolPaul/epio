<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

    </main>

    <footer class="footer">
        <div class="footer_holder">
            <div class="footer_logo">
                <a class="logo" href="/">
                    <img src="/wp-content/themes/epio/src/img/logo-dark.svg" alt="" class="logo_icon">
                </a>
            </div>
            <div class="footer_menu">
                <div class="footer_menu-list">
                    <span class="footer_menu-title"><?php _e( 'Segments', 'epio' ); ?></span>
                    <?php
                        wp_nav_menu(
                            array(
                                'menu'     => 'Segments',
                                'theme_location' => 'footer',
                                'container'      => false,
                                'menu_class'     => 'footer_menu-links',
                                'depth'          => 1,
                            )
                        );
                    ?>
                </div>
                <div class="footer_menu-list">
                    <span class="footer_menu-title"><?php _e( 'Services', 'epio' ); ?></span>
                    <?php
                        wp_nav_menu(
                            array(
                                'menu'     => 'Servicies',
                                'theme_location' => 'footer',
                                'container'      => false,
                                'menu_class'     => 'footer_menu-links',
                                'depth'          => 1,
                            )
                        );
                    ?>
                </div>
                <div class="footer_menu-list footer_menu-list__big">
                    <?php
                        wp_nav_menu(
                            array(
                                'menu'     => 'Footer other',
                                'theme_location' => 'footer',
                                'container'      => false,
                                'menu_class'     => 'footer_menu-main-links',
                                'depth'          => 1,
                            )
                        );
                    ?>
                </div>
            </div>
            <div class="footer_title">
                <?php
                    if ( is_active_sidebar( 'sidebar-1' ) ) {
                        dynamic_sidebar( 'sidebar-1' );
                    }
                ?>
            </div>
            <div class="footer_social">
                <div class="social">
                    <!--
                    <a href="#" class="social_link" target="__blank">
                        <img src="/wp-content/uploads/social/in.svg" alt="" class="social_icon">
                    </a>
                    <a href="#" class="social_link" target="__blank">
                        <img src="/wp-content/uploads/social/yt.svg" alt="" class="social_icon">
                    </a>
                    -->
                    <a href="https://facebook.com/epiogroup/" class="social_link" target="__blank">
                        <img src="/wp-content/uploads/social/fb.svg" alt="" class="social_icon">
                    </a>
                    <a href="https://t.me/epiocom" class="social_link" target="__blank">
                        <img src="/wp-content/uploads/social/t.svg" alt="" class="social_icon">
                    </a>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</div>
</body>
</html>
