// config

seajs.config({
   base:"./spm_modules",

	alias:{
		"jquery":"jquery/1.7.2/jquery-debug.js"
		//"detector":"detector/1.4.0/detector.js"
	}
})




//jQuery
seajs.use(['jquery'],function($){

	var flag = false;
	$('#prds-pop').mouseover(function(){

		if(flag == false){
			$('#side-pop').removeClass('none');	
			console.log(9999);
			flag = true;
		} else if(flag == true){
			$('#side-pop').addClass('none');
			flag = false;
			console.log(1010);
		}
	});

});


// popup
seajs.use(['arale-popup/1.2.0/popup-debug','jquery'], function(Popup, $){
	new Popup({
		trigger: '#myMall',
		element: '#popupMyMall'
	});

	var coolNum = new Popup({
		trigger: '#coolNum',
		align: {
            baseXY: [176, 1]
        },
		element: '#coolNumPopup'
	});

	var mbAcc = new Popup({
		trigger: '#mbAcc',
		align: {
            baseXY: [176, -1]
        },
		element: '#mbAccPopup'
	});

	var surfWeb = new Popup({
		trigger: '#surfWeb',
		align: {
            baseXY: [176, -1]
        },
		element: '#surfWebPopup'
	});

	$('.subside').hover(function(){
		$('.subside').removeClass('current');
		$(this).addClass('current');
	});
});





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
