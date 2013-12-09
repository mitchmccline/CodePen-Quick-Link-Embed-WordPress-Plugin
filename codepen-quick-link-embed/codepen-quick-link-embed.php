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
 * Version: 0.0.1
 * Author: Mitch McCline
 * Description: Easily Include CodePen Embeds on your WordPress Blog by pasting a link to the pen
 * Author URI: http://mitchmccline.com
 * Text Domain: codepen-quick-link-embed
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
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


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/***************************************************************

	Regrister CodePen Embed Handler

***************************************************************/

class CodePen_Quick_Link_Embed {
 	private static $instance = false;

 	public static function get_instance() {
 	  if ( ! self::$instance ) {
 	    self::$instance = new self();
 	  }
 	  return self::$instance;
 	}

 	private function __construct() {
 		wp_embed_register_handler( 'codepen', '/http?:\/\/codepen\.io\/([a-z0-9]+)\/pen\/([a-z0-9]+)/i', array( $this, 'wp_embed_handler_codepen' ));
 	}

  	public function wp_embed_handler_codepen( $matches, $attr, $url, $rawattr ) {
		$embed = sprintf(
			'<p data-height="268" data-theme-id="0" data-user="%1$s" data-slug-hash="%2$s" data-default-tab="result" class="codepen"><a href="http://codepen.io/%1$s/pen/%2$s">A Pen by %1$s</a> (<a href="http://codepen.io/%1$s">@%1$s</a>) on <a href="http://codepen.io">CodePen</a></p>
			<script async src="//codepen.io/assets/embed/ei.js"></script>',
				esc_attr($matches[1]),
				esc_attr($matches[2])
				);

		return apply_filters( 'embed_codepen', $embed, $matches, $attr, $url, $rawattr );
	}
}
$codePenQuickLinkEmbed = CodePen_Quick_Link_Embed::get_instance();

?>