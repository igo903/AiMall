// config

seajs.config({
   base:"./spm_modules",

	alias:{
		"jquery":"jquery/1.7.2/jquery-debug.js"
	}
})




//jQuery Only
seajs.use(['jquery'],function($){

	var flag = false;
	
	$('.service-side').mouseleave(function(event) {
		$('.subside').removeClass('current');
	});

	$('.subside').hover(function(){
		$('.subside').removeClass('current');
		$(this).addClass('current');
	});


	/*back to top*/
	$(document).ready(function(){
		var icon = $('#ui_gotop');
		var icon_h = icon.height();

		var doc = $(document);
		var win = $(window);
		
		var foot = $("#footer");
		var foot_h = foot.height();
		var isfoot = foot.length;

		win.on("scroll",function(){
			var doc_w = doc.width(); 
			var doc_h = doc.height();
			var win_w = win.width();
			var win_h = win.height();
			
			var top = win_h - icon_h - 30; //定义当前icon应该所属的top值
			var left = (doc_w - 980) / 2 + 1090; //距离左侧距离
			var right = 40; //距离右侧距离
			
			if(isfoot){
				var max_h = doc_h - foot_h - doc.scrollTop(); //当前浏览器可视区域
				if(win_h > max_h){
					top = max_h - icon_h - 30; //定义icon最大top值
				}
			}
			//console.log(doc_w);
						
			if(doc.scrollTop() == 0) {
				icon.fadeOut(300);
			}
			else if(doc_w > 1200) {
				icon.css({"left":left,"right":"auto","top":top}).fadeIn(300);
			}
			else {
				icon.css({"left":"auto","right":right,"top":top}).fadeIn(300);
			}
		});

		$('.ui_upward_icon').click(function(){
			//ie7,8浏览器有bug;
			if($.browser.msie){
				doc.scrollTop(0);
			}else {
				$("body,html").animate({scrollTop:0});
			}
		});

		$('.filter-bar .btn.priceUpDown').click(function(){
			$(this).find('i').toggleClass('fa-caret-up');
		});


	});
	

});


// popup
seajs.use(['arale-popup/1.2.0/popup-debug','jquery'], function(Popup, $){
	new Popup({
		trigger: '#myMall',
		align: {
            baseXY: [-5, 34]
        },
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


	if($('.service-side').attr('id') == 'side-pop'){

		$('<i class="fa fa-caret-down fa-lg"></i>').insertAfter($('.all-prds'));
		var sideNav = new Popup({
			trigger: '#prds-pop',
			align: {
	            baseXY: [0, 40]
	        },
			element: '#side-pop'
		});

		sideNav.after('show',function(){
			$('#prds-pop i').addClass('spinOnce');
		}).after('hide',function(){
			$('#prds-pop i').removeClass('spinOnce');
		}); 
	}
});


seajs.use(['slick/1.3.11/slick/slick-debug', 'jquery'], function(slick, $) {
	$('.caro-side').slick({
		slidesToShow: 3,
		slidesToScroll: 2,
		autoplay: true,
		vertical: true,
		autoplaySpeed: 2800
	});
});


seajs.use(['arale-autocomplete/1.4.1/autocomplete-debug','jquery'],function(AutoComplete, $){
	// var ac = new AutoComplete({
 //        trigger: '#acTrigger1',
 //        header: '<div class="{{classPrefix}}-header"></div>',
 //        footer: '<div class="{{classPrefix}}-footer">搜索 {{query}} 的{{length}}个结果</div>',
 //        html: '<strong>{{city}}</strong><span>{{prov}}</span><span>{{query}} 的{{length}}</span>',
 //        dataSource: [
 //          {city: '上海', prov: '上海', label: '上海', value: 'shanghai', alias: ['上海']},
 //          {city: '苏州', prov: '江苏', label: '苏州', value: 'suzhou', alias: ['苏州']},
 //          {city: '深圳', prov: '广州', label: '深圳', value: 'shenzhen', alias: ['深圳']},
 //          {city: '沈阳', prov: '辽宁', label: '沈阳', value: 'shenyang', alias: ['沈阳']}
 //        ],
 //        width: 150
 //    }).render();

 //    ac.element.on('click', '#xxx', function() {
 //      //alert(1);
 //    })
});


