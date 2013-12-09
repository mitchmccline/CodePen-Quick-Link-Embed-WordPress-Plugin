<?php
/**
 * CodePen Quick Link Embed
 *
 * A plugin that registers CodePen embed handler. So you can paste a CodePen pen link into the editor and a embed pen will result in the post.
 *
 * @package   CodePen_Quick_Link_Embed
 * @author    Mitch McCLine <contact@mitchmccline.com>
 * @license   GPL-2.0+
 * @link      http://mitchmccline.com
 * @copyright 2013 Mitch McCline
 *
 * @wordpress-plugin
 * Plugin Name: CodePen Quick Link Embed
 * Plugin URI: http://mitchmccline.com
 * Version: 1.0.1
 * Author: Mitch McCline
 * Description: Easily Include CodePen Embeds on your WordPress Blog by pasting a link to the pen
 * Author URI: http://mitchmccline.com
 * Text Domain: codepen-quick-link-embed
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/mitchmccline/CodePen-Quick-Link-Embed-WordPress-Plugin/
 */

/*  Copyright YEAR  Mitch McCline  (email : contact@mitchmccline.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*----------------------------------------------------------------------------*
 * If this file is called directly, abort.
 *----------------------------------------------------------------------------*/
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Include the class file
 *----------------------------------------------------------------------------*/
require_once( plugin_dir_path( __FILE__ ) . 'public/class-codepen-quick-link-embed.php' );

/*----------------------------------------------------------------------------*
 * Get instance of the class once plugins are loaded.
 *----------------------------------------------------------------------------*/
add_action( 'plugins_loaded', array( 'CodePen_Quick_Link_Embed', 'get_instance' ) );

?>
