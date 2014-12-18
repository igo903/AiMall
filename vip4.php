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
											<li class=" ui-switchable-active" data-role="trigger">产看成长值</li>
											<li data-role="trigger"><a href="vip5.php">会员级别</a></li>
											<div class="fill2"></div>
										</ul>
									</div>
									<div class="ui-switchable-content" data-role="content" id="">
										<div class="tab-panel">
											<div class="tab-mt">
												<h1>我的成长值</h1>
												<div class="extra">
													<select id="submitDate" name="" class="sele">
														<option value="1" selected="">最近一个月记录</option>
														<option value="2">今年内</option>
														<option value="2013">2013年</option>
													  	<option value="2012">2012年</option>
													  	<option value="2011">2011年</option>
													  	<option value="3">2011年以前</option>
													</select>
													<span><a href="javascript:;">什么是积分？</a></span>
												</div>
											</div>
											<div class="viptab-table">
												<div class="viptab-theat">
													<ul>
														<li class="w5">成长值来源</li>
														<li class="w6">变化量</li>
														<li class="w7">时间</li>
													</ul>
												</div>
												<div class="viptab-tbody">
													<ul>
														<li class="w5">晒单</li>
														<li class="w6 font_green">+400</li>
														<li class="w7">2014-11-26：00:00</li>
													</ul>
													<ul>
														<li class="w5">晒单</li>
														<li class="w6 font_green">+400</li>
														<li class="w7">2014-11-26：00:00</li>
													</ul>
													<ul>
														<li class="w5">晒单</li>
														<li class="w6 font_green">+400</li>
														<li class="w7">2014-11-26：00:00</li>
													</ul>
													<ul>
														<li class="w5">晒单</li>
														<li class="w6 font_green">+400</li>
														<li class="w7">2014-11-26：00:00</li>
													</ul>
													<ul>
														<li class="w5">晒单</li>
														<li class="w6 font_green">+400</li>
														<li class="w7">2014-11-26：00:00</li>
													</ul>
													<ul>
														<li class="w5">晒单</li>
														<li class="w6 font_green">+400</li>
														<li class="w7">2014-11-26：00:00</li>
													</ul>
												</div>
											</div>

											<div class="ui-paging row fn-right" id="pagination">
											    <a href="#" class="ui-paging-prev">
											        <i class="iconfont" title="左三角形">&#xF039;</i> 上一页
											    </a>
											    <a href="#" class="ui-paging-item">1</a>
											    <a href="#" class="ui-paging-item ui-paging-current">2</a>
											    <a href="#" class="ui-paging-item">3</a>
											    <a href="#" class="ui-paging-item">4</a>
											    <a href="#" class="ui-paging-item">5</a>
											    <a href="#" class="ui-paging-item">6</a>
											    <a href="#" class="ui-paging-item">7</a>
											    <span class="ui-paging-ellipsis">...</span>
											    <a href="#" class="ui-paging-item">24</a>
											    <a href="#" class="ui-paging-next">
											        下一页 <i class="iconfont" title="右三角形">&#xF03A;</i>
											    </a>
											    <span class="ui-paging-info"><span class="ui-paging-bold">5/7</span>页</span>
											    <span class="ui-paging-which"><input name="some_name" value="6" type="text"></span>
											    <a class="ui-paging-info ui-paging-goto" href="#">跳转</a>
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



