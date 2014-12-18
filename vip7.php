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
														<li class="mr15 ">
															<s class="s2"></s>
															<span><a href="vip6.php">会员升级方法</a></span>
														</li>
														<li class="nav-active">
															<s class="s3"></s>
															<span>会员权益和等级</span>
														</li>
													</ul>
												</div>

												<div class="viptab-content">
													<div class="tabtwo-panel">
														<table class="tabtwo-table" width="100%" border="0" cellspacing="0" cellpadding="0">
														  	<tr>
															    <td width="20%" bgcolor="#f8f8f8">会员特权</td>
															    <td width="20%" bgcolor="#f8f8f8">普通会员卡</td>
															    <td width="20%" bgcolor="#f8f8f8">银卡会员</td>
															    <td width="20%" bgcolor="#f8f8f8">金卡会员</td>
															    <td width="20%" bgcolor="#f8f8f8">白金会员</td>
														  	</tr>
														  	<tr>
														    	<td class="font_blue">电话预约</td>
														    	<td class="font_blue">可享</td>
														    	<td class="font_blue">可享</td>
														    	<td class="font_blue">可享</td>
														    	<td class="font_blue">可享</td>
														  	</tr>
														  	<tr>
														    	<td class="font_blue">免邮服务</td>
														    	<td class="font_blue">/</td>
														    	<td class="font_blue">/</td>
														    	<td class="font_blue">/</td>
														    	<td class="font_blue">可享</td>
														  	</tr>
														  	<tr>
														    	<td class="font_blue">电话预约</td>
														    	<td class="font_blue">可享</td>
														    	<td class="font_blue">可享</td>
														    	<td class="font_blue">可享</td>
														    	<td class="font_blue">可享</td>
														  	</tr>
														  	<tr>
														    	<td class="font_blue">免邮服务</td>
														    	<td class="font_blue">/</td>
														    	<td class="font_blue">/</td>
														    	<td class="font_blue">/</td>
														    	<td class="font_blue">可享</td>
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



