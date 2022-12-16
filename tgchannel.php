<?php
/**
 * Plugin Name: TG Channels Favorites
 * Plugin URI: https://codeorder.cn/
 * Author: sj
 * Author URI: https://codeorder.cn/
 * Version: 0.0.1
 * Requires at least: 5.9
 * Requires PHP: 7.3
 * Text Domain: tgchannel
 * Domain Path: /languages
 */

function sj_custom_post_type(){
    register_post_type('tgchannel', [
        'labels'=>[
            'name' => __('Telegram Channels', 'tgchannel'),
            'singular_name' => __('Telegram Channel', 'tgchannel'),
            'add_new' => __('Add Telegram Channel', 'tgchannel'),
            'add_new_item' => __('Add Telegram Channel', 'tgchannel'),
            'edit_item' => __('Edit Telegram Channel', 'tgchannel'),
            'new_item' => __('New Telegram Channel', 'tgchannel'),
        ],
        'description' => __('Telegram Channel', 'tgchannel'),
        'public' => true,
        'menu_icon' => 'dashicons-airplane',
        'map_meta_cap' => true,
        'has_archive' => true,
        'delete_with_user' => false,
        #'show_in_rest' => true,
        'taxonomies' => ['course', 'category'],
    ]);

    register_post_type('tggroup', [
        'labels'=>[
            'name' => __('Telegram Groups', 'tgchannel'),
            'singular_name' => __('Telegram Group', 'tgchannel'),
            'add_new' => __('Add Telegram Group', 'tgchannel'),
            'add_new_item' => __('Add Telegram Group', 'tgchannel'),
            'edit_item' => __('Edit Telegram Group', 'tgchannel'),
            'new_item' => __('New Telegram Group', 'tgchannel'),
        ],
        'description' => __('Telegram Group', 'tgchannel'),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'map_meta_cap' => true,
        'has_archive' => true,
        'delete_with_user' => false,
        #'show_in_rest' => true,
        'taxonomies' => ['course', 'category'],
    ]);

    register_post_type('tgbot', [
        'labels' => [
            'name' => __('TG Bots', 'tgchannel'),
            'singular_name' => __('TG Bot', 'tgchannel'),
            'add_new' => __('Add TG Bot', 'tgchannel'),
            'add_new_item' => __('Add TG Bot', 'tgchannel'),
            'edit_item' => __('Edit TG Bot', 'tgchannel'),
            'new_item' => __('New TG Bot', 'tgchannel'),
        ],
        'description' => __('TG Bot', 'tgchannel'),
        'public' => true,
        'menu_icon' => 'dashicons-reddit',
        'map_meta_cap' => true,
        'has_archive' => true,
        'delete_with_user' => false,
        'taxonomies' => ['tgbot_category'],
    ]);
}
add_action('init', 'sj_custom_post_type');

function sj_register_taxonomy_tgbotcategory(){
    $labels = [
        'name' => __('TG Bot Categories', 'tgchannel'),
        'singular_name' => __('TG Bot Category', 'tgchannel'),
        'search_item' => __('Search TG Bot Categories', 'tgchannel'),
        'all_items' => __('All TG Bot Categories', 'tgchannel'),
        'parent_itme' => __('Parent TG Bot Category', 'tgchannel'),
        'parent_item_colon' => __('Parent TG Bot Category:', 'tgchannel'),
        'edit_item' => __('Edit TG Bot Category', 'tgchannel'),
        'update_item' => __('Update TG Bot Category', 'tgchannel'),
        'add_new_item' => __('Add New TG Bot Category', 'tgchannel'),
        'new_item_name' => __('New TG Bot Category Name', 'tgchannel'),
        'menu_name' => __('TG Bot Category', 'tgchannel'),
    ];
    $args = [
        'labels' => $labels,
        'description' => __('Telegram Bots Categories', 'tgchannel'),
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
