<?php
/*
Plugin Name:  WooCommerce Analytics Transients Disabler
Description:  Opt-out of using transients for WooCommerce Analytics to save memory space.
Version:      0.1
Author:       Melebius
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

add_filter( 'woocommerce_analytics_report_should_use_cache', '__return_false' );
