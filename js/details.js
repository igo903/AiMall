// config

seajs.config({
   base:"./spm_modules",

	alias:{
		"jquery":"jquery/1.7.2/jquery-debug.js"
	}
})


seajs.use(['arale-switchable/1.1.0/switchable-debug', 'jquery'], function(Slide, $) {
	
	var sideTabB = new Slide({
	    element: '#details-tab',
	    triggers: '#details-tab .ui-switchable-nav li',
	    panels: '#details-tab .ui-switchable-content > div',
	    activeIndex: 0
	});

});

