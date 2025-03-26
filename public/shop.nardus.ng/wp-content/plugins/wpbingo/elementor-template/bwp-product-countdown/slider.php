<?php
do_action( 'before' );
remove_action('woocommerce_after_shop_loop_item', 'broxi_quickview', 20 );
remove_action('woocommerce_after_shop_loop_item_title', 'broxi_add_loop_wishlist_link', 15 );
add_action('woocommerce_after_shop_loop_item', 'broxi_add_loop_wishlist_link', 15 );
if ( $list -> have_posts() ){ ?>
	<div id="<?php echo $widget_id; ?>" class="bwp-countdown <?php echo esc_attr($layout); ?> <?php echo esc_attr($class); ?> <?php if(empty($title1)) echo 'no-title'; ?>">       
		<?php if($title1) { ?>
		<div class="block">
			<?php if($description) { ?>
			<div class="page-description"><?php echo esc_html($description); ?></div>
			<?php } ?> 
			<div class="title-block"><h2><?php echo esc_html($title1); ?></h2></div>  
			<div class="bwp-image-subtitle">
				<?php if(isset($subtitle) && $subtitle){?>						
					<?php echo ($subtitle); ?>							
				<?php }?>
			</div>	
		</div> 
		<?php } ?>
		<div class="content-product-list">	
			<div class="slider products-list grid slick-carousel" data-dots="<?php echo esc_attr($show_pag);?>" data-slidesToScroll="true" data-nav="<?php echo esc_attr($show_nav);?>" data-columns4="<?php echo $columns4; ?>" data-columns3="<?php echo $columns3; ?>" data-columns2="<?php echo $columns2; ?>" data-columns1="<?php echo $columns1; ?>" data-columns="<?php echo $columns; ?>">	
			<?php while($list->have_posts()): $list->the_post();?>
				<?php
				global $product, $post, $wpdb, $average;
				$start_time = get_post_meta( $post->ID, '_sale_price_dates_from', true );
				$countdown_time = get_post_meta( $post->ID, '_sale_price_dates_to', true );		
				$orginal_price = get_post_meta( $post->ID, '_regular_price', true );	
				$sale_price = get_post_meta( $post->ID, '_sale_price', true );	
				$symboy = get_woocommerce_currency_symbol( get_woocommerce_currency() );
				$date = bwp_timezone_offset( $countdown_time );
				$product_hot_label = isset($broxi_settings['product-hot-label']) && !empty($broxi_settings['product-hot-label']) ? $broxi_settings['product-hot-label'] : esc_html__('Hot','wpbingo');
				$product_sale_label = broxi_get_product_discount();
				$product_sale = broxi_get_config('product-sale',true);
				$available 	=	$product->get_stock_quantity();
				$sold		=	get_post_meta( $product->get_id(), 'total_sales', true );
				$total 		=	$available + $sold;
				if(($total > 0)){
					$percent = round( ($sold  / $total ) * 100 ) ;
				}
				?>
				<div class="item-product">	
					<div class="item-product-content products-entry clearfix product-wapper">
						<div class="grid-content">
							<div class="content-title">
								<h3 class="product-title"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a></h3>
								<div class="product-price"><?php echo $product->get_price_html(); ?></div>
							</div>
							<div class="products-thumb">
								<a  href="<?php esc_url(the_permalink()); ?>">
								<?php if ( has_post_thumbnail() ) { ?>
									<?php echo get_the_post_thumbnail( $product->get_id(), 'shop_single'); ?>
									<?php }else{ ?>
										<img src="<?php echo esc_attr(get_template_directory_uri().'/images/placeholder.jpg') ?>" alt="<?php echo esc_attr__('No thumb', 'wpbingo') ?>">
									<?php } ?>
								</a>
								<?php if($product_sale ) : ?>
									<div class='product-lable'>
										<?php if(isset($broxi_settings['product-hot']) && $broxi_settings['product-hot']) : ?>
											<?php if ($product->is_featured()) : ?>
												<?php echo apply_filters('woocommerce_featured_flash', '<div class="vgwc-label vgwc-featured hot">' . esc_html($product_hot_label) . '</div>', $post, $product); ?>
											<?php endif; ?>
										<?php endif; ?>	
										<?php if ( $product->is_on_sale() ) : ?>
											<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html($product_sale_label) . '</span>', $post, $product ); ?>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="products-content">
								<div class="available-box">
									<div class="percent"><div class="content" style="width:<?php echo esc_attr($percent); ?>%;"></div></div>
									<div class="content-available">
										<div class="available"><label><?php echo esc_html__("Available:","wpbingo") ?></label><?php echo esc_attr($available); ?></div>
										<div class="sold"><label><?php echo esc_html__("Sold:","wpbingo") ?></label><?php echo esc_attr($sold); ?></div>
									</div>
								</div>
								<div class="item-countdown">
									<div class="title-countdown">
										<span><?php echo esc_html__("end in :","wpbingo") ?></span>
									</div>
									<div class="product-countdown"  
										data-day="<?php echo esc_html__("d","wpbingo"); ?>"
										data-hour="<?php echo esc_html__("h","wpbingo"); ?>"
										data-min="<?php echo esc_html__("m","wpbingo"); ?>"
										data-sec="<?php echo esc_html__("s","wpbingo"); ?>"	
										data-date="<?php echo esc_attr( $date ); ?>"  
										data-sttime="<?php echo esc_attr( $start_time ); ?>" 
										data-cdtime="<?php echo esc_attr( $countdown_time ); ?>" 
										data-id="<?php echo $widget_id; ?>">
									</div>
								</div>
							</div>	
							<div class='product-button'>
								<?php do_action('woocommerce_after_shop_loop_item'); ?>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; wp_reset_postdata();?>
			</div>
		</div>
	</div>
	<?php
}
?>