<?php
/**
 * Version:            1.0.0
 * Theme Name:         broxi
 * Theme URI:          http://wpbingosite.com/themes/broxi/
 * Author:             Wpbingo
 * Author URI:         http://wpbingosite.com/
 * License:            GNU General Public License v2 or later
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php 
	global $broxi_page_id;
	$broxi_settings = broxi_global_settings();
	$direction = broxi_get_direction(); 
	$broxi_page_id = get_the_ID();	
	$header_style = broxi_get_config('header_style', ''); 
	$header_style  = (get_post_meta( $broxi_page_id, 'page_header_style', true )) ? get_post_meta($broxi_page_id, 'page_header_style', true ) : $header_style ;
	$enable_sticky_header = ( isset($broxi_settings['enable-sticky-header']) && $broxi_settings['enable-sticky-header'] ) ? ($broxi_settings['enable-sticky-header']) : false;
	$show_minicart = (isset($broxi_settings['show-minicart']) && $broxi_settings['show-minicart']) ? ($broxi_settings['show-minicart']) : false;
	$show_searchform = (isset($broxi_settings['show-searchform']) && $broxi_settings['show-searchform']) ? ($broxi_settings['show-searchform']) : false;
?>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="//gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php broxi_loading_overlay(); ?>
<div id='page' class="hfeed page-wrapper">
	<?php if(isset($header_style) && $header_style) { ?>
		<?php get_template_part('templates/headers/header',$header_style); ?>
	<?php }else{ ?>
		<div id='bwp-header' class="bwp-header bwp-header-default">
			<?php broxi_menu_mobile(); ?>
			<div class="header-desktop">
				<div class="container">
					<div class='header-content' data-sticky_header="<?php echo esc_attr($enable_sticky_header); ?>">
						<div class="row">
							<?php if($show_minicart || $show_searchform){ ?>
								<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 header-logo">
									<?php broxi_header_logo(); ?>
								</div>
								<div class="col-xl-8 col-lg-8 col-md-12 col-12  wpbingo-menu-mobile">
									<?php broxi_top_menu(); ?>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 margin-top-20">
									 <!-- Begin menu -->
									<?php if($show_minicart && class_exists( 'WooCommerce' )){ ?>
									<div class="wpbingo-cart-top pull-right">
										<?php get_template_part( 'woocommerce/minicart-ajax' ); ?>
									</div>
									<?php } ?>
									<!-- Begin Search -->
									<?php if($show_searchform && class_exists( 'WooCommerce' )){ ?>
									<div class="search-box pull-right">
										<div class="search-toggle"><i class="fa fa-search"></i></div>
										<div class="dropdown-search"><?php broxi_search_form_product(); ?></div>
									</div>
									<?php } ?>
									<!-- End Search -->
								</div>
							<?php }else{ ?>
								<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-8 header-logo">
									<?php broxi_header_logo(); ?>
								</div>
								<div class="col-xl-10 col-lg-10 col-md-6 col-sm-6 col-4 wpbingo-menu-mobile text-right">
									<?php broxi_top_menu(); ?>
								</div>						
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End header-wrapper -->		
	<?php } ?>
<div id="bwp-main" class="bwp-main">
<?php broxi_get_page_title(); ?>