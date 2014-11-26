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
<div id="Ai_Wrap" class="wrap row">		
	<div class="screen-hd row" id="home-part-1">
		
		<div class="head">
			<div class="logo">
				<h1>
					<a href="index.php" class="ailogo"></a>
				</h1>
				<b class="loginicon">欢迎登录</b>
			</div>
		</div>
		<div class="cont">
			<div class="login">
				<div class="login-box">					
					<div class="bd">
						<div class="ailk-box">
							<form class="ui-form" name="" method="post" action="#" id="">
							    <fieldset>
							        <legend>表单标题</legend>
							        <div class="ui-form-item">
							            <label for="username" class="ui-label">登录名</label>
							            <input id="username" name="username" class="ui-input" type="text" />
							            <div class="ui-form-explain">用户名为电子邮箱。</div>
							        </div>

							        <div class="ui-form-item ui-form-item-error">
							            <label for="username" class="ui-label">登录密码</label>
							            <input id="username" name="username" class="ui-input" type="password" />
							            <div class="ui-form-explain">* 密码错误，请重新输入密码</div>
							        </div>

							        <div class="ui-form-item">
							            <label for="" class="ui-label">验证码</label>
							            <input class="ui-input ui-input-checkcode yzm2" type="text" data-explain="请输入右图中字符，不区分大小写。" maxlength="4" autocomplete="off" value="" name="fourcode">
							            <img class="ui-checkcode-imgcode-img" align="absMiddle" alt="请输入您看到的内容" src="https://omeo.alipay.com/service/checkcode?sessionID=82012ab6b1f4ed9e675fb9092a25cb3b&r=0.9321065918075809"  title="点击刷新图片校验码">
							            <a href="#" class="imgcode-a">看不清，换一张</a>
							        </div>

							        <div class="ui-form-item ui-form-item-error">
							            <div class="ui-form-explain">* 密码错误，请重新输入密码</div>
							        </div>
							        <div class="ui-form-item">
							            <input type="submit" class="ui-button btn350" value="登录">
							        </div>
							    </fieldset>
						  	</form>
							<div class="entries">
								<ul>
									<li class="tcr"><a href="javascript:;">忘记密码?</a></li>
									<li><a href="javascript:;">快速注册</a></li>
								</ul>
							</div>
						</div>
					
					</div>
				</div>
				<div class="login-bg">
					<img src="images/loginad.png">
				</div>
			</div>
		</div>

		
	</div>
</div>

<?php include("footer.php"); ?>
