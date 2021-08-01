<?php
/**
 * Custom Gutenberg functions
 */

function intro_gutenberg_default_colors()
{
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name' => 'White',
                'slug' => 'white',
                'color' => '#ffffff'
            ),
            array(
                'name' => 'Black',
                'slug' => 'black',
                'color' => '#000000'
            ),
            array(
                'name' => 'Pink',
                'slug' => 'pink',
                'color' => '#ff4444'
            )
        )
    );

    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name' => 'Normal',
                'slug' => 'normal',
                'size' => 16
            ),
            array(
                'name' => 'Large',
                'slug' => 'large',
                'size' => 24
            )
        )
    );
}
add_action( 'init', 'intro_gutenberg_default_colors' );


function init_custom_block() {
    wp_register_script(
        'intro',
        get_template_directory_uri() . '/js/introBlock.js',
        array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-editor' )
    );

    register_block_type( 'blocks/intro', array(
        'editor_script' => 'intro'
    ) );
}

add_action( 'init', 'init_custom_block' );
