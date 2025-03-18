<?php
/**
 * Broxi Settings Options
 */
if (!class_exists('Redux_Framework_broxi_settings')) {
    class Redux_Framework_broxi_settings {
        public $args        = array();
        public $sections    = array();
        public $theme;
        public $ReduxFramework;
        public function __construct() {
            if (!class_exists('ReduxFramework')) {
                return;
            }
            // This is needed. Bah WordPress bugs.  ;)
            if (  true == Redux_Helpers::isTheme(__FILE__) ) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);
            }
        }
        public function initSettings() {
            $this->theme = wp_get_theme();
            // Set the default arguments
            $this->setArguments();
            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();
            // Create the sections and fields
            $this->setSections();
            if (!isset($this->args['opt_name'])) { // No errors please
                return;
            }
            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
			$custom_font = broxi_get_config('custom_font',false);
			if($custom_font != 1){
				remove_action( 'wp_head', array( $this->ReduxFramework, '_output_css' ),150 );
			}
        }
        function compiler_action($options, $css, $changed_values) {
        }
        function dynamic_section($sections) {
            return $sections;
        }
        function change_arguments($args) {
            return $args;
        }
        function change_defaults($defaults) {
            return $defaults;
        }
        function remove_demo() {
        }
        public function setSections() {
            $page_layouts = broxi_options_layouts();
            $sidebars = broxi_options_sidebars();
            $broxi_header_type = broxi_options_header_types();
            $broxi_banners_effect = broxi_options_banners_effect();
            // General Settings  ------------
            $this->sections[] = array(
                'icon' => 'fa fa-home',
                'icon_class' => 'icon',
                'title' => esc_html__('General', 'broxi'),
                'fields' => array(                
                )
            );  
            // Layout Settings
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Layout', 'broxi'),
                'fields' => array(
                    array(
                        'id' => 'background_img',
                        'type' => 'media',
                        'title' => esc_html__('Background Image', 'broxi'),
                        'sub_desc' => '',
                        'default' => ''
                    ),
                    array(
                        'id'=>'show-newletter',
                        'type' => 'switch',
                        'title' => esc_html__('Show Newletter Form', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Show', 'broxi'),
                        'off' => esc_html__('Hide', 'broxi'),
                    ),
                    array(
                        'id' => 'background_newletter_img',
                        'type' => 'media',
                        'title' => esc_html__('Popup Newletter Image', 'broxi'),
                        'url'=> true,
                        'readonly' => false,
                        'sub_desc' => '',
                        'default' => array(
                            'url' => get_template_directory_uri() . '/images/newsletter-image.jpg'
                        )
                    ),
                    array(
                            'id' => 'back_active',
                            'type' => 'switch',
                            'title' => esc_html__('Back to top', 'broxi'),
                            'sub_desc' => '',
                            'desc' => '',
                            'default' => '1'// 1 = on | 0 = off
                            ),                          
                    array(
                            'id' => 'direction',
                            'type' => 'select',
                            'title' => esc_html__('Direction', 'broxi'),
                            'options' => array( 'ltr' => esc_html__('Left to Right', 'broxi'), 'rtl' => esc_html__('Right to Left', 'broxi') ),
                            'default' => 'ltr'
                        )        
                )
            );
            // Logo & Icons Settings
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Logo & Icons', 'broxi'),
                'fields' => array(
                    array(
                        'id'=>'sitelogo',
                        'type' => 'media',
                        'compiler'  => 'true',
                        'mode'      => false,
                        'title' => esc_html__('Logo', 'broxi'),
                        'desc'      => esc_html__('Upload Logo image default here.', 'broxi'),
                        'default' => array(
                            'url' => get_template_directory_uri() . '/images/logo/logo.png'
                        )
                    )
                )
            );
			//Vertical Menu
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'subsection' => true,
                'title' => esc_html__('Vertical Menu', 'broxi'),
                'fields' => array( 
                    array(
                        'id'        => 'max_number_1530',
                        'type'      => 'text',
                        'title'     => esc_html__('Max number on screen >= 1530px', 'broxi'),
                        'default'   => '12'
                    ),
                    array(
                        'id'        => 'max_number_1200',
                        'type'      => 'text',
                        'title'     => esc_html__('Max number on on screen >= 1200px', 'broxi'),
                        'default'   => '8'
                    ),
					array(
                        'id'        => 'max_number_991',
                        'type'      => 'text',
                        'title'     => esc_html__('Max number on on screen >= 991px', 'broxi'),
                        'default'   => '6'
                    )
                )
            );
            // Header Settings
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Header', 'broxi'),
                'fields' => array(
                    array(
                        'id'=>'header_style',
                        'type' => 'image_select',
                        'full_width' => true,
                        'title' => esc_html__('Header Type', 'broxi'),
                        'options' => $broxi_header_type,
                        'default' => '4'
                    ),
                    array(
                        'id'=>'show-header-top',
                        'type' => 'switch',
                        'title' => esc_html__('Show Header Top', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'show-searchform',
                        'type' => 'switch',
                        'title' => esc_html__('Show Search Form', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'show-ajax-search',
                        'type' => 'switch',
                        'title' => esc_html__('Show Ajax Search', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi')
                    ),
                    array(
                        'id'=>'limit-ajax-search',
                        'type' => 'text',
                        'title' => esc_html__('Limit Of Result Search', 'broxi'),
						'default' => 6,
						'required' => array('show-ajax-search','equals',true)
                    ),					
                    array(
                        'id'=>'search-cats',
                        'type' => 'switch',
                        'title' => esc_html__('Show Categories', 'broxi'),
                        'required' => array('search-type','equals',array('post', 'product')),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'show-wishlist',
                        'type' => 'switch',
                        'title' => esc_html__('Show Wishlist', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
					array(
                        'id'=>'show-menutop',
                        'type' => 'switch',
                        'title' => esc_html__('Show Menu Top', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
					array(
                        'id'=>'show-currency',
                        'type' => 'switch',
                        'title' => esc_html__('Show Currency', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
					array(
                        'id'=>'show-compare',
                        'type' => 'switch',
                        'title' => esc_html__('Show Compare', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
					array(
                        'id'=>'show-minicart',
                        'type' => 'switch',
                        'title' => esc_html__('Show Mini Cart', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
					array(
                        'id'=>'cart-style',
						'type' => 'button_set',
                        'title' => esc_html__('Cart Style', 'broxi'),
                        'options' => array('dropdown' => esc_html__('Dropdown', 'broxi'),
											'popup' => esc_html__('Popup', 'broxi')),
						'default' => 'dropdown',
						'required' => array('show-minicart','equals',true),
                    ),
                    array(
                        'id'=>'enable-sticky-header',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Sticky Header', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),		
                    array(
                        'id'=>'phone',
                        'type' => 'text',
                        'title' => esc_html__('Header Phone', 'broxi'),
                        'default' => ''
                    ),
					array(
                        'id'=>'email',
                        'type' => 'text',
                        'title' => esc_html__('Header Email', 'broxi'),
                        'default' => ''
                    ),
					array(
                        'id'=>'ship',
                        'type' => 'text',
                        'title' => esc_html__('Shipping', 'broxi'),
                        'default' => ''
                    ),
                    array(
                        'id'=>'link-sale',
                        'type' => 'text',
                        'title' => esc_html__('Flash Sale link', 'broxi'),
                        'default' => '#'
                    ),
                    array(
                        'id'=>'link-store',
                        'type' => 'text',
                        'title' => esc_html__('Our Store link', 'broxi'),
                        'default' => '#'
                    ),
                )
            );
            // Footer Settings
            $footers = broxi_get_footers();
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Footer', 'broxi'),
                'fields' => array(
                    array(
                        'id' => 'footer_style',
                        'type' => 'image_select',
                        'title' => esc_html__('Footer Style', 'broxi'),
                        'sub_desc' => esc_html__( 'Select Footer Style', 'broxi' ),
                        'desc' => '',
                        'options' => $footers,
                        'default' => '32'
                    ),
                )
            );
            // Copyright Settings
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Copyright', 'broxi'),
                'fields' => array(
                    array(
                        'id' => "footer-copyright",
                        'type' => 'textarea',
                        'title' => esc_html__('Copyright', 'broxi'),
                        'default' => sprintf( wp_kses('&copy; Copyright %s. All Rights Reserved.', 'broxi'), date('Y') )
                    ),
                    array(
                        'id'=>'footer-payments',
                        'type' => 'switch',
                        'title' => esc_html__('Show Payments Logos', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'footer-payments-image',
                        'type' => 'media',
                        'url'=> true,
                        'readonly' => false,
                        'title' => esc_html__('Payments Image', 'broxi'),
                        'required' => array('footer-payments','equals','1'),
                        'default' => array(
                            'url' => get_template_directory_uri() . '/images/payments.png'
                        )
                    ),
                    array(
                        'id'=>'footer-payments-image-alt',
                        'type' => 'text',
                        'title' => esc_html__('Payments Image Alt', 'broxi'),
                        'required' => array('footer-payments','equals','1'),
                        'default' => ''
                    ),
                    array(
                        'id'=>'footer-payments-link',
                        'type' => 'text',
                        'title' => esc_html__('Payments Link URL', 'broxi'),
                        'required' => array('footer-payments','equals','1'),
                        'default' => ''
                    )
                )
            );
            // Page Title Settings
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Page Title', 'broxi'),
                'fields' => array(
                    array(
                        'id'=>'page_title',
                        'type' => 'switch',
                        'title' => esc_html__('Show Page Title', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'page_title_bg',
                        'type' => 'media',
                        'url'=> true,
                        'readonly' => false,
                        'title' => esc_html__('Background', 'broxi'),
                        'required' => array('page_title','equals', true),
	                    'default' => array(
                            'url' => "",
                        )							
                    ),
                    array(
                        'id' => 'breadcrumb',
                        'type' => 'switch',
                        'title' => esc_html__('Show Breadcrumb', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                        'required' => array('page_title','equals', true),
                    ),
                )
            );
            // 404 Page Settings
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('404 Error', 'broxi'),
                'fields' => array(
                    array(
                        'id'=>'title-error',
                        'type' => 'text',
                        'title' => esc_html__('Content Page 404', 'broxi'),
                        'desc' => esc_html__('Input a block slug name', 'broxi'),
                        'default' => '404'
                    ),
					array(
                        'id'=>'sub-title',
                        'type' => 'text',
                        'title' => esc_html__('Content Page 404', 'broxi'),
                        'desc' => esc_html__('Input a block slug name', 'broxi'),
                        'default' => "Oops! That page can't be found."
                    ), 					
                    array(
                        'id'=>'sub-error',
                        'type' => 'text',
                        'title' => esc_html__('Content Page 404', 'broxi'),
                        'desc' => esc_html__('Input a block slug name', 'broxi'),
                        'default' => 'Sorry, but the page you are looking for is not found. Please, make sure you have typed the current URL.'
                    ),               
                    array(
                        'id'=>'btn-error',
                        'type' => 'text',
                        'title' => esc_html__('Button Page 404', 'broxi'),
                        'desc' => esc_html__('Input a block slug name', 'broxi'),
                        'default' => 'Go To Home'
                    )                      
                )
            );
            // Social Share Settings
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Social Share', 'broxi'),
                'fields' => array(
                    array(
                        'id'=>'social-share',
                        'type' => 'switch',
                        'title' => esc_html__('Show Social Links', 'broxi'),
                        'desc' => esc_html__('Show social links in post and product, page, portfolio, etc.', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'share-fb',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Facebook Share', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'share-tw',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Twitter Share', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'share-linkedin',
                        'type' => 'switch',
                        'title' => esc_html__('Enable LinkedIn Share', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'share-pinterest',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Pinterest Share', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                )
            );
            $this->sections[] = array(
				'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Socials Link', 'broxi'),
                'fields' => array(
                    array(
                        'id'=>'socials_link',
                        'type' => 'switch',
                        'title' => esc_html__('Enable Socials link', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'link-fb',
                        'type' => 'text',
                        'title' => esc_html__('Enter Facebook link', 'broxi'),
						'default' => '#'
                    ),
                    array(
                        'id'=>'link-tw',
                        'type' => 'text',
                        'title' => esc_html__('Enter Twitter link', 'broxi'),
						'default' => '#'
                    ),
                    array(
                        'id'=>'link-linkedin',
                        'type' => 'text',
                        'title' => esc_html__('Enter LinkedIn link', 'broxi'),
						'default' => '#'
                    ),
                    array(
                        'id'=>'link-youtube',
                        'type' => 'text',
                        'title' => esc_html__('Enter Youtube link', 'broxi'),
						'default' => '#'
                    ),
                    array(
                        'id'=>'link-pinterest',
                        'type' => 'text',
                        'title' => esc_html__('Enter Pinterest link', 'broxi'),
						'default' => '#'
                    ),
                    array(
                        'id'=>'link-instagram',
                        'type' => 'text',
                        'title' => esc_html__('Enter Instagram link', 'broxi'),
						'default' => '#'
                    ),
                )
            );			
            //     The end -----------
            // Styling Settings  -------------
            $this->sections[] = array(
                'icon' => 'icofont icofont-brand-appstore',
                'icon_class' => 'icon',
                'title' => esc_html__('Styling', 'broxi'),
                'fields' => array(              
                )
            );  
            // Color & Effect Settings
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Color & Effect', 'broxi'),
                'fields' => array(
                    array(
                        'id'=>'compile-css',
                        'type' => 'switch',
                        'title' => esc_html__('Compile Css', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),					
                    array(
                      'id' => 'main_theme_color',
                      'type' => 'color',
                      'title' => esc_html__('Main Theme Color', 'broxi'),
                      'subtitle' => esc_html__('Select a main color for your site.', 'broxi'),
                      'default' => '#222222',
                      'transparent' => false,
					  'required' => array('compile-css','equals',array(true)),
                    ),      
                    array(
                        'id'=>'show-loading-overlay',
                        'type' => 'switch',
                        'title' => esc_html__('Loading Overlay', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Show', 'broxi'),
                        'off' => esc_html__('Hide', 'broxi'),
                    ),
                    array(
                        'id'=>'banners_effect',
                        'type' => 'image_select',
                        'full_width' => true,
                        'title' => esc_html__('Banner Effect', 'broxi'),
                        'options' => $broxi_banners_effect,
                        'default' => 'banners-effect-1'
                    )                   
                )
            );
            // Typography Settings
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Typography', 'broxi'),
                'fields' => array(
                    array(
                        'id'=>'custom_font',
                        'type' => 'switch',
                        'title' => esc_html__('Custom Font', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),				
                    array(
                        'id'=>'select-google-charset',
                        'type' => 'switch',
                        'title' => esc_html__('Select Google Font Character Sets', 'broxi'),
                        'default' => false,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
						'required' => array('custom_font','equals',true),
                    ),
                    array(
                        'id'=>'google-charsets',
                        'type' => 'button_set',
                        'title' => esc_html__('Google Font Character Sets', 'broxi'),
                        'multi' => true,
                        'required' => array('select-google-charset','equals',true),
                        'options'=> array(
                            'cyrillic' => 'Cyrrilic',
                            'cyrillic-ext' => 'Cyrrilic Extended',
                            'greek' => 'Greek',
                            'greek-ext' => 'Greek Extended',
                            'khmer' => 'Khmer',
                            'latin' => 'Latin',
                            'latin-ext' => 'Latin Extneded',
                            'vietnamese' => 'Vietnamese'
                        ),
                        'default' => array('latin','greek-ext','cyrillic','latin-ext','greek','cyrillic-ext','vietnamese','khmer')
                    ),
                    array(
                        'id'=>'family_font_body',
                        'type' => 'typography',
                        'title' => esc_html__('Body Font', 'broxi'),
                        'google' => true,
                        'subsets' => false,
                        'font-style' => false,
                        'text-align' => false,
						'output'      => array('body'),
                        'color' => false,
                        'default'=> array(
                            'color'=>"#777777",
                            'google'=>true,
                            'font-weight'=>'400',
                            'font-family'=>'Open Sans',
                            'font-size'=>'14px',
                            'line-height' => '22px'
                        ),
						'required' => array('custom_font','equals',true)
                    ),
                    array(
                        'id'=>'h1-font',
                        'type' => 'typography',
                        'title' => esc_html__('H1 Font', 'broxi'),
                        'google' => true,
                        'subsets' => false,
                        'font-style' => false,
                        'text-align' => false,
                        'color' 	=> false,
						'output'      => array('body h1'),
                        'default'=> array(
                            'color'=>"#1d2127",
                            'google'=>true,
                            'font-weight'=>'400',
                            'font-family'=>'Open Sans',
                            'font-size'=>'36px',
                            'line-height' => '44px'
                        ),
						'required' => array('custom_font','equals',true)
                    ),
                    array(
                        'id'=>'h2-font',
                        'type' => 'typography',
                        'title' => esc_html__('H2 Font', 'broxi'),
                        'google' => true,
                        'subsets' => false,
                        'font-style' => false,
                        'text-align' => false,
                        'color' => false,
						'output'      => array('body h2'),
                        'default'=> array(
                            'color'=>"#1d2127",
                            'google'=>true,
                            'font-weight'=>'300',
                            'font-family'=>'Open Sans',
                            'font-size'=>'30px',
                            'line-height' => '40px'
                        ),
						'required' => array('custom_font','equals',true)
                    ),
                    array(
                        'id'=>'h3-font',
                        'type' => 'typography',
                        'title' => esc_html__('H3 Font', 'broxi'),
                        'google' => true,
                        'subsets' => false,
                        'font-style' => false,
                        'text-align' => false,
                        'color' => false,
						'output'      => array('body h3'),
                        'default'=> array(
                            'color'=>"#1d2127",
                            'google'=>true,
                            'font-weight'=>'400',
                            'font-family'=>'Open Sans',
                            'font-size'=>'25px',
                            'line-height' => '32px'
                        ),
						'required' => array('custom_font','equals',true)
                    ),
                    array(
                        'id'=>'h4-font',
                        'type' => 'typography',
                        'title' => esc_html__('H4 Font', 'broxi'),
                        'google' => true,
                        'subsets' => false,
                        'font-style' => false,
                        'text-align' => false,
                        'color' => false,
						'output'      => array('body h4'),
                        'default'=> array(
                            'color'=>"#1d2127",
                            'google'=>true,
                            'font-weight'=>'400',
                            'font-family'=>'Open Sans',
                            'font-size'=>'20px',
                            'line-height' => '27px'
                        ),
						'required' => array('custom_font','equals',true)
                    ),
                    array(
                        'id'=>'h5-font',
                        'type' => 'typography',
                        'title' => esc_html__('H5 Font', 'broxi'),
                        'google' => true,
                        'subsets' => false,
                        'font-style' => false,
                        'text-align' => false,
                        'color' => false,
						'output'      => array('body h5'),
                        'default'=> array(
                            'color'=>"#1d2127",
                            'google'=>true,
                            'font-weight'=>'600',
                            'font-family'=>'Open Sans',
                            'font-size'=>'14px',
                            'line-height' => '18px'
                        ),
						'required' => array('custom_font','equals',true)
                    ),
                    array(
                        'id'=>'h6-font',
                        'type' => 'typography',
                        'title' => esc_html__('H6 Font', 'broxi'),
                        'google' => true,
                        'subsets' => false,
                        'font-style' => false,
                        'text-align' => false,
                        'color' => false,
						'output'      => array('body h6'),
                        'default'=> array(
                            'color'=>"#1d2127",
                            'google'=>true,
                            'font-weight'=>'400',
                            'font-family'=>'Open Sans',
                            'font-size'=>'14px',
                            'line-height' => '18px'
                        ),
						'required' => array('custom_font','equals',true)
                    )
                )
            );
            //     The end -----------          
            if ( class_exists( 'Woocommerce' ) ) :
                $this->sections[] = array(
                    'icon' => 'icofont icofont-cart-alt',
                    'icon_class' => 'icon',
                    'title' => esc_html__('Ecommerce', 'broxi'),
                    'fields' => array(              
                    )
                );
                $this->sections[] = array(
                    'icon' => 'icofont icofont-double-right',
                    'icon_class' => 'icon',
                    'subsection' => true,
                    'title' => esc_html__('Product Archives', 'broxi'),
                    'fields' => array(
                        array(
                            'id'=>'category_style',
                            'title' => esc_html__('Product Archives Style', 'broxi'),
                            'type' => 'select',
							'options' => array(
								'default' => esc_html__('Filter Default', 'broxi'),
                                'sidebar' => esc_html__('Sidebar', 'broxi'),       
                                'filter_drawer' => esc_html__('Filter Drawer', 'broxi'),
								'filter_dropdown' => esc_html__('Filter Dropdown', 'broxi'),
								'filter_offcanvas' => esc_html__('Filter Off Canvas', 'broxi'),
								'only_categories' => esc_html__('Shop Only Categories', 'broxi'),
                             ),
                            'default' => 'sidebar',
                        ),
						array(
                            'id'=>'shop_background',
                            'type' => 'switch',
                            'title' => esc_html__('Show Background Shop', 'broxi'),
                            'default' => false,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
						array(
						  'id' => 'shop_background_color',
						  'type' => 'color',
						  'title' => esc_html__('Background Shop Color', 'broxi'),
						  'subtitle' => esc_html__('Select a shop color for shop page.', 'broxi'),
						  'default' => '#f5f5f5',
						  'transparent' => false,
						  'required' => array('shop_background','equals',array(true)),
						),
						array(
                            'id'=>'show-subcategories',
                            'type' => 'button_set',
                            'title' => esc_html__('Show Sub Categories', 'broxi'),
                           'options' => array(
								'show' => esc_html__('Show', 'broxi'),
								'hide' => esc_html__('Hide', 'broxi'),
							),
							'default' => 'show',
                        ),
						array(
                            'id'=>'style-subcategories',
							'title' => esc_html__('Style Sub Categories', 'broxi'),
                            'type' => 'select',
							'options' => array(
								'shop_mini_categories' => esc_html__('Mini Categories', 'broxi'),
								'icon_categories' => esc_html__('Icon Categories', 'broxi'),
								'image_categories' => esc_html__('Image Categories', 'broxi'),
                             ),
                            'default' => 'mini',
							'required' => array('show-subcategories','equals','show'),
                        ),
						array(
                            'id'=>'layout_shop',
							'title' => esc_html__('Style Layout Shop', 'broxi'),
                            'type' => 'button_set',
							'options' => array(
								'1' => esc_html__('Style 1', 'broxi'),
								'2' => esc_html__('Style 2', 'broxi'),
								'3' => esc_html__('Style 3', 'broxi'),
								'4' => esc_html__('Style 4', 'broxi'),
								'5' => esc_html__('Style 5', 'broxi'),
								'6' => esc_html__('Style 6', 'broxi'),
								'7' => esc_html__('Style 7', 'broxi'),
                             ),
                            'default' => '1',
                        ),
                        array(
                            'id' => 'sub_col_large',
                            'type' => 'button_set',
                            'title' => esc_html__('Sub Categories column Desktop', 'broxi'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',  
									'5' => '5',
                                    '6' => '6'                          
                                ),
                            'default' => '4',
							'required' => array('show-subcategories','equals','show'),
                            'sub_desc' => esc_html__( 'Select number of column on Desktop Screen', 'broxi' ),
                        ),
                        array(
                            'id' => 'sub_col_medium',
                            'type' => 'button_set',
                            'title' => esc_html__('Sub Categories column Medium Desktop', 'broxi'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',  
									'5' => '5',
                                    '6' => '6'                          
                                ),
                            'default' => '3',
							'required' => array('show-subcategories','equals','show'),
                            'sub_desc' => esc_html__( 'Select number of column on Medium Desktop Screen', 'broxi' ),
                        ),
                        array(
                            'id' => 'sub_col_sm',
                            'type' => 'button_set',
                            'title' => esc_html__('Sub Categories column Ipad Screen', 'broxi'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',  
									'5' => '5',
                                    '6' => '6'                          
                                ),
                            'default' => '3',
							'required' => array('show-subcategories','equals','show'),
                            'sub_desc' => esc_html__( 'Select number of column on Ipad Screen', 'broxi' ),
                        ),						
                        array(
                            'id'=>'category-view-mode',
                            'type' => 'button_set',
                            'title' => esc_html__('View Mode', 'broxi'),
                            'options' => broxi_ct_category_view_mode(),
                            'default' => 'grid',
                        ),
                        array(
                            'id' => 'product_col_large',
                            'type' => 'button_set',
                            'title' => esc_html__('Product Listing column Desktop', 'broxi'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',                         
                                    '6' => '6'                          
                                ),
                            'default' => '4',
							'required' => array('category-view-mode','equals','grid'),
                            'sub_desc' => esc_html__( 'Select number of column on Desktop Screen', 'broxi' ),
                        ),
                        array(
                            'id' => 'product_col_medium',
                            'type' => 'button_set',
                            'title' => esc_html__('Product Listing column Medium Desktop', 'broxi'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',                         
                                    '6' => '6'                          
                                ),
                            'default' => '3',
							'required' => array('category-view-mode','equals','grid'),
                            'sub_desc' => esc_html__( 'Select number of column on Medium Desktop Screen', 'broxi' ),
                        ),
                        array(
                            'id' => 'product_col_sm',
                            'type' => 'button_set',
                            'title' => esc_html__('Product Listing column Ipad Screen', 'broxi'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',                         
                                    '6' => '6'                          
                                ),
                            'default' => '3',
							'required' => array('category-view-mode','equals','grid'),
                            'sub_desc' => esc_html__( 'Select number of column on Ipad Screen', 'broxi' ),
                        ),
						array(
                            'id' => 'product_col_xs',
                            'type' => 'button_set',
                            'title' => esc_html__('Product Listing column Mobile Screen', 'broxi'),
                            'options' => array(
									'1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',                         
                                ),
                            'default' => '2',
							'required' => array('category-view-mode','equals','grid'),
                            'sub_desc' => esc_html__( 'Select number of column on Mobile Screen', 'broxi' ),
                        ),
						array(
                            'id'=>'show-bestseller-category',
                            'type' => 'switch',
                            'title' => esc_html__('Show Bestseller on Page Category', 'broxi'),
                            'default' => false,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
						 array(
                            'id' => 'bestseller_limit',
                            'type' => 'text',
                            'title' => esc_html__('Shop product Bestseller', 'broxi'),
                            'default' => '9',
							'required' => array('show-bestseller-category','equals',true),
                        ),
                        array(
                            'id'=>'show-banner-category',
                            'type' => 'switch',
                            'title' => esc_html__('Show Banner Category', 'broxi'),
                            'default' => false,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
                        array(
                            'id'=>'woo-show-rating',
                            'type' => 'switch',
                            'title' => esc_html__('Show Rating in Woocommerce Products Widget', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),						
						array(
                            'id'=>'show-category',
                            'type' => 'switch',
                            'title' => esc_html__('Show Category', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
                        array(
                            'id' => 'product_count',
                            'type' => 'text',
                            'title' => esc_html__('Shop pages show at product', 'broxi'),
                            'default' => '12',
                            'sub_desc' => esc_html__( 'Type Count Product Per Shop Page', 'broxi' ),
                        ),						
                        array(
                            'id'=>'category-image-hover',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Image Hover Effect', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
                        array(
                            'id'=>'category-hover',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Hover Effect', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
                        array(
                            'id'=>'product-wishlist',
                            'type' => 'switch',
                            'title' => esc_html__('Show Wishlist', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
						array(
							'id'=>'product-compare',
							'type' => 'switch',
							'title' => esc_html__('Show Compare', 'broxi'),
							'default' => false,
							'on' => esc_html__('Yes', 'broxi'),
							'off' => esc_html__('No', 'broxi'),
						),						
                        array(
                            'id'=>'product_quickview',
                            'type' => 'switch',
                            'title' => esc_html__('Show Quick View', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi')
                        ),
                        array(
                            'id'=>'product-quickview-label',
                            'type' => 'text',
                            'required' => array('product-quickview','equals',true),
                            'title' => esc_html__('"Quick View" Text', 'broxi'),
                            'default' => ''
                        ),
						array(
                            'id'=>'product-countdown',
                            'type' => 'switch',
                            'title' => esc_html__('Show Product Countdown', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi')
                        ),
						array(
                            'id'=>'product-attribute',
                            'type' => 'switch',
                            'title' => esc_html__('Show Product Attribute', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi')
                        ),
                    )
                );
                $this->sections[] = array(
                    'icon' => 'icofont icofont-double-right',
                    'icon_class' => 'icon',
                    'subsection' => true,
                    'title' => esc_html__('Single Product', 'broxi'),
                    'fields' => array(
                        array(
                            'id'=>'sidebar_detail_product',
                            'type' => 'image_select',
                            'title' => esc_html__('Page Layout', 'broxi'),
                            'options' => $page_layouts,
                            'default' => 'full'
                        ),
                        array(
                            'id'=>'product-stock',
                            'type' => 'switch',
                            'title' => esc_html__('Show "Out of stock" Status', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
						array(
                            'id'=>'show-extra-sidebar',
                            'type' => 'switch',
                            'title' => esc_html__('Show Extra Sidebar', 'broxi'),
                            'default' => false,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
						array(
                            'id'=>'show-featured-icon',
                            'type' => 'switch',
                            'title' => esc_html__('Show Featured Icon', 'broxi'),
                            'default' => false,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
						array(
                            'id'=>'show-sticky-cart',
                            'type' => 'switch',
                            'title' => esc_html__('Show Sticky Cart Product', 'broxi'),
                            'default' => false,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
						array(
                            'id'=>'show-brands',
                            'type' => 'switch',
                            'title' => esc_html__('Show Brands', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
						array(
                            'id'=>'show-offer',
                            'type' => 'switch',
                            'title' => esc_html__('Show Offer List', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),						
						array(
                            'id'=>'show-countdown',
                            'type' => 'switch',
                            'title' => esc_html__('Show CountDown', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
                        array(
                            'id'=>'product-short-desc',
                            'type' => 'switch',
                            'title' => esc_html__('Show Short Description', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
						array(
							'id' => 'length-product-short-desc',
							'type' => 'text',
							'title' => esc_html__('Length Short Description Quickview', 'broxi'),
							'required' => array('product-short-desc','equals',true),
							'default' =>'25',
						),
                        array(
                            'id'=>'show-trust-bages',
                            'type' => 'switch',
                            'title' => esc_html__('Show Trust Bages Product', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
						array(
							'id' => 'trust-bages',
							'type' => 'media',
							'title' => esc_html__('Trust Bages', 'broxi'),
							'url'=> true,
							'readonly' => false,
							'required' => array('show-trust-bages','equals',true),
							'sub_desc' => '',
							'default' => array(
								'url' => ""
							)
						),					
                        array(
                            'id'=>'product-related',
                            'type' => 'switch',
                            'title' => esc_html__('Show Related Product', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
                        array(
                            'id'=>'product-related-count',
                            'type' => 'text',
                            'required' => array('product-related','equals',true),
                            'title' => esc_html__('Related Product Count', 'broxi'),
                            'default' => '10'
                        ),
                        array(
                            'id'=>'product-related-cols',
                            'type' => 'button_set',
                            'required' => array('product-related','equals',true),
                            'title' => esc_html__('Related Product Columns', 'broxi'),
                            'options' => broxi_ct_related_product_columns(),
                            'default' => '4',
                        ),
                        array(
                            'id'=>'product-upsell',
                            'type' => 'switch',
                            'title' => esc_html__('Show Upsell Products', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),                      
                        array(
                            'id'=>'product-upsell-count',
                            'type' => 'text',
                            'required' => array('product-upsell','equals',true),
                            'title' => esc_html__('Upsell Products Count', 'broxi'),
                            'default' => '10'
                        ),
                        array(
                            'id'=>'product-upsell-cols',
                            'type' => 'button_set',
                            'required' => array('product-upsell','equals',true),
                            'title' => esc_html__('Upsell Product Columns', 'broxi'),
                            'options' => broxi_ct_related_product_columns(),
                            'default' => '3',
                        ),
                        array(
                            'id'=>'product-crosssells',
                            'type' => 'switch',
                            'title' => esc_html__('Show Crooss Sells Products', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),                      
                        array(
                            'id'=>'product-crosssells-count',
                            'type' => 'text',
                            'required' => array('product-crosssells','equals',true),
                            'title' => esc_html__('Crooss Sells Products Count', 'broxi'),
                            'default' => '10'
                        ),
                        array(
                            'id'=>'product-crosssells-cols',
                            'type' => 'button_set',
                            'required' => array('product-crosssells','equals',true),
                            'title' => esc_html__('Crooss Sells Product Columns', 'broxi'),
                            'options' => broxi_ct_related_product_columns(),
                            'default' => '3',
                        ),						
                        array(
                            'id'=>'product-hot',
                            'type' => 'switch',
                            'title' => esc_html__('Show "Hot" Label', 'broxi'),
                            'desc' => esc_html__('Will be show in the featured product.', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
                        array(
                            'id'=>'product-hot-label',
                            'type' => 'text',
                            'required' => array('product-hot','equals',true),
                            'title' => esc_html__('"Hot" Text', 'broxi'),
                            'default' => ''
                        ),
                        array(
                            'id'=>'product-sale',
                            'type' => 'switch',
                            'title' => esc_html__('Show "Sale" Label', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
                         array(
                            'id'=>'product-sale-percent',
                            'type' => 'switch',
                            'required' => array('product-sale','equals',true),
                            'title' => esc_html__('Show Sale Price Percentage', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),  
                        array(
                            'id'=>'product-share',
                            'type' => 'switch',
                            'title' => esc_html__('Show Social Share Links', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
						array(
                            'id'=>'size-guide',
                            'type' => 'switch',
                            'title' => esc_html__('Show Size Guide', 'broxi'),
                            'default' => false,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
						array(
							'id' => 'img-size-guide',
							'type' => 'media',
							'title' => esc_html__('Image Size Guide', 'broxi'),
							'url'=> true,
							'readonly' => false,
							'required' => array('size-guide','equals',true),
							'sub_desc' => '',
							'default' => array(
								'url' => ""
							)
						),
                    )
                );
                $this->sections[] = array(
                    'icon' => 'icofont icofont-double-right',
                    'icon_class' => 'icon',
                    'subsection' => true,
                    'title' => esc_html__('Image Product', 'broxi'),
                    'fields' => array(
                        array(
                            'id'=>'product-thumbs',
                            'type' => 'switch',
                            'title' => esc_html__('Show Thumbnails', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
                        array(
                            'id'=>'position-thumbs',
                            'type' => 'button_set',
                            'title' => esc_html__('Position Thumbnails', 'broxi'),
                            'options' => array('left' => esc_html__('Left', 'broxi'),
												'right' => esc_html__('Right', 'broxi'),
												'bottom' => esc_html__('Bottom', 'broxi'),
												'outsite' => esc_html__('Outsite', 'broxi')),
                            'default' => 'bottom',
							'required' => array('product-thumbs','equals',true),
                        ),						
                        array(
                            'id' => 'product-thumbs-count',
                            'type' => 'button_set',
                            'title' => esc_html__('Thumbnails Count', 'broxi'),
                            'options' => array(
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4', 
									'5' => '5', 									
                                    '6' => '6'                          
                                ),
							'default' => '4',
							'required' => array('product-thumbs','equals',true),
                        ),
                        array(
                            'id'=>'product-image-popup',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Image Popup', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),						
                        array(
                            'id'=>'layout-thumbs',
                            'type' => 'button_set',
                            'title' => esc_html__('Layouts Thumbnails', 'broxi'),
                            'options' => array('zoom' => esc_html__('Zoom', 'broxi'),
												'scroll' => esc_html__('Scroll', 'broxi'),
												'sticky' => esc_html__('Sticky', 'broxi'),
												'sticky2' => esc_html__('Sticky 2', 'broxi'),
												'slider' => esc_html__('Slider', 'broxi'),
												'large_grid' => esc_html__('Large Grid', 'broxi'),
												'small_grid' => esc_html__('Small Grid', 'broxi'),
											),	
                            'default' => 'zoom',
                        ),
						array(
                            'id'=>'background',
                            'type' => 'switch',
                            'title' => esc_html__('Show Background Product Image', 'broxi'),
                            'default' => false,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
                        ),
                        array(
                            'id'=>'zoom-type',
                            'type' => 'button_set',
                            'title' => esc_html__('Zoom Type', 'broxi'),
                            'options' => array('inner' => esc_html__('Inner', 'broxi'), 'lens' => esc_html__('Lens', 'broxi')),
                            'default' => 'inner',
							'required' => array('layout-thumbs','equals',"zoom"),
                        ),
                        array(
                            'id'=>'zoom-scroll',
                            'type' => 'switch',
                            'title' => esc_html__('Scroll Zoom', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
							'required' => array('layout-thumbs','equals',"zoom"),
                        ),
                        array(
                            'id'=>'zoom-border',
                            'type' => 'text',
                            'title' => esc_html__('Border Size', 'broxi'),
                            'default' => '2',
							'required' => array('layout-thumbs','equals',"zoom"),
                        ),
                        array(
                            'id'=>'zoom-border-color',
                            'type' => 'color',
                            'title' => esc_html__('Border Color', 'broxi'),
                            'default' => '#f9b61e',
							'required' => array('layout-thumbs','equals',"zoom"),
                        ),                      
                        array(
                            'id'=>'zoom-lens-size',
                            'type' => 'text',
                            'required' => array('zoom-type','equals',array('lens')),
                            'title' => esc_html__('Lens Size', 'broxi'),
                            'default' => '200',
							'required' => array('layout-thumbs','equals',"zoom"),
                        ),
                        array(
                            'id'=>'zoom-lens-shape',
                            'type' => 'button_set',
                            'required' => array('zoom-type','equals',array('lens')),
                            'title' => esc_html__('Lens Shape', 'broxi'),
                            'options' => array('round' => esc_html__('Round', 'broxi'), 'square' => esc_html__('Square', 'broxi')),
                            'default' => 'square',
							'required' => array('layout-thumbs','equals',"zoom"),
                        ),
                        array(
                            'id'=>'zoom-contain-lens',
                            'type' => 'switch',
                            'required' => array('zoom-type','equals',array('lens')),
                            'title' => esc_html__('Contain Lens Zoom', 'broxi'),
                            'default' => true,
                            'on' => esc_html__('Yes', 'broxi'),
                            'off' => esc_html__('No', 'broxi'),
							'required' => array('layout-thumbs','equals',"zoom"),
                        ),
                        array(
                            'id'=>'zoom-lens-border',
                            'type' => 'text',
                            'required' => array('zoom-type','equals',array('lens')),
                            'title' => esc_html__('Lens Border', 'broxi'),
                            'default' => true,
							'required' => array('layout-thumbs','equals',"zoom")
                        ),
                    )
                );
            endif;
            // Blog Settings  -------------
            $this->sections[] = array(
                'icon' => 'icofont icofont-ui-copy',
                'icon_class' => 'icon',
                'title' => esc_html__('Blog', 'broxi'),
                'fields' => array(              
                )
            );      
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Blog & Post Archives', 'broxi'),
                'fields' => array(
                    array(
                        'id'=>'post-format',
                        'type' => 'switch',
                        'title' => esc_html__('Show Post Format', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'hot-label',
                        'type' => 'text',
                        'title' => esc_html__('"HOT" Text', 'broxi'),
                        'desc' => esc_html__('Hot post label', 'broxi'),
                        'default' => ''
                    ),
                    array(
                        'id'=>'sidebar_blog',
                        'type' => 'image_select',
                        'title' => esc_html__('Page Layout', 'broxi'),
                        'options' => $page_layouts,
                        'default' => 'left'
                    ),
                    array(
                        'id' => 'layout_blog',
                        'type' => 'button_set',
                        'title' => esc_html__('Layout Blog', 'broxi'),
                        'options' => array(
                                'list'  =>  esc_html__( 'List', 'broxi' ),
                                'grid' =>  esc_html__( 'Grid', 'broxi' ),
								'masonry' =>  esc_html__( 'Masonry', 'broxi' )	
                        ),
                        'default' => 'list',
                        'sub_desc' => esc_html__( 'Select style layout blog', 'broxi' ),
                    ),
                    array(
                        'id' => 'blog_col_large',
                        'type' => 'button_set',
                        'title' => esc_html__('Blog Listing column Desktop', 'broxi'),
                        'required' => array('layout_blog','equals','grid'),
                        'options' => array(
                                '2' => '2',
                                '3' => '3',
                                '4' => '4',                         
                                '6' => '6'                          
                            ),
                        'default' => '4',
                        'sub_desc' => esc_html__( 'Select number of column on Desktop Screen', 'broxi' ),
                    ),
                    array(
                        'id' => 'blog_col_medium',
                        'type' => 'button_set',
                        'title' => esc_html__('Blog Listing column Medium Desktop', 'broxi'),
                        'required' => array('layout_blog','equals','grid'),
                        'options' => array(
                                '2' => '2',
                                '3' => '3',
                                '4' => '4',                         
                                '6' => '6'                          
                            ),
                        'default' => '3',
                        'sub_desc' => esc_html__( 'Select number of column on Medium Desktop Screen', 'broxi' ),
                    ),   
                    array(
                        'id' => 'blog_col_sm',
                        'type' => 'button_set',
                        'title' => esc_html__('Blog Listing column Ipad Screen', 'broxi'),
                        'required' => array('layout_blog','equals','grid'),
                        'options' => array(
                                '2' => '2',
                                '3' => '3',
                                '4' => '4',                         
                                '6' => '6'                          
                            ),
                        'default' => '3',
                        'sub_desc' => esc_html__( 'Select number of column on Ipad Screen', 'broxi' ),
                    ),   					
                    array(
                        'id'=>'archives-author',
                        'type' => 'switch',
                        'title' => esc_html__('Show Author', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'archives-comments',
                        'type' => 'switch',
                        'title' => esc_html__('Show Count Comments', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),                  
                    array(
                        'id'=>'blog-excerpt',
                        'type' => 'switch',
                        'title' => esc_html__('Show Excerpt', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'list-blog-excerpt-length',
                        'type' => 'text',
                        'required' => array('blog-excerpt','equals',true),
                        'title' => esc_html__('List Excerpt Length', 'broxi'),
                        'desc' => esc_html__('The number of words', 'broxi'),
                        'default' => '50',
                    ),
                    array(
                        'id'=>'grid-blog-excerpt-length',
                        'type' => 'text',
                        'required' => array('blog-excerpt','equals',true),
                        'title' => esc_html__('Grid Excerpt Length', 'broxi'),
                        'desc' => esc_html__('The number of words', 'broxi'),
                        'default' => '12',
                    ),                  
                )
            );
            $this->sections[] = array(
                'icon' => 'icofont icofont-double-right',
                'icon_class' => 'icon',
                'subsection' => true,
                'title' => esc_html__('Single Post', 'broxi'),
                'fields' => array(
                    array(
                        'id'=>'post-single-layout',
                        'type' => 'image_select',
                        'title' => esc_html__('Page Layout', 'broxi'),
                        'options' => $page_layouts,
                        'default' => 'left'
                    ),
                    array(
                        'id'=>'post-title',
                        'type' => 'switch',
                        'title' => esc_html__('Show Title', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'post-author',
                        'type' => 'switch',
                        'title' => esc_html__('Show Author Info', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
                    ),
                    array(
                        'id'=>'post-comments',
                        'type' => 'switch',
                        'title' => esc_html__('Show Comments', 'broxi'),
                        'default' => true,
                        'on' => esc_html__('Yes', 'broxi'),
                        'off' => esc_html__('No', 'broxi'),
					)
				)
			);	
            $this->sections[] = array(
				'id' => 'wbc_importer_section',
				'title'  => esc_html__( 'Demo Importer', 'broxi' ),
				'icon'   => 'fa fa-cloud-download',
				'desc'   => wp_kses( 'Increase your max execution time, try 40000 I know its high but trust me.<br>
				Increase your PHP memory limit, try 512MB.<br>
				1. The import process will work best on a clean install. You can use a plugin such as WordPress Reset to clear your data for you.<br>
				2. Ensure all plugins are installed beforehand, e.g. WooCommerce - any plugins that you add content to.<br>
				3. Be patient and wait for the import process to complete. It can take up to 3-5 minutes.<br>
				4. Enjoy','social' ),				
				'fields' => array(
					array(
						'id'   => 'wbc_demo_importer',
						'type' => 'wbc_importer'
					)
				)
            );			
        }
        public function setHelpTabs() {
        }
        public function setArguments() {
            $theme = wp_get_theme(); // For use with some settings. Not necessary.
            $this->args = array(
                'opt_name'          => 'broxi_settings',
                'display_name'      => $theme->get('Name') . ' ' . esc_html__('Theme Options', 'broxi'),
                'display_version'   => esc_html__('Theme Version: ', 'broxi') . broxi_version,
                'menu_type'         => 'submenu',
                'allow_sub_menu'    => true,
                'menu_title'        => esc_html__('Theme Options', 'broxi'),
                'page_title'        => esc_html__('Theme Options', 'broxi'),
                'footer_credit'     => esc_html__('Theme Options', 'broxi'),
                'google_api_key' => 'AIzaSyAX_2L_UzCDPEnAHTG7zhESRVpMPS4ssII',
                'disable_google_fonts_link' => true,
                'async_typography'  => false,
                'admin_bar'         => false,
                'admin_bar_icon'       => 'dashicons-admin-generic',
                'admin_bar_priority'   => 50,
                'global_variable'   => '',
                'dev_mode'          => false,
                'customizer'        => false,
                'compiler'          => false,
                'page_priority'     => null,
                'page_parent'       => 'themes.php',
                'page_permissions'  => 'manage_options',
                'menu_icon'         => '',
                'last_tab'          => '',
                'page_icon'         => 'icon-themes',
                'page_slug'         => 'broxi_settings',
                'save_defaults'     => true,
                'default_show'      => false,
                'default_mark'      => '',
                'show_import_export' => true,
                'show_options_object' => false,
                'transient_time'    => 60 * MINUTE_IN_SECONDS,
                'output'            => true,
                'output_tag'        => true,
                'database'              => '',
                'system_info'           => false,
                'hints' => array(
                    'icon'          => 'icon-question-sign',
                    'icon_position' => 'right',
                    'icon_color'    => 'lightgray',
                    'icon_size'     => 'normal',
                    'tip_style'     => array(
                        'color'         => 'light',
                        'shadow'        => true,
                        'rounded'       => false,
                        'style'         => '',
                    ),
                    'tip_position'  => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect'    => array(
                        'show'          => array(
                            'effect'        => 'slide',
                            'duration'      => '500',
                            'event'         => 'mouseover',
                        ),
                        'hide'      => array(
                            'effect'    => 'slide',
                            'duration'  => '500',
                            'event'     => 'click mouseleave',
                        ),
                    ),
                ),
                'ajax_save'                 => false,
                'use_cdn'                   => true,
            );
            // Panel Intro text -> before the form
            if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false) {
                if (!empty($this->args['global_variable'])) {
                    $v = $this->args['global_variable'];
                } else {
                    $v = str_replace('-', '_', $this->args['opt_name']);
                }
            }
            $this->args['intro_text'] = sprintf('<p style="color: #0088cc">'.wp_kses('Please regenerate again default css files in <strong>Skin > Compile Default CSS</strong> after <strong>update theme</strong>.', 'broxi').'</p>', $v);
        }           
    }
	if ( !function_exists( 'wbc_extended_example' ) ) {
		function wbc_extended_example( $demo_active_import , $demo_directory_path ) {
			reset( $demo_active_import );
			$current_key = key( $demo_active_import );	
			if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] )) {
				//Import Sliders
				if ( class_exists( 'RevSlider' ) ) {
					$wbc_sliders_array = array(
						'broxi' => array('slider-1.zip','slider-2.zip','slider-3.zip','slider-4.zip','slider-5.zip','slider-6.zip')
					);
					$wbc_slider_import = $wbc_sliders_array[$demo_active_import[$current_key]['directory']];
					if( is_array( $wbc_slider_import ) ){
						foreach ($wbc_slider_import as $slider_zip) {
							if ( !empty($slider_zip) && file_exists( $demo_directory_path.'rev_slider/'.$slider_zip ) ) {
								$slider = new RevSlider();
								$slider->importSliderFromPost( true, true, $demo_directory_path.'rev_slider/'.$slider_zip );
							}
						}
					}else{
						if ( file_exists( $demo_directory_path.'rev_slider/'.$wbc_slider_import ) ) {
							$slider = new RevSlider();
							$slider->importSliderFromPost( true, true, $demo_directory_path.'rev_slider/'.$wbc_slider_import );
						}
					}
				}				
				// Setting Menus
				$primary = get_term_by( 'name', 'Main menu', 'nav_menu' );
				$primary_vertical = get_term_by( 'name', 'Vertical Menu', 'nav_menu' );
				$primary_currency = get_term_by( 'name', 'Currency Menu', 'nav_menu' );
				$primary_language = get_term_by( 'name', 'Language Menu', 'nav_menu' );
				$primary_topbar   = get_term_by( 'name', 'Menu Topbar', 'nav_menu' );
				if ( isset( $primary->term_id ) ) {
					set_theme_mod( 'nav_menu_locations', array(
							'main_navigation' => $primary->term_id,
							'vertical_menu' => $primary_vertical->term_id,
							'currency_menu' => $primary_currency->term_id,
							'language_menu' => $primary_language->term_id,
							'topbar_menu' => $primary_topbar->term_id	
						)
					);
				}
				// Set HomePage
				$home_page = 'Home Page 1';	
				$page = get_page_by_title( $home_page );
				if ( isset( $page->ID ) ) {
					update_option( 'page_on_front', $page->ID );
					update_option( 'show_on_front', 'page' );
				}					
			}
		}
		// Uncomment the below
		add_action( 'wbc_importer_after_content_import', 'wbc_extended_example', 10, 2 );
	}
    global $reduxBroxiSettings;
    $reduxBroxiSettings = new Redux_Framework_broxi_settings();
}