<?php
define('broxi_version','1.0'); 
if (!isset($content_width)) { $content_width = 1200; }
require_once( get_template_directory().'/inc/class-tgm-plugin-activation.php' );
require_once( get_template_directory().'/inc/plugin-requirement.php' );
require_once( get_template_directory().'/inc/megamenu/megamenu.php' );
include_once( get_template_directory().'/inc/megamenu/mega_menu_custom_walker.php' );
require_once( get_template_directory().'/inc/function.php' );
require_once( get_template_directory().'/inc/loader.php' );
include_once( get_template_directory().'/inc/menus.php' );
include_once( get_template_directory().'/inc/template-tags.php' );
require_once( get_template_directory().'/inc/woocommerce.php' );
require_once( get_template_directory().'/inc/admin/functions.php' );
require_once( get_template_directory().'/inc/admin/theme-options.php' );
function broxi_custom_css() {
	global $broxi_page_id;
	$broxi_settings = broxi_global_settings();
	if (!is_admin()) {
		wp_enqueue_style( 'broxi-style-template', get_template_directory_uri().'/css/template.css');
		ob_start(); 
		include( get_template_directory().'/inc/custom-css.php' );
		$content = ob_get_clean();
		$content = str_replace(array("\r\n", "\r"), "\n", $content);
		$csss = explode("\n", $content);
		$custom_css = array();
		foreach ($csss as $i => $css) { if(!empty($css)) $custom_css[] = trim($css); }
		wp_add_inline_style( 'broxi-style-template', implode($custom_css) );
	}
}
add_action('wp_enqueue_scripts', 'broxi_custom_css' );
function broxi_custom_js() {
	if (!is_admin()) {
		wp_enqueue_script( 'broxi-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery'), null, true );
		$custom_js = 'var broxi_ajax_url = "'.esc_url(admin_url('admin-ajax.php', 'relative')).'";';
		$custom_js .= 'jQuery(function($){ "use strict"; $(document).on("click",".plus, .minus",function(){var t=$(this).closest(".quantity").find(".qty"),a=parseFloat(t.val()),n=parseFloat(t.attr("max")),s=parseFloat(t.attr("min")),e=t.attr("step");a&&""!==a&&"NaN"!==a||(a=0),(""===n||"NaN"===n)&&(n=""),(""===s||"NaN"===s)&&(s=0),("any"===e||""===e||void 0===e||"NaN"===parseFloat(e))&&(e=1),$(this).is(".plus")?t.val(n&&(n==a||a>n)?n:a+parseFloat(e)):s&&(s==a||s>a)?t.val(s):a>0&&t.val(a-parseFloat(e)),t.trigger("change")})});';
		wp_add_inline_script( 'broxi-script', $custom_js );
	}
}
add_action('wp_enqueue_scripts', 'broxi_custom_js' );