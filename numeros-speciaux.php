<?php
/**
 * @package Numéros Spéciaux
 */
/*
Plugin Name:  Numéros Spéciaux
Plugin URI: https://je-suis-nul-en-informatique/numeros-speciaux/
Description: This plugin is for France based 0 8xx number display. Basically, it will add the mandatory fancy look for any 0 8xx that you will add to any page, programatically, by shortcode or in raw html
Version: 0.92
Author: Bonbouaz
Author URI: http://www.basilebernard.com
License: GPLv2 or later
Text Domain: numeros-speciaux
*/
 
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'BONBOUAZ_NS_VERSION', '0.9' );   

register_activation_hook( __FILE__, array( 'bonbouaz_ns', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'bonbouaz_ns', 'plugin_deactivation' ) );
 

add_action( 'init', array( 'bonbouaz_ns', 'init' ) );



/**
 * Include CSS file for MyPlugin.
 */ 
function bonbouaz_ns_scripts() {
    wp_register_style( 'bonbouaz_ns',  plugin_dir_url( __FILE__ ) . '/bonbouaz_ns_style.css?' . rand() );
	
    wp_register_script('bonbouaz_ns',  plugin_dir_url( __FILE__ ) . '/bonbouaz_ns_js.js?' . rand(),array("jquery"));
    wp_enqueue_style( 'bonbouaz_ns' );
    wp_enqueue_script( 'bonbouaz_ns' );
}
add_action( 'wp_enqueue_scripts', 'bonbouaz_ns_scripts' ); 
 
 
 
 
 add_shortcode('numerosspeciaux', 'bonbouaz_ns_func');

function bonbouaz_ns_func($atts=array()) {

    ob_start();

    if (isset($atts["type"]))
        $type = $atts["type"]; 
		
		
    if (isset($atts["size"]))
        $size = $atts["size"];
		
    if (isset($atts["perso"]))
        $perso = $atts["perso"]; 
		
    if (isset($atts["color"]))
        $color = $atts["color"];  
		
    if (isset($atts["numero"]))
        $numero = $atts["numero"]; 
		
		 $return='<span class="bonbouaz_ns_numerosurtaxe"   data-type="'.$type.'" data-size="'.$size.'" data-perso="'.$perso.'" data-color="'.$color.'">'.$numero.'</span>';


    return $return;
}

 
 
 
 