<?php 
function om_christmas_decorations_html_contaner(){
$christmas_decorations_date_html='<div id="christmas-decorations-countdown"><ul><li>There are only:</li><li id="christmas-countdown"></li><li>Until Christmas</li></ul></div><div id="snow-container">&#10052;</div><div id="snow"></div>



<snowfall>
	<!-- @link https://emojikopieren.de/ -->
	<!-- Add inside the flakes, whatever you like. -->
	<snowflake><span>❄</span>️️</snowflake>
	<snowflake><span>🍂</span>️️</snowflake>
	<snowflake><span>💝</span> ️️</snowflake>
	<snowflake><span>🌟</span>️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'/img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
	<snowflake><img src="'.plugin_dir_url( __FILE__ ).'img/snowflake.png">️</snowflake>
</snowfall>
';
echo $christmas_decorations_date_html;}
add_action('wp_head', 'om_christmas_decorations_html_contaner');

function om_christmas_decorations_html_after_footer(){ echo '<div id="christmas-decorations-footer-last"></div>';}
add_action( 'wp_footer', 'om_christmas_decorations_html_after_footer' ); 

?>