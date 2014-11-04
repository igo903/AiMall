// config

seajs.config({
   base:"./spm_modules",

	alias:{
		"jquery":"jquery/1.7.2/jquery-debug.js"
	}
})



seajs.use(['arale-switchable/1.1.0/switchable-debug', 'jquery'], function(Slide, $) {
	var slide = new Slide({
		element: '#slideInno',
		effect: 'scrollx',
		easing: 'easeBoth',
		autoplay: true,
		circular: true,
		hasTriggers: true,
		interval: 2500
		//activeIndex: 1,
	}).render();

	$('#slideInno').hover(function(){
		$('#slideInno .move').show();
	},function(){
		$('#slideInno .move').hide();
	});

	// prev/next
	$("#slideInno #prev").click(function(e) {
		e.preventDefault();
		slide.prev();
	});

	$("#slideInno #next").click(function(e) {
		e.preventDefault();
		slide.next();
	});
});


//jQuery Only
seajs.use(['jquery'],function($){
	$(document).ready(function(){
		$('#ui_gotop').remove();
		$('<div class="ui_upward_wrapper" id="ui_gotop">'
			+'<div class="floor one"><a href="javascript:;"></a></div>'
			+'<div class="floor two"><a href="javascript:;"></a></div>'
			+'<div class="floor three"><a href="javascript:;"></a></div>'
			+'<div class="floor four"><a href="javascript:;"></a></div>'
			+'<div class="floor five"><a href="javascript:;"></a></div>'
			+'<div class="ui_upward_icon"></div></div>').insertAfter('#footer');
	});
});

