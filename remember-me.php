<?php
/**
 * Remember Me plugin for WordPress
 *
 * @package           RememberMe
 *
 * @wordpress-plugin
 * Plugin Name:       Remember Me
 * Description:       Plays the chorus of Remember Me from Disney's Coco everytime you check Remember Me on wp-admin.
 * Version:           1.0.0
 * Author:            Joseph Fusco
 * Author URI:        https://josephfus.co/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       remember-me
 */

namespace RememberMe;

// If this file is called directly, abort.
defined( 'WPINC' ) || die();

/**
 * Enqueue the plugin's scripts.
 */
function enqueue() {
	wp_enqueue_script( 'remember-me', plugins_url( 'assets/scripts/remember-me.js', __FILE__ ), [], '1.0.0', true );
}
add_action( 'login_enqueue_scripts', 'RememberMe\enqueue' );

/**
 * Emved the audio on the login page.
 */
function audio() {
	?>
	<audio id="remembermeaudio">
		<source src="<?php echo plugins_url( 'assets/audio/remember-me.ogg', __FILE__ ); ?>" />
		<source src="<?php echo plugins_url( 'assets/audio/remember-me.mp3', __FILE__ ); ?>" />
	</audio>
	<?php
}
add_action( 'login_footer', 'RememberMe\audio' );
