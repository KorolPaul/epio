<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header id="masthead" class="header">
        <div class="header_holder">
            <a class="logo" href="/">
                <img src="/wp-content/themes/epio/src/img/logo.svg" alt="" class="logo_icon" />
            </a>

        <div class="header_menu">
            <nav class="menu">
                <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'container'      => false,
                            'menu_class'     => 'menu_list',
                            'depth'          => 1,
                        )
                    );
                    ?>
                <?php endif; ?>
            </nav>
            <div class="search">
                <button class="search_icon js-search-togle"></button>
                <form role="search" method="get" class="search_popup" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="search" class="search_input" name="s" placeholder="<?php echo(__( 'What are you looking for?', 'epio' )) ?>">
                </form>
            </div>
            <div class="menu-toggle">
                <div class="menu-toggle_line"></div>
                <div class="menu-toggle_line"></div>
                <div class="menu-toggle_line"></div>
            </div>
        </div>

    </header><!-- #masthead -->
<div id="butter">

    <main>
