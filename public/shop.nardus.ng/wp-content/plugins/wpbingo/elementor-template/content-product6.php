<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $product, $woocommerce_loop;
$broxi_settings = broxi_global_settings();
$available 	=	$product->get_stock_quantity();
$sold		=	get_post_meta( $product->get_id(), 'total_sales', true );
$total 		=	$available + $sold;
if(($total > 0)){
	$percent = round( ($sold  / $total ) * 100 ) ;
}else{
	$percent = 0;
}
remove_action('woocommerce_after_shop_loop_item_title', 'broxi_add_loop_wishlist_link', 15 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
?>
<div class="products-entry clearfix content-product6 product-wapper">
	<div class="products-content">
		<div class="contents">
			<?php woocommerce_template_loop_rating(); ?>
			<h3 class="product-title"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a></h3>
			<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
		</div>
	</div>
	<div class="products-thumb">
		<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item_title' );
		?>
		<div class='product-button'>
			<?php do_action('woocommerce_after_shop_loop_item'); ?>
		</div>
	</div>
	<div class="available-box">
		<div class="percent"><div class="content" style="width:<?php echo esc_attr($percent); ?>%;"></div></div>
		<div class="content-available">
			<div class="available"><label><?php echo esc_html__("Available:","wpbingo") ?></label><?php echo esc_attr($available); ?></div>
			<div class="sold"><label><?php echo esc_html__("Sold:","wpbingo") ?></label><?php echo esc_attr($sold); ?></div>
		</div>
	</div>
</div>