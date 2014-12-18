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
						<span>创新产品</span>
					</div>
					<div class="content">
						<?php include("personal_side.php"); ?>

						<div class="right-col">
							<div class="right-title">会员管理</div>
							<div class="vipbox">

								<div class="viptab">
									<div class="details-hd">
										<ul class="ui-switchable-nav" data-role="nav">
											<li data-role="trigger">产看成长值</li>
											<li class=" ui-switchable-active" data-role="trigger"><a href="vip5.php">会员级别</a></li>
											<div class="fill2"></div>
										</ul>
									</div>
									<div class="ui-switchable-content" data-role="content" id="">
										<div class="tab-panel">
											<div class="viptab-two">
												<div class="viptab-nav">
													<ul>
														<li class="mr15 ">
															<s class="s1"></s>
															<span><a href="vip5.php">会员等级说明</a></span>
														</li>
														<li class="mr15 nav-active">
															<s class="s2"></s>
															<span>会员升级方法</span>
														</li>
														<li class="">
															<s class="s3"></s>
															<span><a href="vip7.php">会员权益和等级</a></span>
														</li>
													</ul>
												</div>

												<div class="viptab-content">
													<div class="tabtwo-panel">
														<table class="tabtwo-table" width="100%" border="0" cellspacing="0" cellpadding="0">
														  	<tr>
															    <td width="20%" bgcolor="#f8f8f8">成长值获取方式</td>
															    <td width="60%" bgcolor="#f8f8f8">具体场景</td>
															    <td width="20%" bgcolor="#f8f8f8">成长值</td>
														  	</tr>
														  	<tr>
														    	<td class="font_blue">购物送成长值</td>
														    	<td>成功完成购物后获得与支付金额对应的成长值</td>
														    	<td class="font_blue">不限</td>
														  	</tr>
														  	<tr>
														    	<td class="font_blue">评价送积分</td>
														    	<td>评价审核通过后赠送20个成长值</td>
														    	<td class="font_blue">20</td>
														  	</tr>
														  	<tr>
														    	<td class="font_blue">晒单送积分</td>
														    	<td>审核通过后的晒单用户送20个成长值</td>
														    	<td class="font_blue">20</td>
														  	</tr>
														  	<tr>
														    	<td class="font_blue">登录送成长值</td>
														    	<td>每日第一次手动登录送5个成长值</td>
														    	<td class="font_blue">5</td>
														  	</tr>
														  	<tr>
														    	<td class="font_blue">连续购物送成长值</td>
														    	<td>自然月内，3天都有购物且订单状态完成，次月10日发放100个成长值</td>
														    	<td class="font_blue">100</td>
														  	</tr>
														</table>
														
													</div>													
												</div>


											</div>
											
										</div>
									</div>

								</div>
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
<link rel="stylesheet" href="spm_modules/alice-paging/1.1.0/paging.css">
<?php include("footer.php"); ?>



