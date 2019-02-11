<?php
/**
 * Plugin Name: Hello Functional
 * Description: A starter functional programming WordPress plugin
 * Version:     0.1
 * Author:      Francesco Carlucci
 * Author URI:  https://francescocarlucci.com
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

if ( ! function_exists( 'hello_functional' ) ) {

	/**
	 * Explain what the function does please.
	 *
   * @param
   * @return
	 */
 add_action( 'wp_head', 'hello_functional' );
 function hello_functional() {

	 echo '<!-- Hello Functional is active :) -->';

 }

}
