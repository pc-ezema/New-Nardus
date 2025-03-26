<?php
/***** Active Plugin ********/
add_action( 'tgmpa_register', 'broxi_register_required_plugins' );
function broxi_register_required_plugins() {
    $plugins = array(
		array(
            'name'               => esc_html__('Woocommerce', 'broxi'), 
            'slug'               => 'woocommerce', 
            'required'           => false
        ),
		array(
            'name'      		 => esc_html__('Elementor', 'broxi'),
            'slug'     			 => 'elementor',
            'required' 			 => false
        ),		
		array(
            'name'               => esc_html__('Revolution Slider', 'broxi'), 
			'slug'               => 'revslider',
			'source'             => get_template_directory() . '/plugins/revslider.zip', 
			'required'           => true, 
        ),
		array(
            'name'               => esc_html__('Wpbingo Core', 'broxi'), 
            'slug'               => 'wpbingo', 
            'source'             => get_template_directory() . '/plugins/wpbingo.zip',
            'required'           => true, 
        ),			
		array(
            'name'               => esc_html__('Redux Framework', 'broxi'), 
            'slug'               => 'redux-framework', 
            'required'           => false
        ),			
		array(
            'name'      		 => esc_html__('Contact Form 7', 'broxi'),
            'slug'     			 => 'contact-form-7',
            'required' 			 => false
        ),	
		array(
            'name'     			 => esc_html__('YITH Woocommerce Wishlist', 'broxi'),
            'slug'      		 => 'yith-woocommerce-wishlist',
            'required' 			 => false
        ),
		array(
            'name'      		 => esc_html__('YITH Woocommerce Compare', 'broxi'),
            'slug'      		 => 'yith-woocommerce-compare',
            'required'			 => false
        ),		
		array(
            'name'     			 => esc_html__('WooCommerce Variation Swatches', 'broxi'),
            'slug'      		 => 'variation-swatches-for-woocommerce',
            'required' 			 => false
        ),
    );
    $config = array();
    tgmpa( $plugins, $config );
}