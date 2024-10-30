<?php /**********************************
*****working on js and css*********
***********************************/
function om_christmas_decorations_register_scripts() {
wp_enqueue_script( 'christmas_decorations_snow_script', plugins_url('js/snow_script.js', __FILE__), array('jquery'), '1.0.0', true );
wp_enqueue_script( 'christmas_decorations_snow_script_two', plugins_url('js/snow_script_two.js', __FILE__), array('jquery'), '1.0.0', true );
wp_enqueue_script( 'christmas_decorations_coundown_jquery', plugins_url('js/jquery.countdown.min.js', __FILE__), array('jquery'), '1.0.0', true );
wp_enqueue_script( 'christmas_decorations_custom', plugins_url('js/script.js', __FILE__), array('jquery'), '1.0.0', true );
}add_action('wp_enqueue_scripts', "om_christmas_decorations_register_scripts"); 



function om_christmas_decorations_register_style() {
wp_enqueue_style( 'christmas_decorations_snow_style', plugins_url('css/style.css', __FILE__), array(), '1.0.0', 'all' );
wp_enqueue_style( 'christmas_decorations_snowfall_style', plugins_url('css/snowfall.css', __FILE__), array(), '1.0.0', 'all' );
}add_action('wp_enqueue_scripts', "om_christmas_decorations_register_style"); ?>
