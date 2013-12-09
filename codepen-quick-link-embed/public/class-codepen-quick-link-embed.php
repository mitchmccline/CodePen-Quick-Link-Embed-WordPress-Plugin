<?php
/***************************************************************

	Regrister CodePen Embed Handler

***************************************************************/

class CodePen_Quick_Link_Embed {
	/**
	 * Instance of this class.
	 *
	 * @since    1.0.1
	 *
	 * @var      object
	 */
 	private static $instance = false;

 	/**
	 * Return an instance of this class.
	 *
	 * @since     1.0.1
	 *
	 * @return    object - A single instance of this class.
	 */
 	public static function get_instance() {
 	  if ( ! self::$instance ) {
 	    self::$instance = new self();
 	  }
 	  return self::$instance;
 	}

 	/**
	 * Register emebed handler
	 *
	 * @since 1.0.1
	 */
 	private function __construct() {
 		wp_embed_register_handler( 'codepen', '/http?:\/\/codepen\.io\/([a-z0-9]+)\/pen\/([a-z0-9]+)/i', array( $this, 'wp_embed_handler_codepen' ));
 	}

 	/**
	 * Embed handler method
	 *
	 * @since 1.0.1
	 */
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

?>