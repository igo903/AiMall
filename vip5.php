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
											<li data-role="trigger"><a href="vip4.php">产看成长值</a></li>
											<li class=" ui-switchable-active" data-role="trigger">会员级别</li>
											<div class="fill2"></div>
										</ul>
									</div>
									<div class="ui-switchable-content" data-role="content" id="">
										<div class="tab-panel">
											<div class="viptab-two">
												<div class="viptab-nav">
													<ul>
														<li class="mr15 nav-active">
															<s class="s1"></s>
															<span>会员等级说明</span>
														</li>
														<li class="mr15">
															<s class="s2"></s>
															<span><a href="vip6.php">会员升级方法</a></span>
														</li>
														<li class="">
															<s class="s3"></s>
															<span><a href="vip7.php">会员权益和等级</a></span>
														</li>
													</ul>
												</div>

												<div class="viptab-content">
													<div class="tabtwo-panel">
														<div class="viptab-txt">
														 	<h1>会员等级说明</h1>
														 	<p>商城会员等级分为普通卡、银卡、金卡、白金卡四个等级，以成长值为唯一升级路径。	</p>
														 	<p>成长值为会员购物、评价等所回馈的经验累积值，当成长值达到一个既定标准，会员等级可升至对应等级，并获得该等级专属的会员权益。</p>
														</div>
														<div class="viptab-step">
															<div class="mynumberbox">
																<div class="mynumber">
																	我的成长值：5800
																	<s></s>
																</div>
															</div>
															<ul>
																<li class="li1">0<s></s></li>
																<li class="li2">2000 <s></s></li>
																<li class="li3">6000 <s></s></li>
																<li class="li4">12000 <s></s></li>
															</ul>
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
			</div>
			<div class="side service-side none" id="side-pop">
				<?php include("service_side.php"); ?>
			</div><!--//service-side-->

	</div><!--//home-part-1-->

</div>
<link rel="stylesheet" href="spm_modules/alice-paging/1.1.0/paging.css">
<?php include("footer.php"); ?>



