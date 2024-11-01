<?php
/*
Plugin Name:  Woo Shop Opening Hours
Plugin URI:   https://developer.wordpress.org/plugins/woo-shop-availability/
Description:  Woocommerce shop availability plugin. Admin can set a message when their shop is close for all the user who will use this website. User will get this message when they will visit checkout page. No need to use any shortcode. Just active it and use it.
Version:      1.0
Author:       Krishna Paul
Author URI:   https://krrishpaul.wordpress.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Start Class
if ( ! class_exists( 'KWoo_Shop_Opening_Hours' ) ) {

	class KWoo_Shop_Opening_Hours {

		/**
		 * Start things up
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			// We only need to register the admin panel on the back-end
			if ( is_admin() ) {
				add_action( 'admin_menu', array( 'KWoo_Shop_Opening_Hours', 'add_admin_menu' ) );
				add_action( 'admin_init', array( 'KWoo_Shop_Opening_Hours', 'register_settings' ) );
			}

		}

		/**
		 * Returns all theme options
		 *
		 * @since 1.0.0
		 */
		public static function get_theme_options() {
			return get_option( 'theme_options' );
		}

		/**
		 * Returns single theme option
		 *
		 * @since 1.0.0
		 */
		public static function get_theme_option( $id ) {
			$options = self::get_theme_options();
			if ( isset( $options[$id] ) ) {
				return $options[$id];
			}
		}

		/**
		 * Add sub menu page
		 *
		 * @since 1.0.0
		 */
		public static function add_admin_menu() {
			add_menu_page(
				esc_html__( 'OpeningHours', 'text-domain' ),
				esc_html__( 'OpeningHours', 'text-domain' ),
				'manage_options',
				'theme-settings',
				array( 'KWoo_Shop_Opening_Hours', 'create_admin_page' )
			);
		}

		/**
		 * Register a setting and its sanitization callback.
		 *
		 * We are only registering 1 setting so we can store all options in a single option as
		 * an array. You could, however, register a new setting for each option
		 *
		 * @since 1.0.0
		 */
		public static function register_settings() {
			register_setting( 'theme_options', 'theme_options', array( 'KWoo_Shop_Opening_Hours', 'sanitize' ) );
		}

		/**
		 * Sanitization callback
		 *
		 * @since 1.0.0
		 */
		public static function sanitize( $options ) {

			// If we have options lets sanitize them
			if ( $options ) {

				// Monday
				if ( ! empty( $options['kwoo_soh_monday_start'] ) ) {
					$options['kwoo_soh_monday_start'] = sanitize_text_field( $options['kwoo_soh_monday_start'] );
				}
				if ( ! empty( $options['kwoo_soh_monday_end'] ) ) {
					$options['kwoo_soh_monday_end'] = sanitize_text_field( $options['kwoo_soh_monday_end'] );
				}

				// Tuesday
				if ( ! empty( $options['kwoo_soh_tuesday_start'] ) ) {
					$options['kwoo_soh_tuesday_start'] = sanitize_text_field( $options['kwoo_soh_tuesday_start'] );
				}
				if ( ! empty( $options['kwoo_soh_tuesday_end'] ) ) {	
					$options['kwoo_soh_tuesday_end'] = sanitize_text_field( $options['kwoo_soh_tuesday_end'] );
				}

				// Wednesday
				if ( ! empty( $options['kwoo_soh_wednesday_start'] ) ) {
					$options['kwoo_soh_wednesday_start'] = sanitize_text_field( $options['kwoo_soh_wednesday_start'] );
				}
				if ( ! empty( $options['kwoo_soh_wednesday_end'] ) ) {
					$options['kwoo_soh_wednesday_end'] = sanitize_text_field( $options['kwoo_soh_wednesday_end'] );
				}

				// Thursday
				if ( ! empty( $options['kwoo_soh_thursday_start'] ) ) {
					$options['kwoo_soh_thursday_start'] = sanitize_text_field( $options['kwoo_soh_thursday_start'] );
				}
				if ( ! empty( $options['kwoo_soh_thursday_end'] ) ) {
					$options['kwoo_soh_thursday_end'] = sanitize_text_field( $options['kwoo_soh_thursday_end'] );
				}

				// Friday
				if ( ! empty( $options['kwoo_soh_friday_start'] ) ) {
					$options['kwoo_soh_friday_start'] = sanitize_text_field( $options['kwoo_soh_friday_start'] );
				}
				if ( ! empty( $options['kwoo_soh_friday_end'] ) ) {
					$options['kwoo_soh_friday_end'] = sanitize_text_field( $options['kwoo_soh_friday_end'] );
				}

				// Saturday
				if ( ! empty( $options['kwoo_soh_saturday_start'] ) ) {
					$options['kwoo_soh_saturday_start'] = sanitize_text_field( $options['kwoo_soh_saturday_start'] );
				}
				if ( ! empty( $options['kwoo_soh_saturday_end'] ) ) {
					$options['kwoo_soh_saturday_end'] = sanitize_text_field( $options['kwoo_soh_saturday_end'] );
				}

				// Sunday
				if ( ! empty( $options['kwoo_soh_sunday_start'] ) ) {
					$options['kwoo_soh_sunday_start'] = sanitize_text_field( $options['kwoo_soh_sunday_start'] );
				}
				if ( ! empty( $options['kwoo_soh_sunday_end'] ) ) {
					$options['kwoo_soh_sunday_end'] = sanitize_text_field( $options['kwoo_soh_sunday_end'] );
				}

				// Popup message
				if ( ! empty( $options['kwoo_soh_popup_heading'] ) ) {
					$options['kwoo_soh_popup_heading'] = sanitize_text_field( $options['kwoo_soh_popup_heading'] );
				}
				if ( ! empty( $options['kwoo_soh_popup_msg'] ) ) {
					$options['kwoo_soh_popup_msg'] = sanitize_text_field( $options['kwoo_soh_popup_msg'] );
				}

			}

			// Return sanitized options
			return $options;

		}

		/**
		 * Settings page output
		 *
		 * @since 1.0.0
		 */
		public static function create_admin_page() {
			require_once('template/admin.php');
		}

	}
}
new KWoo_Shop_Opening_Hours();

function KWoo_Get_Shop_Opening_Hours( $id = '' ) {
	return KWoo_Shop_Opening_Hours::get_theme_option( $id );
}

function KWoo_Shop_Opening_Hours_Hooks() {
	require_once('inc/hooks.php');
	add_action('wp_head', 'KWoo_Shop_Opening_Hours_Style');
	require_once('template/front.php');
	add_action('wp_footer', 'KWoo_Shop_Opening_Hours_Script');
}

function KWoo_Check_Shop_Opening_Hours() {
    if(is_checkout()) {
    	$today_start = KWoo_Get_Shop_Opening_Hours('kwoo_soh_'.strtolower(date('l')).'_start');
    	$today_end = KWoo_Get_Shop_Opening_Hours('kwoo_soh_'.strtolower(date('l')).'_end');
      
      if($today_start != 'none' && $today_end != 'none') {
	      if($today_start == 'close') {
	      	KWoo_Shop_Opening_Hours_Hooks();
	      }
	      else {
	      	$date1 = DateTime::createFromFormat('H:i', (date('H:i')));
					$date2 = DateTime::createFromFormat('H:i', $today_start);
					$date3 = DateTime::createFromFormat('H:i', $today_end);

	      	if($date1 < $date2 || $date1 > $date3) {
	      		KWoo_Shop_Opening_Hours_Hooks();
	      	}
	      }
	    }
    }
}
add_action( 'template_redirect', 'KWoo_Check_Shop_Opening_Hours' );