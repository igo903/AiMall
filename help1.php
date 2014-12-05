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
			              	<div class="helprighttitle">购物流程</div>
			              	<div class="helprightdd">
			                	<img src="images/help01.jpg" />
			              	</div>
			              
			               	<div class="helprightdl"> 如何注册？ </div>
			               	<div class="helprightdd">
			                  	<p>1）点击页面顶部“免费注册”，进入注册页面</p>
			                  	<img src="images/help02.jpg" />
			                  	<p>2）填写邮箱、密码等个人信息进行注册。</p>
			                  	<img src="images/help03.jpg" />
			                  	<p>3）点击“同意以上条款并注册”完成注册。</p>
			                  	<img src="images/help04.jpg" />
			               	</div>
			               
			               	<div class="helprightdl">如何提交订单？</div>
			               	<div class="helprightdd">
			                  <p>1）选中商品后在详情页面点击立即购买。</p>
			                  <img src="images/help05.jpg" />
			                  <p>2）点击立即购买后进入订单填写页面。</p>
			                  <img src="images/help06.jpg" />
			                  <p>3）填写相关信息，确认无误后点击“提交订单”，生成订单。</p>
			               	</div>
			               
		                	<div class="helprightdl">如何查询订单？</div>
			                <div class="helprightdd">
			                  	<p>1）点击页面顶部“我的沃云”进入订单中心；</p>
			                  	<img src="images/help07.jpg" />
			                  	<p>2）在订单中心可搜索查询订单详情。</p>
			                  	<img src="images/help08.jpg" />
			               	</div>
			               
			               	<div class="helprightdl">订单状态解释</div>
			                	<div class="helprightdd">
			                  	<p>一个新订单从下单到订单完成，会经历各种状态，我们会将各种状态显示在订单详情页面，希望以此种方式让您更好的了解订单情况，及时跟踪订单状态，打消疑虑并顺利完成购物。</p>
			                  	<img src="images/help10.jpg" />
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