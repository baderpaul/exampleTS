$(function(){
	
	var shrinkHeader = 350;
	
	var mode = window.getComputedStyle(document.body,':after').getPropertyValue('content');
	if (mode = 'mobile'){
		shrinkHeader = 50;
	}
	
	$(window).scroll(function() {
    var scroll = getCurrentScroll();
    
		if ( scroll >= shrinkHeader ) {
			$('.head').addClass('shrink');
        }
        
        else {
           $('.head').removeClass('shrink');


        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});