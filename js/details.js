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


	$('.smallimg ul li').hover(function(){

		var lg = $(this).find('img').attr('data-lg-attr');
		var mid = $(this).find('img').attr('data-mid-attr');

		$('.magnifier').find('a').attr('href',lg);
		$('.magnifier').find('img').attr('src',mid);

		//var $easyzoom = $('.easyzoom').easyZoom();
		//var api = $easyzoom.data('easyZoom');

		//console.log($('.magnifier').find('a').attr('href'));
	});
	
});


seajs.use(['easyzoom', 'jquery'], function(Easyz, $) {
	
	// Instantiate EasyZoom plugin
	var $easyzoom = $('.easyzoom').easyZoom();

	// Get the instance API
	var api = $easyzoom.data('easyZoom');

});

