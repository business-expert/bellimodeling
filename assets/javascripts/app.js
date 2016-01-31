;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  
  $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
  $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
  $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
  $('input, textarea').placeholder();
  
  
  $.fn.foundationButtons          ? $doc.foundationButtons() : null;
  
  
  $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
  
  
  $.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
  
  $.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
  $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
  
    
    $.fn.foundationTabs             ? $doc.foundationTabs() : null;
    
  
  
    $("#featured").orbit();
	
	$(".header-secure-right").mouseenter(function(){
	  		$(".secure-zone-dropdown").stop().toggle("fast");
	  		$(".secure-zone-dropdown").css("overflow","visible");
	});
	$(".secure-zone-dropdown").mouseleave(function(){
			$(this).stop().toggle();
	});
	$('.gallery-right').click(function(){
	  		$(".gallery-right-dropdown").stop().toggle("fast");
			$(".gallery-right-dropdown").css("overflow","visible");
	});
	$(".gallery-right-dropdown").mouseleave(function(){
			$(this).stop().toggle();
	});
	
	$( 'td.active' ).each(function(i) {
		$(this).click(function(){
			$(document).unbind("click");
			$(this).find('.standard-calendar-event').fadeIn("fast");
			$(this).find('.standard-calendar-event').bind('mouseout',function(){
				$(document).bind("click",function(){$(this).find('.standard-calendar-event').fadeOut();});
			});
		});
	});
	
	
	// MASONRY CODE
	
	// cache container
	var $container = $('#container');
	// initialize isotope
	$container.isotope({
	  // options...
	  	animationOptions: { duration: 300, easing: 'linear', queue: false },
		masonry: { },
		layoutMode : 'masonry'
	});

  // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
  $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
  $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
  $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
  $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

  // Hide address bar on mobile devices
  if (Modernizr.touch) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }

})(jQuery, this);
