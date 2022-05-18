$(window).on('load', function () {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('body').addClass('ios');
	} else{
		$('body').addClass('web');
	};
	$('body').removeClass('loaded');
});
if($('.slider').length) {
	$('.slider').slick({
		dots: false,
		infinite: true,
		arrows: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<div class="slick-button slick-button_prev"><span class="icon icon-arrow-prev"></span></div>',
		nextArrow: '<div class="slick-button slick-button_next"><span class="icon icon-arrow-next"></span></div>',
	});
};


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
$(function(){
	$('input, textarea').each(function(){
		var placeholder = $(this).attr('placeholder');
		$(this).focus(function(){ $(this).attr('placeholder', '');});
		$(this).focusout(function(){$(this).attr('placeholder', placeholder);});
	});
});


/* placeholder */

Fancybox.bind("[data-fancybox]", {
  autoFocus: false
});

/*mob-menu*/
    $('.js-touch-menu').click(function() {
        $(this).toggleClass('active'),
        $('.nav-mob').toggleClass('active');
        $('body').toggleClass('no-scroll');
        return false;
    });



	
	
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
 	 $('.nav-mob').css({
        height: viewport_height + 'px'
    });
// console.log("viewport_height", viewport_height);
 }

 $(window).bind('load', handler);
 $(window).bind('resize', handler);

 $(document).ready(function(){
	$('.js-send-form').submit(function() {
		$.ajax({
			type: 'POST',
			url: 'feedback.php',
			data: $(this).serialize(),
			success: function(data) {
				alert(data);
				// $('.modal').removeClass('opened');
				return false;
			}
		});
		return false;
	});
});