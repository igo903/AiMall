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
			
			console.log(icon_h);
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



