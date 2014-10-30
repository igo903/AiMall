// config

seajs.config({
   base:"./spm_modules",

	alias:{
		"jquery":"jquery/1.7.2/jquery-debug.js"
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



