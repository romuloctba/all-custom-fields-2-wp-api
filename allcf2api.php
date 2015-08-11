<?php
/**
 * @package ALLCF2API
 * @version 1.0
 */
/*
Plugin Name: All Custom Fields to Wp-API
Plugin URI: http://rcdevlabs.github.io
Description: Adds all custom feidls and post meta to WP-API's JSON output. Easely hackable.
Author: romuloctba
Version: 1.0
Author URI: http://rcdevlabs.github.io
*/

function json_api_prepare_post( $post_response, $post, $context ) {

  $field = get_post_custom($post['ID']);

  $post_response['custom-fields'] = $field;

  return $post_response;
}
add_filter( 'json_prepare_post', 'json_api_prepare_post', 10, 3 );