(function($){
	$(document).ready(function() {
		
			$('html').smoothScroll(300);
		
		
	$(".amader-slider").owlCarousel({
		'autoPlay' : 3000,
		'items' : 3,		
		'stopOnHover' : true,
	});
	
	$(".full-slider .prev").click(function(){
		$(".amader-slider").trigger('owl.prev');
		
		return false;
	});
	$(".full-slider .next").click(function(){
		$(".amader-slider").trigger('owl.next');
		
		return false;
	});
	
	



		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	});
})(jQuery);