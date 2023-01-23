<?php

include('inc/back-office.php');

// Include your functions files here
include('inc/enqueues.php');
/**
 * Permet d'ajouter des fonctions uniquement 
 * sur le local et qui est ignor� via le 
 * .gitignore
 **/
if (file_exists(__DIR__.'/local-functions.php')) {
    include('local-functions.php');
}
/**
 * Don't hesitate to use the WP code snippet generator Hasty : https://www.wp-hasty.com/
 */

/**
 * Declare theme support
 * ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
 */
function theme_set_theme_supports()
{
    global $wp_version;

    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    add_theme_support('automatic-feed-links');

    // let wordpress manage the title
    add_theme_support('title-tag');

    //add_theme_support( 'custom-background', $args );
    //add_theme_support( 'custom-header', $args );
}

add_action('after_setup_theme', 'theme_set_theme_supports');


/**
 * Declare theme width global var
 */
if ( ! isset($content_width)) {
    // @TODO : edit the value for your own specifications
    $content_width = 1170; // Bootstrap default container value
}


/**
 * Register WordPress menus
 * cf : http://codex.wordpress.org/Function_Reference/wp_nav_menu
 *
 */
//@TODO : declare your menus here
register_nav_menus(array(
    'main_menu' => __('Main menu')
));



/**
 * Set style.css as style in admin editor
 *
 */
function theme_set_editor_style()
{
    add_editor_style(get_stylesheet_directory_uri() . '/dist/css/theme.css');
}

//add_action( 'admin_init', 'theme_set_editor_style' ); //@TODO : Uncomment if you use it

/**
 * Remove emojis CSS and JS
 */
function theme_remove_emojis()
{
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 99);
}
//add_action( 'init', 'theme_remove_emojis' ); //@TODO: Uncomment if you don't need emojis and want to optimize your site


/**
 * D�sactiver les mises � jour automatiques (themes, plugins, core)
 **/
function disable_automatic_updater($disabled) {
    return true;
}
add_filter('automatic_updater_disabled', 'disable_automatic_updater');
add_filter( 'plugins_auto_update_enabled', '__return_false' );
add_filter( 'themes_auto_update_enabled', '__return_false' );
define( 'automatic_updater_disabled', true );



