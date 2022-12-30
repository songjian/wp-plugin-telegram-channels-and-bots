<?php
/**
 * Plugin Name: Telegram Channels and Bots
 * Plugin URI: https://github.com/songjian/wp-telegram-channels-and-bots
 * Author: sj
 * Author URI: https://codeorder.cn/
 * Version: 0.0.1
 * Requires at least: 5.9
 * Requires PHP: 7.3
 * Text Domain: tgchannels
 * Domain Path: /languages
 */

function sj_custom_post_type(){
    register_post_type('tgchannel', [
        'labels'=>[
            'name' => __('Telegram Channels', 'tgchannels'),
            'singular_name' => __('Telegram Channel', 'tgchannels'),
            'add_new' => __('Add Telegram Channel', 'tgchannels'),
            'add_new_item' => __('Add Telegram Channel', 'tgchannels'),
            'edit_item' => __('Edit Telegram Channel', 'tgchannels'),
            'new_item' => __('New Telegram Channel', 'tgchannels'),
        ],
        'description' => __('Telegram Channel', 'tgchannels'),
        'public' => true,
        'menu_icon' => 'dashicons-airplane',
        'map_meta_cap' => true,
        'has_archive' => true,
        'delete_with_user' => false,
        // 'show_in_rest' => true,
        'taxonomies' => ['tgchannel_category'],
    ]);

    register_post_type('tggroup', [
        'labels'=>[
            'name' => __('Telegram Groups', 'tgchannels'),
            'singular_name' => __('Telegram Group', 'tgchannels'),
            'add_new' => __('Add Telegram Group', 'tgchannels'),
            'add_new_item' => __('Add Telegram Group', 'tgchannels'),
            'edit_item' => __('Edit Telegram Group', 'tgchannels'),
            'new_item' => __('New Telegram Group', 'tgchannels'),
        ],
        'description' => __('Telegram Group', 'tgchannels'),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'map_meta_cap' => true,
        'has_archive' => true,
        'delete_with_user' => false,
        'show_in_rest' => true,
        'taxonomies' => ['tgchannel_category'],
    ]);

    register_post_type('tgbot', [
        'labels' => [
            'name' => __('TG Bots', 'tgchannels'),
            'singular_name' => __('TG Bot', 'tgchannels'),
            'add_new' => __('Add TG Bot', 'tgchannels'),
            'add_new_item' => __('Add TG Bot', 'tgchannels'),
            'edit_item' => __('Edit TG Bot', 'tgchannels'),
            'new_item' => __('New TG Bot', 'tgchannels'),
        ],
        'description' => __('TG Bot', 'tgchannels'),
        'public' => true,
        'menu_icon' => 'dashicons-reddit',
        'map_meta_cap' => true,
        'has_archive' => true,
        'delete_with_user' => false,
        'taxonomies' => ['tgbot_category'],
    ]);
}
add_action('init', 'sj_custom_post_type');

function sj_register_taxonomy_tgchannelcategory(){
    $labels = [
        'name' => __('TG Channel Categories', 'tgchannels'),
        'singular_name' => __('TG Channel Category', 'tgchannels'),
        'search_item' => __('Search TG Channel Categories', 'tgchannels'),
        'all_items' => __('All TG Channel Categories', 'tgchannels'),
        'parent_itme' => __('Parent TG Channel Category', 'tgchannels'),
        'parent_item_colon' => __('Parent TG Channel Category:', 'tgchannels'),
        'edit_item' => __('Edit TG Channel Category', 'tgchannels'),
        'update_item' => __('Update TG Channel Category', 'tgchannels'),
        'add_new_item' => __('Add New TG Channel Category', 'tgchannels'),
        'new_item_name' => __('New TG Channel Category Name', 'tgchannels'),
        'menu_name' => __('TG Channel Category', 'tgchannels'),
    ];
    $args = [
        'labels' => $labels,
        'description' => __('Telegram Channels Categories', 'tgchannels'),
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_quick_edit' => true,
    ];
    register_taxonomy('tgchannel_category', ['tgchannel', 'tggroup'], $args);
}
add_action('init', 'sj_register_taxonomy_tgchannelcategory');

function sj_register_taxonomy_tgbotcategory(){
    $labels = [
        'name' => __('TG Bot Categories', 'tgchannels'),
        'singular_name' => __('TG Bot Category', 'tgchannels'),
        'search_item' => __('Search TG Bot Categories', 'tgchannels'),
        'all_items' => __('All TG Bot Categories', 'tgchannels'),
        'parent_itme' => __('Parent TG Bot Category', 'tgchannels'),
        'parent_item_colon' => __('Parent TG Bot Category:', 'tgchannels'),
        'edit_item' => __('Edit TG Bot Category', 'tgchannels'),
        'update_item' => __('Update TG Bot Category', 'tgchannels'),
        'add_new_item' => __('Add New TG Bot Category', 'tgchannels'),
        'new_item_name' => __('New TG Bot Category Name', 'tgchannels'),
        'menu_name' => __('TG Bot Category', 'tgchannels'),
    ];
    $args = [
        'labels' => $labels,
        'description' => __('Telegram Bots Categories', 'tgchannels'),
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_quick_edit' => true,
    ];
    register_taxonomy('tgbot_category', ['tgbot'], $args);
}
add_action('init', 'sj_register_taxonomy_tgbotcategory');
