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
				<div class="helpbox">
					<div class="bread-nav">
						<span>全部结果</span>
						<i>></i>
						<span>帮助中心</span>
						<i>></i>
						<span>发票说明</span>
					</div>

					<div class="help-cont">
						<?php include("help_side.php"); ?>

		         		<div class="helpright">
			              	<div class="helprighttitle">退款说明</div>
			              	<div class="helprightdd">
				                <p>在您未签收货物之前如需申请退款，<a href="#">可以到：我的订单-退款申请</a>，填写资料申请退款，由客服人员审核。</p>
				                <p>退款审核后，扣款将退回到您的原支付账户，到账时间将视您的支付银行而有所不同。</p>
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