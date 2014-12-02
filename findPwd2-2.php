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
			<a href="login.php" class="ai">请登录</a>
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
				<b class="loginicon">找回密码</b>
			</div>
		</div>

		<div class="reg-cont">

			<div class="finpwd-box">
				<div class="finpwd-step">
					<ol class="ui-step ui-step-4">
					    <li class="ui-step-start  ui-step-done ">
					        <div class="ui-step-line">-</div>
					        <div class="ui-step-icon">
					            <i class="iconfont">&#xf02f;</i>
					            <i class="ui-step-number">1</i>
					            <span class="ui-step-text">第一步</span>
					        </div>
					    </li>
					    <li class="ui-step-active">
					        <div class="ui-step-line">-</div>
					        <div class="ui-step-icon">
					            <i class="iconfont">&#xf02f;</i>
					            <i class="ui-step-number">2</i>
					            <span class="ui-step-text">第二步</span>
					        </div>
					    </li>
					    <li class="">
					        <div class="ui-step-line">-</div>
					        <div class="ui-step-icon">
					            <i class="iconfont">&#xf02f;</i>
					            <i class="ui-step-number">3</i>
					            <span class="ui-step-text">第三步</span>
					        </div>
					    </li>
					    <li class="ui-step-end">
					        <div class="ui-step-line">-</div>    
					        <div class="ui-step-icon">
					            <i class="iconfont">&#xf02f;</i>
					            <i class="iconfont ui-step-number">&#xF029;</i>
					            <span class="ui-step-text">第四步</span>
					        </div>
					    </li>
					</ol>
				</div>
				<div class="finpwd-input">
					<div class="buy-study tudy2">
		              	<p>确认邮件已发送至您的邮箱：<span class=" font_green">Cot***@163.com</span></p>
		              	<p>请您登录邮箱完成验证。</p>
		            </div>
		            <a href="javascript:;" class="confirm finpwdbtncen">登录邮箱</a>
		            <div class="email-hint">如果您的邮箱无法正常接收邮件，请拨打 10010 客服热线！</div>
				</div>
			</div>
		</div>

	</div>
</div>

<link rel="stylesheet" href="spm_modules/alice-step/1.1.0/index.css">
<?php include("footer.php"); ?>