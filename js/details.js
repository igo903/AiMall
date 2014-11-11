// config

seajs.config({
   base:"./spm_modules",

	alias:{
		"jquery":"jquery/1.7.2/jquery-debug.js",
		"easyzoom":"easyzoom/src/easyzoom.js"
	},
	preload: ["jquery"]
})


seajs.use(['arale-switchable/1.1.0/switchable-debug', 'jquery'], function(Slide, $) {
	
	var sideTabB = new Slide({
	    element: '#details-tab',
	    triggers: '#details-tab .ui-switchable-nav li.nav1',
	    panels: '#details-tab .ui-switchable-content .tab-panel',
	    activeIndex: 0
	});

	var commentTab = new Slide({
	    element: '#comment-tab',
	    triggers: '#comment-tab .ui-switchable-nav li.nav2',
	    panels: '#comment-tab .ui-switchable-content .comment-a-panel',
	    activeIndex: 0
	});

	/*zoom image*/
	$('.smallimg ul li').hover(function(){

		var lg = $(this).find('img').attr('data-lg-attr');
		var mid = $(this).find('img').attr('data-mid-attr');

		$('.magnifier').find('a').attr('href',lg);
		$('.magnifier').find('img').attr('src',mid);
	});
	
});


seajs.use(['arale-dialog/1.4.0/dialog-debug','jquery'],function(Dialog,$){
	// new Dialog({
 //        trigger: '#switchCity',
 //        effect: 'fade',
 //        content: $('#switchCityContent')
 //    });
 //    new Dialog({
 //        trigger: '#switchnNmber',
 //        effect: 'fade',
 //        content: $('#switchnNmberContent')
 //    });
});




seajs.use(['easyzoom', 'jquery'], function(Easyz, $) {
	// Instantiate EasyZoom plugin
	var $easyzoom = $('.easyzoom').easyZoom();
	// Get the instance API
	var api = $easyzoom.data('easyZoom');
});




seajs.use(['jquery'],function($){
	var docH = $(document).height()+100;
	var docW = $("body").width();

	$('#switchCity').click(function(){
		$("#overlay_area").height(docH).width(docW);
		$("#overlay_area div").height(docH).width(docW).show();
		$("#overlay_area").fadeIn("fast");

		$("div.overlay_content").each(function(){
			$(this).css("left", docW/2 - $(this).width()/2).show();
			$(this).css("top", docH/6 - $(this).height()/2);
		});

	});

	$('.close_overlay').click(function(){
		$('#overlay_area').hide();
		$('.overlay_content').hide();
	});

	$('.cities li a').click(function(){
		var cityname = $(this).html();
		$('.current-city').html(cityname);
		$('#overlay_area').hide();
		$('.overlay_content').hide();
	});
	



});




