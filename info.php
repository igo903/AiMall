<?php include("header.php"); ?>
			<div id="main-nav" class="row">
				<ul>
					<li id="prds-pop"><a href="javascript:;" class="all-prds">所有商品分类</a></li>
					<li><a href="index.php" >首页</a></li>
					<li><a href="innovate.php" class="active">创新产品</a></li>
					<li><a href="javascript:;">流量专区</a></li>
					<li><a href="javascript:;">沃云.推荐</a></li>
					<li><a href="javascript:;">团购</a></li>
					<li><a href="javascript:;">限时购</a></li>
				</ul>
			</div>
			<div class="cont">
				<div class="management-panel">
					<div class="bread-nav">
						<span>首页</span>
						<i>></i>
						<span>个人信息</span>
					</div>
					<div class="content">
						<div class="left-col">
							<div class="my-user">
								<div class="my-img"><img src="images/meimage.jpg" /></div>
			                    <div class="my-name">张三</div>
			                    <div class="my-name my-name2">司徒斯托瑟</div>
							</div>
							<div class="my-title">我的沃云</div>
							<div class="my-link">
								<ul>
									<li>
										<div class="myicon01"></div>
             					    	<a href="indent.php">订单中心</a>
             						</li>
             						<li  class="myselected">
										<div class="myicon02"></div>
             					    	<a href="#">个人信息</a>
             						</li>
             						<li>
										<div class="myicon03"></div>
             					    	<a href="#">我的收藏</a>
             						</li>
             						<li>
										<div class="myicon04"></div>
             					    	<a href="#">收货地址管理</a>
             						</li>
             						<li>
										<div class="myicon06"></div>
             					    	<a href="comment.php">评价管理</a>
             						</li>
             						<li>
										<div class="myicon05"></div>
             					    	<a href="#">密码管理</a>
             						</li>
								</ul>
							</div>	
						</div>

						<div class="right-col">
							<div class="right-title">设置个人信息</div>
							<div class="ordersbox">
								<form class="ui-form" name="" method="post" action="#" id="">
								    <fieldset>
								        <legend>表单标题</legend>

								        <div class="ui-form-item ui-form-item-error">
								            <label for="" class="ui-label">用户名：</label>
								            <p class="ui-form-text">huihui0537@163.com</p>
								        </div>

								        <div class="ui-form-item info-position">
								            <label for="" class="ui-label">
								                <span class="ui-form-required">*</span>昵称：
								            </label>
								            <input class="ui-input textplus" type="text">
								            <p class="ui-form-explain">默认文案。</p>
								            <div class="form-prompt">昵称已被占用	</div>
								        </div>

								        <div class="ui-form-item">
								            <label for="" class="ui-label">
								                性别：
								            </label>
								            <div class="info-radio">
							                    <input type="radio" name="sex" class="woradio" value="0"><label class="mr10">男</label>
							                    <input type="radio" name="sex" class="woradio" value="1"><label class="mr10">女</label>
						                    </div>
								            <p class="ui-form-explain">默认文案。</p>
								        </div>

								        <div class="ui-form-item">
								            <label for="" class="ui-label">
								                生日：
								            </label>
								            <div>
												<select name="w" class="selt" id="province" value="1"><option value="1">2000</option></select>年
						                        <select name="w" class="selt" id="city" value="2800"><option value="72">2</option></select>月
						                        <select name="w" class="selt" id="county" value="2848"><option value="2848">2</option></select>日
						                    </div>
						                    <p class="ui-form-explain">默认文案。</p>
								        </div>

								        <div class="ui-form-item">
								            <label for="" class="ui-label">
								                邮箱：
								            </label>
								            <input class="ui-input textplus" type="text">
								            <p class="ui-form-explain">默认文案。</p>
								        </div>

								        <div class="ui-form-item">
								            <label for="" class="ui-label">
								                手机号码：
								            </label>
								            <input class="ui-input textplus" type="text">
								            <p class="ui-form-explain">默认文案。</p>
								        </div>

								        <div class="ui-form-item">
								            <label for="" class="ui-label">
								                QQ：
								            </label>
								            <input class="ui-input textplus" type="text">
								            <p class="ui-form-explain">默认文案。</p>
								        </div>

								        <div class="ui-form-item">
								            <label for="" class="ui-label">
								                真实姓名：
								            </label>
								            <input class="ui-input textplus" type="text">
								            <p class="ui-form-explain">默认文案。</p>
								        </div>

								        <div class="ui-form-item">
								            <label for="" class="ui-label">
								                证件信息：
								            </label>
								            <input class="ui-input textplus" type="text">
								            <p class="ui-form-explain">默认文案。</p>
								        </div>

								        <div class="ui-form-item">
								            <input type="submit" class="ui-button btn290" value="保存修改">
								        </div>

								    </fieldset>
								</form>

							</div>							
						</div>



					</div>



				</div>
			</div>
			<div class="side service-side none" id="side-pop">
				<?php include("service_side.php"); ?>
			</div><!--//service-side-->

	</div><!--//home-part-1-->

</div>

<link rel="stylesheet" href="spm_modules/alice-form/1.1.0/src/form.css">
<?php include("footer.php"); ?>