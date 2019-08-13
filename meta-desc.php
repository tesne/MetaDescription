<?php
/*
Plugin Name:  Meta Description
Plugin URI: 
Description: Add meta description on home page, blog page and sigle posts, 
Version: 0.1.0
Author: Francisco Perez
Author URI: http://twitter.com/tesne
*/
if(!defined('ABSPATH')) die();
function meta_desc(){
	if(is_home()){
		echo '<meta name="description" content="' . esc_attr( get_bloginfo('description') ) . '">';
	}
	elseif (is_front_page()) {
		echo '<meta name="description" content="' . esc_attr( get_bloginfo('description') ) . '">';
	}
	elseif( is_single() ) {

          echo '<meta name="description" content="' . get_the_excerpt() . '">';
    }

    
}
add_action('wp_head','meta_desc' );

?>