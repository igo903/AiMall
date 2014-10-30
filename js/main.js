// config

seajs.config({
   base:"./spm_modules",

	alias:{
		"jquery":"jquery/1.7.2/jquery-debug.js"
	}
})


seajs.use(['arale-switchable/1.1.0/switchable-debug', 'jquery'], function(Slide, $) {
	var slide = new Slide({
		element: '#slidePicNews',
		effect: 'scrollx',
		easing: 'easeBoth',
		autoplay: true,
		circular: true,
		hasTriggers: true,
		interval: 2500
		//activeIndex: 1,
	}).render();

	$('#slidePicNews').hover(function(){
		$('#slidePicNews .move').show();
	},function(){
		$('#slidePicNews .move').hide();
	});

	// prev/next
	$("#slidePicNews #prev").click(function(e) {
		e.preventDefault();
		slide.prev();
	});

	$("#slidePicNews #next").click(function(e) {
		e.preventDefault();
		slide.next();
	});

	var sideTabA = new Slide({
	    element: '#side-tab-a',
	    triggers: '#side-tab-a .ui-switchable-nav li',
	    panels: '#side-tab-a .ui-switchable-content div',
	    activeIndex: 0
	});

	var sideTabB = new Slide({
	    element: '#side-tab-b',
	    triggers: '#side-tab-b .ui-switchable-nav li',
	    panels: '#side-tab-b .ui-switchable-content > div',
	    activeIndex: 0
	});

});

seajs.use(['slick/1.3.11/slick/slick-debug', 'jquery'], function(slick, $) {
	$('.caro').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		variableWidth: true,
		autoplaySpeed: 2000
	});
});
