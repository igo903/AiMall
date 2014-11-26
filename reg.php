<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie ie6"><![endif]-->
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html class="ie8"><![endif]-->
<!--[if !IE]><!-->
<html lang="zh-CN">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>亚信商城</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="spm_modules/alice-base/1.1.0/src/base.css">
	<link rel="stylesheet" href="spm_modules/alice-button/1.3.0/button.css">
	<link rel="stylesheet" href="spm_modules/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="spm_modules/alice-form/1.1.0/src/form.css">
	<script type="text/javascript" src="spm_modules/seajs/2.3.0/sea-debug.js"></script>
	<!--[if lt IE 9]>
	    <script src="spm_modules/html5shiv/dist/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
<div id="topNav" class="site-nav">
	<div class="mininavInner site-nav-bd">

		<div class="fn-left">
			<span>产业互联网-亚信商城开通啦！</span>
			<a href="login.php>" class="ai">请登录</a>
			<a href="javascript:;">免费注册</a>
		</div>
		
		<div class="fn-right dropdowns">		
			<div class="fn-left">
				<a href="javascript:;" id="myMall">我的商城<i class="fa fa-angle-down" id="rm"></i></a>
				<ul id="popupMyMall" class="fn-hide ui-popup">
					<li><a href="javascript:;">我的订单</a></li>
					<li><a href="javascript:;">个人信息</a></li>
					<li><a href="javascript:;">收货地址维护</a></li>
					<li><a href="javascript:;">我的收藏</a></li>
				</ul>

				<a href="javascript:;" class="" id="mobileMall">手机商城</a>
				<a href="javascript:;" id="clientService">客户服务</a>
				<a href="javascript:;" class="" id="siteMap">网站导航</a>
				<a href="javascript:;" class="" id="bookmarkAi">收藏亚信商城</a>
			</div>
		</div>
	</div>
</div><!--//topnav-->

<div id="Ai_Wrap" class="wrap row">		
	<div class="screen-hd row" id="home-part-1">

		<div class="head">
			<div class="logo">
				<h1>
					<a href="index.php" class="ailogo"></a>
				</h1>
				<b class="loginicon">欢迎注册</b>
			</div>
		</div>

		<div class="reg-cont">
		<div class="reg-login">我已注册，现在<a href="">登录</a></div>

			<div class="reg-box">
				<form class="ui-form" name="" method="post" action="#" id="">
				    <fieldset>
				        <legend>表单标题</legend>
				        <div class="ui-form-item">
				            <label for="username" class="ui-label label-plus"> <span class="ui-form-required">*</span>注册邮箱</label>
				            <input id="username" name="username" class="ui-input" type="text" />
				            <div class="ui-form-explain">默认文案</div>
				            <div class="form-prompt">邮箱已被占用	</div>
				        </div>

				        <div class="ui-form-item">
				            <label for="username" class="ui-label label-plus"><span class="ui-form-required">*</span>设置密码</label>
				            <input id="username" name="username" class="ui-input" type="password" />
				            <div class="ui-form-explain">默认文案</div>
				        </div>

				        <div class="ui-form-item">
				            <label for="username" class="ui-label label-plus"><span class="ui-form-required">*</span>确认密码</label>
				            <input id="username" name="username" class="ui-input" type="password" />
				            <div class="ui-form-explain">默认文案</div>
				        </div>

				        <div class="ui-form-item">
				            <label for="" class="ui-label label-plus"><span class="ui-form-required">*</span>验证码</label>
				            <input class="ui-input ui-input-checkcode yzm" type="text" data-explain="请输入右图中字符，不区分大小写。" maxlength="4" autocomplete="off" value="" name="fourcode">
				            <img class="ui-checkcode-imgcode-img" align="absMiddle" alt="请输入您看到的内容" src="https://omeo.alipay.com/service/checkcode?sessionID=82012ab6b1f4ed9e675fb9092a25cb3b&r=0.9321065918075809"  title="点击刷新图片校验码">
				            <a href="#" class="imgcode-a">看不清，换一张</a>
				        </div>

				         <div class="ui-form-item">
				            <label for="test" class=" label-plus">
				                <input class="ui-checkbox "  id="test" value="" type="checkbox">
				                我已阅读并同意<a href="javascript:;" class="label-a" id="aiAgree" data-name="aiAgreement">《亚信商城注册协议》</a>
				            </label>
				        </div>

						<div class="ui-form-item">
				            <input type="submit" class="ui-button btn350" value="注册">
				        </div>

				    </fieldset>
			  	</form>


			</div>
		</div>

	</div>
</div>




<div id="aiAgreement" class="belonging overlay_content">
	<div class="close_overlay"><a href="javascript:;"></a></div>
	<div class="white">
		<div class="">
			<h1>注册协议</h1>
			<div class="txt"><p>SD放松放松东方时代发</p><p>SD放松放松东方时代发</p></div>
			<div class="gobuy">
				<a href="javascript:;" class="">确定</a>
			</div>
		</div><!--//-->
	</div>
</div>



<div id="overlay_area">
	<div></div>
</div>


<script type="text/javascript" src="js/details.js"></script>
<?php include("footer.php"); ?>