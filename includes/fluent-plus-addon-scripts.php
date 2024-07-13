<?php

if (!defined('ABSPATH')) exit();

add_action('admin_enqueue_scripts',function (){

    wp_register_script(
        'fluent_plus_addon_admin',
        FLUENT_PLUS_ADDON . 'admin/js/fluent-plus-addon.js',
        [],
        time()
    );
    wp_enqueue_script('fluent_plus_addon_admin');

    wp_localize_script('fluent_plus_addon_admin', 'FluentPlusAddon', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'plugin_url' => plugins_url('', __FILE__)
    ));

});