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
			</div>
		</div>

		<div class="reg-cont">
			<h1>收银台</h1>
			<div class="msg">
				<h2>订单提交成功，请尽快付款！</h2>
				<h3>订单号: <span>1234567890</span>|应付金额: <span class="ai">4999.00</span>元 </h3>
				<p>请您在提交订单后<i class="ai">6</i>小时内完成支付，否则订单会自动取消。</p>
			</div>	
		</div>

		<div class="shopping-pay-box">
            <h3 class="pay-title">请选择支付方式</h3>
            <div class="pay-content form">
               <div class="pay-form">
                  <input type="radio" name="radio" id="radio" value="radio">
                  <img src="images/zhifub.png">
               </div>
               <div class="pay-form">
                  <input type="radio" name="radio" id="radio" value="radio">
                  <img src="images/zxzf.png">
               </div>
           </div>
           <div class="row gobuy mt12">
           		<a href="javascript:;" class="" id="confirmPay">确认支付</a>
           	</div>
           
         </div>

	</div>
</div>





<?php include("footer.php"); ?>