<?php
/**
 * @package coderbug
 */
 
if ( ! function_exists('coderbug_option') ) {
	function coderbug_option($id, $fallback = false, $param = false ) {
		global $coderbug_options;
		if ( $fallback == false ) $fallback = '';
		$output = ( isset($coderbug_options[$id]) && $coderbug_options[$id] !== '' ) ? $coderbug_options[$id] : $fallback;
		if ( !empty($coderbug_options[$id]) && $param ) {
			$output = $coderbug_options[$id][$param];
		}
		return $output;
	}
}