<?php

if (!defined('ABSPATH')) exit();

add_action('admin_enqueue_scripts',function (){

    wp_register_style(
        "fluent_plus_addon_admin",
        FLUENT_PLUS_ADDON."admin/css/fluent-plus-addon.css",
        [],
        time()
    );
    wp_enqueue_style("fluent_plus_addon_admin");

});