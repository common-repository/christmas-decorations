/*calling show function*/
jQuery(document).ready(function(e) {
	var currentTime = new Date()
	var year = currentTime.getFullYear();
	jQuery("#christmas-countdown").countdown(+year+"/12/25", function(event) {
    jQuery(this).text(event.strftime('%D Days, %H Hours : %M Mins :%S Secs') ); 
    
	jQuery("#christmas-countdown").on('finish.countdown', function(event){
	jQuery("#christmas-decorations-countdown").html("Merry Christmas");});	
 });
 
   
 
 });//fog.start();