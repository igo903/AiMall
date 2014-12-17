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
								<div class="vipinfo">
									<div class="vip-name">
										用户：<span>张三</span>  (tatang@yeah.net) 
									</div>
									<div class="vip-rank">
										<s></s>
										<span>金卡会员</span>
										<div class="number-rank">
											<i class="i4"></i>
										</div>
										<span class="font_gray">5800/12000</span>
										<span><a href="vip4.php">查看我的成长值</a></span>
									</div>
								</div>

								<div class="viptab">
									<div class="details-hd">
										<ul class="ui-switchable-nav" data-role="nav">
											<li data-role="trigger"><a href="vip.php">全部积分</a></li>
											<li data-role="trigger"><a href="vip2.php">积分收入</a></li>
											<li class=" ui-switchable-active" data-role="trigger">积分支出</li>
											<div class="fill"></div>
										</ul>
									</div>
									<div class="ui-switchable-content" data-role="content" id="">
										<div class="tab-panel">
											<div class="tab-mt">
												<h1>积分明细</h1>
												<div class="extra">
													<select id="submitDate" name="" class="sele">
														<option value="1" selected="">最近三个月</option>
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
														<li class="w1">购物送积分</li>
														<li class="w2">积分说明</li>
														<li class="w3">支出</li>
														<li class="w4">时间</li>
													</ul>
												</div>
												<div class="viptab-tbody">
													<ul>
														<li class="w1">购物送积分</li>
														<li class="w2">品胜iPhone5S手机套硅胶</li>
														<li class="w3 font_red">-1500</li>
														<li class="w4">2014-11-26：00:00</li>
													</ul>
													<ul>
														<li class="w1">购物送积分</li>
														<li class="w2">品胜iPhone5S手机套硅胶</li>
														<li class="w3 font_red">-1500</li>
														<li class="w4">2014-11-26：00:00</li>
													</ul>
													<ul>
														<li class="w1">购物送积分</li>
														<li class="w2">品胜iPhone5S手机套硅胶</li>
														<li class="w3 font_red">-1500</li>
														<li class="w4">2014-11-26：00:00</li>
													</ul>
													<ul>
														<li class="w1">购物送积分</li>
														<li class="w2">品胜iPhone5S手机套硅胶</li>
														<li class="w3 font_red">-1500</li>
														<li class="w4">2014-11-26：00:00</li>
													</ul>
													<ul>
														<li class="w1">购物送积分</li>
														<li class="w2">品胜iPhone5S手机套硅胶</li>
														<li class="w3 font_red">-1500</li>
														<li class="w4">2014-11-26：00:00</li>
													</ul>
													<ul>
														<li class="w1">购物送积分</li>
														<li class="w2">品胜iPhone5S手机套硅胶</li>
														<li class="w3 font_red">-1500</li>
														<li class="w4">2014-11-26：00:00</li>
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



