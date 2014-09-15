/* Author: 

*/
   $=jQuery.noConflict();
   
    jQuery(function(){
    	v=$.browser.version
    	if ( $.browser.msie && v==6.0) {
    		jQuery('#menu-main li').hover(
			function(event){
				jQuery(this).children('ul').show();
			},
			function(event){
				jQuery(this).children('ul').hide();
			}			
		);
		jQuery('#menu-main li').hover(
			function(){
				jQuery(this).children('a').addClass("hover");
			},
			function(){
				jQuery(this).children('a').removeClass("hover");
			}
		);
 } else {
    		jQuery('#menu-main li').hover(
			function(event){
				jQuery(this).children('ul').show('fast');
			},
			function(event){
				jQuery(this).children('ul').hide('fast');
			}			
		);
 }

    });
