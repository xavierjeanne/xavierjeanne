<?php

/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

////////////////////////////////////////////////////////
////////// AJOUT PAGES D'OPTION ///////////////////
//////////////////////////////////////////////////////

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Paramètres WP',
        'menu_title'	=> 'Paramètres WP',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Paramètres Home',
        'menu_title'	=> 'Home',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Formulaire de Contact',
        'menu_title'	=> 'Contact',
        'parent_slug'	=> 'theme-general-settings',
    ));

}



function wpse_custom_menu_order( $menu_ord ) {
    if ( !$menu_ord ) return true;

    $menu_ord =  array(
        'index.php', // Dashboard
        'edit.php?post_type=page', // Pages
        'upload.php', // Media
        'mailpoet-newsletters',
        'edit.php', // Posts
        'edit.php?post_type=evenement',
        'edit.php?post_type=patrimoine',
        'edit.php?post_type=biens_a_louer',
        'edit.php?post_type=biens_a_vendre',
        'separator1', // First separator
        'edit.php?post_type=documents',
        'edit.php?post_type=locataire',
        'edit.php?post_type=baux_resilies',
        'edit.php?post_type=avis-echeance',
        'acf-options-parametres',
        'edit.php?post_type=partenaire',

        'wpforms-overview',
        'themes.php',
        'plugins.php',
        'users.php',
        'members',
        'tools.php',
        'options-general.php',
        'edit.php?post_type=acf-field-group',
        'cptui_main_menu',
        'wpseo_dashboard',
        'theme-my-login',
        'pmxi-admin-home',
    );

    return $menu_ord;
}
add_filter( 'custom_menu_order', 'wpse_custom_menu_order', 10, 1 );
add_filter( 'menu_order', 'wpse_custom_menu_order', 10, 1 );

// Remove the admin menu items
function stop_access_by_role()
{
    $user = wp_get_current_user();
    if (in_array('client_admin', (array)$user->roles)) {
        // TODO => Widgets
        remove_menu_page('tools.php');
        remove_menu_page('widgets.php');
        remove_menu_page('customize.php'); // Appearance / Edit
        remove_menu_page('edit-comments.php');
        remove_menu_page('options-general.php');
        remove_menu_page('options-writing.php');
        remove_menu_page('options-reading.php');
        remove_menu_page('options-discussion.php');
        remove_menu_page('options-media.php');
        remove_menu_page('options-permalink.php');
        remove_menu_page('cptui_main_menu');
        remove_submenu_page('pmxi-admin-home', 'pmxi-admin-import');
        remove_submenu_page('pmxi-admin-home', 'pmxi-admin-settings');
        remove_menu_page('edit.php?post_type=acf-field-group'); // ACF menu item
    }
    if (in_array('role2', (array)$user->roles)) {
        // TODO => Widgets
        remove_menu_page('edit.php?post_type=entreprise'); // ACF menu item
        remove_menu_page('tools.php');
        remove_menu_page('wpcf7');
        remove_menu_page('theme-general-settings');
        remove_menu_page('edit-comments.php');
    }
}

add_action( 'admin_init', 'stop_access_by_role' );

////////////////////////////////
////// Move Yoast to bottom
////////////////////////////////
///
function yoasttobottom() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');
