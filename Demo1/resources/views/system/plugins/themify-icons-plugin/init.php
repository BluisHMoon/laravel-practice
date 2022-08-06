<?php
/*
Plugin Name:  Themify Icons Plugin
Plugin URI:   http://themify.me/themify-icons
Version:      1.0.3
Author:       Themify
Description:  Insert the Themify Icons easily in your post content, WordPress menus, and widget titles.
Text Domain:  themify-icons
Domain Path:  /languages
*/

if ( !defined( 'ABSPATH' ) ) exit;

register_activation_hook( __FILE__, array( 'Themify_Icons', 'activate' ) );

class Themify_Icons {

	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'constants' ), 1 );
		add_action( 'plugins_loaded', array( $this, 'includes' ), 2 );
		add_action( 'plugins_loaded', array( $this, 'i18n' ), 5 );
		add_action( 'plugins_loaded', array( $this, 'setup' ) );
	}

	public function constants() {
		if( ! defined( 'THEMIFY_ICONS_DIR' ) )
			define( 'THEMIFY_ICONS_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

		if( ! defined( 'THEMIFYICONS_URI' ) )
			define( 'THEMIFY_ICONS_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );

		if( ! defined( 'THEMIFY_ICONS_VERSION' ) )
			define( 'THEMIFY_ICONS_VERSION', '1.1' );
	}

	public function includes() {
		if( is_admin() ) {
			include( THEMIFY_ICONS_DIR . 'includes/admin.php' );
			include( THEMIFY_ICONS_DIR . 'includes/tinymce.php' );
		}
		include( THEMIFY_ICONS_DIR . 'includes/menu-icons.php' );
		include( THEMIFY_ICONS_DIR . 'includes/widget-icons.php' );
		include( THEMIFY_ICONS_DIR . 'includes/shortcode.php' );
	}

	public function i18n() {
		load_plugin_textdomain( 'themify-icons', false, '/languages' );
	}

	public function setup() {
		if( is_admin() ) {
			add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue' ) );
			add_action( 'admin_footer', array( $this, 'font_icons_dialog' ) );
			add_action( 'admin_init', array( $this, 'activation_redirect' ) );
		} else {
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
		}
	}

	function get_font_icons_dialog() {
		$icons = '
			<div id="themify-icons-lightbox" class="clearfix" style="display: none;">
				<h3 class="title">' . __( 'Choose icon', 'themify-icons' ) . '</h3>
				<a href="#" class="themify-icons-close"><i class="ti-close"></i></a>
				<div class="themify-icons-lightbox-container">';

			ob_start();
			include( THEMIFY_ICONS_DIR . 'includes/icons.php' );
			$icons .= ob_get_clean();
		$icons .= '
				</div>
			</div>
			<div id="themify-icons-lightbox-overlay"></div>';

		return $icons;
	}

	function font_icons_dialog() {
		echo $this->get_font_icons_dialog();
	}

	public function enqueue() {
		wp_register_style( 'themify-icons', THEMIFY_ICONS_URI . 'assets/themify-icons.css', null, THEMIFY_ICONS_VERSION );
		wp_register_style( 'themify-icons-frontend', THEMIFY_ICONS_URI . 'assets/themify-icons-frontend.css', array( 'themify-icons' ), THEMIFY_ICONS_VERSION );
	}

	function admin_enqueue( $hook_suffix ) {
		$this->enqueue();
		wp_enqueue_style( 'themify-icons' );
		wp_enqueue_style( 'themify-icons-frontend' );
		wp_enqueue_script( 'themify-icons-admin', THEMIFY_ICONS_URI . 'assets/themify-icon-admin.js', array( 'jquery' ), THEMIFY_ICONS_VERSION, true );
		wp_enqueue_style( 'themify-icons-admin', THEMIFY_ICONS_URI . 'assets/themify-icon-admin.css', null, THEMIFY_ICONS_VERSION );
	}

	public static function activate( $network_wide ) {
		If( version_compare( get_bloginfo( 'version' ), '3.9', ' < ' ) ) {
			/* the plugin requires at least 3.9 */
			deactivate_plugins( basename( __FILE__ ) ); // Deactivate the plugin
		} else {
			if( ! $network_wide && ! isset( $_GET['activate-multi'] ) ) {
				add_option( 'themify_icons_activation_redirect', true );
			}
		}
	}

	public function activation_redirect() {
		if( get_option( 'themify_icons_activation_redirect', false ) ) {
			delete_option( 'themify_icons_activation_redirect' );
			wp_redirect( admin_url( 'options-general.php?page=themify-icons' ) );
		}
	}
}
$themify_icons = new Themify_Icons;

/**
 * Load updater
 *
 * @since 1.0.0
 */
function themify_icons_load_updater() {
	if ( is_admin() && current_user_can( 'update_plugins' ) ) {
		if ( ! function_exists( 'get_plugin_data') ) {
			include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		}
		$plugin_basename = plugin_basename( __FILE__ );
		$plugin_data = get_plugin_data( plugin_dir_path( __FILE__ ) . basename( $plugin_basename ) );
		if ( ! class_exists( 'Themify_Plugin_Updater' ) ) {
			include_once plugin_dir_path( __FILE__ ) . 'updater/class-themify-plugin-updater.php';
		}
		new Themify_Plugin_Updater( array(
			'base_name'   => $plugin_basename,
			'plugin_data' => $plugin_data,
			'base_path'   => plugin_dir_path( __FILE__ ),
			'base_url'    => plugin_dir_url( __FILE__ ),
			'admin_page'  => 'themify-icons',
		), $plugin_data['Version'] );
	}
}
add_action( 'init', 'themify_icons_load_updater' );