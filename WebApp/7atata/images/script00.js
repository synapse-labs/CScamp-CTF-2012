//options
	var rttheme_slider_time_out = jQuery("meta[name=rttheme_slider_time_out]").attr('content');
	var rttheme_slider_numbers = jQuery("meta[name=rttheme_slider_numbers]").attr('content');
	var rttheme_template_dir = jQuery("meta[name=rttheme_template_dir]").attr('content');

//home page slider

	jQuery(document).ready(function(){
		var slider_area;
		var slider_buttons;

		// Which slider
		if (jQuery('#slider_area').length>0){
			
			// Home Page Slider
			slider_area="#slider_area";	
			if(rttheme_slider_numbers=='true'){slider_buttons="#numbers";}
		
		
			jQuery(slider_area).cycle({ 
				fx:     'fade', 
				timeout:  rttheme_slider_time_out, 
				pager:  slider_buttons, 
				cleartype:  1,
				pagerAnchorBuilder: function(idx) { 
					return '<a href="#" title=""><img src="'+rttheme_template_dir+'/images/pixel.gif" width="14" heigth="14"></a>'; 
				}
			});
		}
 
		// portfolio slider
		
	});
	
//RT single level drop down menu
function rt_navigation(){
	jQuery(".navigation ul.navigation >li .current_page_item").parent("li:eq(0)").addClass('active');
	//hover		 
	jQuery(".navigation ul.navigation > li").hover(function() {
		jQuery(this).addClass('li_active');
		jQuery(this).children("a:eq(0)").addClass('a_active');
		jQuery(this).find('ul:first').stop().css({overflow:"hidden", height:"auto", display:"none",'paddingTop':'5px','paddingBottom':'15px'}).slideDown(200, function(){jQuery(this).css({overflow:"visible", height:"auto"});});
	}, function() {
		jQuery(this).find('ul:first').stop().slideUp(200, function(){jQuery(this).css({overflow:"hidden", display:"none"});});
		var active_class=jQuery(this).attr("class");			
		if (active_class!="active"){	
			jQuery(this).removeClass('li_active');
			jQuery(this).children("a:eq(0)").removeClass('a_active');
		}
	});
}
jQuery(document).ready(function() {
	rt_navigation();
});