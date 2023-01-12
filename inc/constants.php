<?php
// I18n theme domain
define('I18N_DOMAIN', 'bsbt');

// Acf installed ?
//define('ACF_EXISTS', (bool)function_exists('get_field') ); //@TODO : uncomment if you're using ACF




function getUserIpAddr(){
// Function to get the client IP address

    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}



// inline scripts via wp_add_inline_script()
function if_js_enqueue_scripts()
{
    $admin_ips = get_field('ip_adminstrateur', 'options');
    $current_user_ip = getUserIpAddr();
    $pos = strpos($admin_ips, $current_user_ip);

    if ($pos !== false) {
        return false;
    }

    if (is_user_logged_in()) {

        $user = wp_get_current_user();
        $roles = (array)$user->roles;

        if (in_array("locataire", $roles)) {
            return true;
        } else {
            return false;
        }
    }
    return true;
}
