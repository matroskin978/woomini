<?php

// https://woocommerce.com/document/woocommerce-theme-developer-handbook/

function woomini_setup() {
	add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'woomini_setup' );

function woomini_enqueue() {
	wp_enqueue_style( 'woomini-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'woomini_enqueue' );

require_once get_template_directory() . '/inc/woocommerce-hooks.php';
