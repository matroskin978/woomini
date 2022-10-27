<?php

// https://woocommerce.com/document/woocommerce-theme-developer-handbook/

function woomini_setup() {
	add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'woomini_setup' );
