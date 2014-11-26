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


seajs.use(['easyzoom', 'jquery'], function(Easyz, $) {
	// Instantiate EasyZoom plugin
	var $easyzoom = $('.easyzoom').easyZoom();
	// Get the instance API
	var api = $easyzoom.data('easyZoom');
});






seajs.use(['jquery'],function($){

		// convert cell phone number format
		$('.number').each(function(index){
			var num = $(this).html();

			var first = num.substr(0,3);
			var second = num.substr(3,4);
			var third = num.substr(7,4);
			
			var newNum = first + ' ' + second + ' ' + third;
			//console.log(newNum);
			$(this).html(newNum);

		});

		var docH = $(document).height() + 100;
		var docW = $("body").width();
		var todoIndex = 0;

		$('#switchCity, #switchnNumber, #chooseSuite').click(function(){
			$("#overlay_area").height(docH).width(docW);
			$("#overlay_area div").height(docH).width(docW).show();
			$("#overlay_area").fadeIn("fast");

			var panelName = $(this).attr('data-name');
			var winWidth = $(window).width();
			var winHeight = $(window).height();

			//set modal window in the center of the view.
			$("#" +panelName + ".overlay_content" ).each(function(){
				var calLeft = (winWidth - $(this).width()) / 2 + $(window).scrollLeft();
				var calTop =  (winHeight - $(this).height()) / 2 + $(window).scrollTop();
				
				$(this).show();
				$(this).offset({top: calTop, left:calLeft});
			});
		});
		

		$(document).keyup(function(e){
			if(e.keyCode == 27){
				$('#overlay_area').hide();
				$('.overlay_content').hide();
			}
		});

		$('.close_overlay, .gobuy a, #overlay_area').click(function(){
			$('#overlay_area').hide();
			$('.overlay_content').hide();
		});

		$('.cities li').click(function(){
			var cityname = $(this).html();
			$('.current-city').html(cityname);
			$('#overlay_area').hide();
			$('.overlay_content').hide();
			$('#switchCity').removeClass('selected');
		});


		$('.preview li').click(function(){
			var preview = $(this).html();
			var total = $('.todos').length;

			if(todoIndex >= total){
				alert('限制添加三个号码，请删除一个再添加');
			} else {
				$('.todo li')[todoIndex].innerHTML = preview;
			}
			todoIndex ++;
		});

		$( "body" ).on( "click", ".todos .close",function() {
			var todos = $(this).parent();

			if(todoIndex <= 0){
				todoIndex = 0;
			} else {
				todoIndex --;
			}

			$(this).parent().html('<div class="waiting">待添加</div>');
			todoIndex = todos.index();

			console.log(todoIndex + '  -------');
		});




		$('#switchTaocan .r2 li').click(function(){
			var taocanTxt = $(this).find('p').html();
			$(this).siblings().removeClass("selected");
			$(this).addClass("selected");
			$('.rmbTaocan').html(taocanTxt);
		});
		$('#switchTaocan .r1 li').click(function(){
			var heyueTxt = $(this).find('p').html();
			$(this).siblings().removeClass("selected");
			$(this).addClass("selected");
			$('.contactTxt').html(heyueTxt);
		});

		$('.direct-buy .right-col .row a').click(function(){
			$(this).siblings().removeClass("selected");
			$(this).addClass("selected");
		});

		$('#switchTaocan .gobuy a').click(function(){
			var ok = $('#switchTaocan .numberok').html();
		});

});


// dropdown for popup modal
seajs.use(['arale-popup/1.2.0/popup-debug','jquery'], function(Popup, $){

	var numType = new Popup({
		trigger: '#num-type',
		triggerType: 'click',
		effect: 'fade slide',
		element: '#popupNumType'
	});

	var numPrice = new Popup({
		trigger: '#num-price',
		triggerType: 'click',
		effect: 'fade slide',
		element: '#popupNumPrice'
	});

	$('#popupNumType li').click(function(e){
		e.preventDefault();
		var dropTxt = $(this).text();

		numType.get('trigger').find('div').html(dropTxt);
		numType.hide();
	});

	$('#popupNumPrice li').click(function(e){
		e.preventDefault();
		var dropTxt = $(this).text();

		numPrice.get('trigger').find('div').html(dropTxt);
		numPrice.hide();
	});

});




