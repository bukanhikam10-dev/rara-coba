<?php
/**
 * BREYLEE Skincare Indonesia theme functions.
 */
if (!defined('ABSPATH')) { exit; }

function breylee_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array('height' => 120, 'width' => 300, 'flex-height' => true, 'flex-width' => true));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array('primary' => __('Menu Utama', 'breylee-skincare')));
}
add_action('after_setup_theme', 'breylee_theme_setup');

function breylee_enqueue_assets() {
    wp_enqueue_style('breylee-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&family=Poppins:wght@300;400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('breylee-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    wp_enqueue_script('breylee-tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
    wp_add_inline_script('breylee-tailwind', "tailwind.config = { theme: { extend: { colors: { 'breylee-mint':'#D4F2E7','breylee-mint-light':'#E1F5FE','breylee-mint-accent':'#00B092','breylee-teal':'#0B4F3A','breylee-emerald':'#065F46','breylee-bg':'#F8FAFC' }, fontFamily: { serif:['Playfair Display','serif'], sans:['Poppins','sans-serif'] } } } };", 'after');
    wp_enqueue_style('breylee-theme-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'breylee_enqueue_assets');
