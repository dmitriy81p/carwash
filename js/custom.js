$(window).on('load', function () {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('body').addClass('ios');
	} else{
		$('body').addClass('web');
	};
	$('body').removeClass('loaded');
});

/* viewport width */
function viewport(){
	var e = window, 
	a = 'inner';
	if ( !( 'innerWidth' in window ) )
	{
		a = 'client';
		e = document.documentElement || document.body;
	}
	return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
};
/* viewport width */

/* placeholder */	
// $(function(){   
// 	$('input, textarea').each(function(){
// 		var placeholder = $(this).attr('placeholder');
// 		$(this).focus(function(){ $(this).attr('placeholder', '');});
// 		$(this).focusout(function(){			 
// 			$(this).attr('placeholder', placeholder);  			
// 		});
// 	});
/* placeholder */

/* touch-menu */	
	// $body = $('body');
	// $('.js-touch-menu').click(function(){
	// 	$(this).toggleClass('active');
	// 	$(this).parent().find('.nav-list').toggleClass('active');
	// 	$body.toggleClass('no-scroll');
	// 	$('header').toggleClass('z-index-change');
	// 	return false;
	// });
	/* touch-menu */

	/* components */
	
	/* mask phone */
 // if ($('.js-mask').length) {
 // 	$('.js-mask').each(function() {
 // 		$(this).mask("+7 (999) 999 99 99");
 // 	});
 // }
 /* mask phone */


 /* components */




var handler = function(){
	
	var height_footer = $('footer').height();	
	var height_header = $('header').height();		

	var viewport_wid = viewport().width;
	var viewport_height = viewport().height;
		
	}

$(window).bind('load', handler);
$(window).bind('resize', handler);



