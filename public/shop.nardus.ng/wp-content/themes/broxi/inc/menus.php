<?php
    /*
    *
    *	Wpbingo Framework Menu Functions
    *	------------------------------------------------
    *	Wpbingo Framework v3.0
    * 	Copyright Wpbingo Ideas 2017 - http://wpbingosite.com/
    *
    *	broxi_setup_menus()
    *
    */
    /* CUSTOM MENU SETUP
    ================================================== */
    register_nav_menus( array(
        'main_navigation' => esc_html__( 'Main Menu', 'broxi' ),
		'vertical_menu'     => esc_html__( 'Vertical Menu', 'broxi' ),
		'topbar_menu'     => esc_html__( 'Topbar Menu', 'broxi' )
    ) );
?>