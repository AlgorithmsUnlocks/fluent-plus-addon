<?php

// fluent-plus-addon - menu

if (!defined('ABSPATH')) exit();

add_action('wp_before_admin_bar_render',function (){

    global $wp_admin_bar;
    ob_start();
    include plugin_dir_path(__FILE__) . '../views/admin-bar-contents.php';
    $content = ob_get_clean();

    $wp_admin_bar->add_menu(array(
        'id'    =>  'fluent_plus_addon',
        'title' =>  'Fluent + Addon',
        'href'  =>  '#',
    ));

    $wp_admin_bar->add_node(array(
        'id'     => 'fluent_plus_addon_node',
        'parent' => 'fluent_plus_addon',
        'title'  => $content,
        'href'   => '#',
    ));

});