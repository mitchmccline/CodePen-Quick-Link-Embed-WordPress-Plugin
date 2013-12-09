<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   CodePen_Quick_Link_Embed
 * @author    Mitch McCLine <contact@mitchmccline.com>
 * @license   GPL-2.0+
 * @link      http://mitchmccline.com
 * @copyright 2013 Mitch McCline
 */

/**
 * If uninstall not called from WordPress, then exit
 *
 */
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/**
 * Deregisters the handler if the plugin is deleted
 *
 * @since    1.0.0
 */
class Remove_CodePen_Quick_Link_Embed {
 	private static $instance = false;

 	public static function get_instance() {
 	  if ( ! self::$instance ) {
 	    self::$instance = new self();
 	  }
 	  return self::$instance;
 	}

 	private function __construct() {
 		wp_embed_unregister_handler( 'codepen' );
 	}
}
$removeCodePenQuickLinkEmbed = Remove_CodePen_Quick_Link_Embed::get_instance();
