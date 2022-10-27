<?php

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

add_action( 'woocommerce_before_main_content', function () {
	echo '<div class="container">';
}, 10 );
add_action( 'woocommerce_after_main_content', function () {
	echo '</div>';
}, 10 );

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 5 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_breadcrumb', 9 );
