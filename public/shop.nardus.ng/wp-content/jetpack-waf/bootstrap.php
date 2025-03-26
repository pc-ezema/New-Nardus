<?php
define( 'DISABLE_JETPACK_WAF', false );
if ( defined( 'DISABLE_JETPACK_WAF' ) && DISABLE_JETPACK_WAF ) return;
define( 'JETPACK_WAF_MODE', 'silent' );
define( 'JETPACK_WAF_SHARE_DATA', false );
define( 'JETPACK_WAF_SHARE_DEBUG_DATA', false );
define( 'JETPACK_WAF_DIR', '/home/nardusng/nardus/public/shop.nardus.ng/wp-content/jetpack-waf' );
define( 'JETPACK_WAF_WPCONFIG', '/home/nardusng/nardus/public/shop.nardus.ng/wp-content/../wp-config.php' );
require_once '/home/nardusng/nardus/public/shop.nardus.ng/wp-content/plugins/jetpack/vendor/autoload.php';
Automattic\Jetpack\Waf\Waf_Runner::initialize();
