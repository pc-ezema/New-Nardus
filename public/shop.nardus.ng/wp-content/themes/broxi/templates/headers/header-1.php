	<?php 
		$broxi_settings = broxi_global_settings();
		$cart_style = broxi_get_config('cart-style','dropdown');
		$show_minicart = (isset($broxi_settings['show-minicart']) && $broxi_settings['show-minicart']) ? ($broxi_settings['show-minicart']) : false;
		$show_compare = (isset($broxi_settings['show-compare']) && $broxi_settings['show-compare']) ? ($broxi_settings['show-compare']) : false;
		$enable_sticky_header = ( isset($broxi_settings['enable-sticky-header']) && $broxi_settings['enable-sticky-header'] ) ? ($broxi_settings['enable-sticky-header']) : false;
		$show_searchform = (isset($broxi_settings['show-searchform']) && $broxi_settings['show-searchform']) ? ($broxi_settings['show-searchform']) : false;
		$show_wishlist = (isset($broxi_settings['show-wishlist']) && $broxi_settings['show-wishlist']) ? ($broxi_settings['show-wishlist']) : false;
		$show_currency = (isset($broxi_settings['show-currency']) && $broxi_settings['show-currency']) ? ($broxi_settings['show-currency']) : false;
		$show_menutop = (isset($broxi_settings['show-menutop']) && $broxi_settings['show-menutop']) ? ($broxi_settings['show-menutop']) : false;
	?>
	<h1 class="bwp-title hide"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<header id='bwp-header' class="bwp-header header-v1">
		<?php if(isset($broxi_settings['show-header-top']) && $broxi_settings['show-header-top']){ ?>
		<div id="bwp-topbar" class="topbar-v1 hidden-sm hidden-xs">
			<div class="topbar-inner">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 topbar-left hidden-sm hidden-xs">
							<?php if( isset($broxi_settings['ship']) && $broxi_settings['ship'] ) { ?>
								<div class="ship">
									<?php echo esc_html($broxi_settings['ship']); ?>
								</div>
							<?php } ?>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 topbar-right">
							<?php if( isset($broxi_settings['email']) && $broxi_settings['email'] ) : ?>
							<div class="email hidden-xs">
								<i class="icon-mail"></i><a href="mailto:<?php echo esc_attr($broxi_settings['email']); ?>"><?php echo esc_html($broxi_settings['email']); ?></a>
							</div>
							<?php endif; ?>
							<?php echo do_shortcode( "[social_link]" ) ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<?php if(($show_minicart || $show_wishlist || $show_compare || $show_searchform || is_active_sidebar('top-link')) && class_exists( 'WooCommerce' ) ){ ?>
			<?php broxi_menu_mobile(); ?>
			<div class="header-desktop">
				<div class='header-wrapper' data-sticky_header="<?php echo esc_attr($broxi_settings['enable-sticky-header']); ?>">
					<div class="container">
						<div class="row">
							<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 header-left content-header">
								<?php broxi_header_logo(); ?>
								<div class="wpbingo-menu-mobile header-menu">
									<div class="header-menu-bg">
										<?php broxi_top_menu(); ?>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 header-right">
								<div class="account">
									<?php if (is_user_logged_in()) { ?>
										<a href="<?php echo wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ); ?>"><i class="icon-logout"></i><?php echo esc_html__('Logout', 'broxi')?></a>
									<?php }else{ ?>
										<div class="active-login">
											<h2><i class="icon-login"></i><?php echo esc_html__('Login', 'broxi')?></h2>
										</div>
									<?php } ?>
								</div>
								<div class="header-page-link">
									<!-- Begin Search -->
									<?php if($show_searchform && class_exists( 'WooCommerce' )){ ?>
									<div class="search-box">
										<div class="search-toggle"><i class="icon-search"></i></div>
									</div>
									<?php } ?>
									<!-- End Search -->						
									<?php if($show_wishlist && class_exists( 'YITH_WCWL' )){ ?>
									<div class="wishlist-box">
										<a href="<?php echo get_permalink( get_option('yith_wcwl_wishlist_page_id') ); ?>"><i class="icon-heart"></i></a>
									</div>
									<?php } ?>
									<?php if($show_compare && class_exists( 'YITH_WOOCOMPARE' )){ ?>
									<div class="compare-box hidden-sm hidden-xs">        
										<a href="/?action=yith-woocompare-view-table&iframe=yes" class="yith-woocompare-open"><?php echo esc_html__('Compare', 'broxi')?></a>
									</div>
									<?php } ?>
									<?php if($show_minicart && class_exists( 'WooCommerce' )){ ?>
									<div class="broxi-topcart <?php echo esc_attr($cart_style); ?>">
										<?php get_template_part( 'woocommerce/minicart-ajax' ); ?>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div><!-- End header-wrapper -->
			</div>
		<?php }else{ ?>
			<?php broxi_menu_mobile(); ?>
			<div class="header-desktop">
				<div class="header-normal">
					<div class='header-wrapper' data-sticky_header="<?php echo esc_attr($broxi_settings['enable-sticky-header']); ?>">
						<div class="container">
							<div class="row">
								<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 header-left">
									<?php broxi_header_logo(); ?>
								</div>
								<div class="col-xl-9 col-lg-9 col-md-6 col-sm-6 col-6 wpbingo-menu-mobile header-main">
									<div class="header-menu-bg">
										<?php broxi_top_menu(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php broxi_login_form(); ?>
	</header><!-- End #bwp-header -->