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
				<div class="details-panel">
					<div class="bread-nav">
						<span>首页</span>
						<i>></i>
						<span>订单中心</span>
						<i>></i>
						<span>订单详情</span>
					</div>

					<div class="details-cont">
						<div class="orderstate"> 
				            <div class="mt">
				                <strong>
				                 	订单号：1573511396&nbsp;&nbsp;&nbsp;&nbsp;状态：<span class=" font_red">待付款</span><a href="#" class="payt">付款</a>
				                </strong>
				                <div class="fr">
				                    <a href="#" class="edit-address" id="tsite3">修改收货地址</a>
				                    <a href="#" class="cancel-order"  id="t-order">取消订单</a>
				                </div>
				            </div>
				            <div class="mc">
				                <p>尊敬的客户，我们还未收到该订单的款项，请您尽快付款<a href="#">（在线支付帮助）</a></p>
				                <p>该订单会为您保留6小时（从下单之日算起），6小时之后如果还未付款，系统将自动取消该订单</p>
				            </div>
				        </div>

				        <div class="process">
				        	<ol class="ui-step ui-step-7">
							    <li class="ui-step-start ui-step-done">
							        <div class="ui-step-line icongreen">-</div>
							        <div class="ui-step-icon">
							            <i class="iconfont icongreen">&#xf02f;</i>
							            <i class="ui-step-number">1</i>
							            <span class="ui-step-text">提交订单</span>

							        </div>
							        <div class="text2" >2014-07-24<br />14:32:09</div>
							    </li>
							    <li class="ui-step-active ui-step-done">
							        <div class="ui-step-line iconred">-</div>
							        <div class="ui-step-icon ">
							            <i class="iconfont iconred">&#xf02f;</i>
							            <i class="ui-step-number">2</i>
							            <span class="ui-step-text">订单付款</span>
							        </div>
							    </li>
							    <li class="">
							        <div class="ui-step-line">-</div>
							        <div class="ui-step-icon">
							            <i class="iconfont">&#xf02f;</i>
							            <i class="ui-step-number">2</i>
							            <span class="ui-step-text">订单审核</span>
							        </div>
							    </li>
							    <li class="">
							        <div class="ui-step-line">-</div>
							        <div class="ui-step-icon">
							            <i class="iconfont">&#xf02f;</i>
							            <i class="ui-step-number">2</i>
							            <span class="ui-step-text">商品开户</span>
							        </div>
							    </li>
							    <li class="">
							        <div class="ui-step-line">-</div>
							        <div class="ui-step-icon">
							            <i class="iconfont">&#xf02f;</i>
							            <i class="ui-step-number">2</i>
							            <span class="ui-step-text">商品出库</span>
							        </div>
							    </li>
							    <li class="">
							        <div class="ui-step-line">-</div>
							        <div class="ui-step-icon">
							            <i class="iconfont">&#xf02f;</i>
							            <i class="ui-step-number">2</i>
							            <span class="ui-step-text">商品出库</span>
							        </div>
							    </li>

							    <li class="ui-step-end">
							        <div class="ui-step-line">-</div>
							        <div class="ui-step-icon">
							            <i class="iconfont">&#xf02f;</i>
							            <i class="iconfont ui-step-number">&#xF029;</i>
							            <span class="ui-step-text">完成</span>
							        </div>
							    </li>
							</ol>
				        </div>



					</div>
				</div>


			</div>


			<div class="side service-side none" id="side-pop">
				<?php include("service_side.php"); ?>
			</div><!--//service-side-->

	</div><!--//home-part-1-->

</div>

<link rel="stylesheet" href="spm_modules/alice-step/1.1.0/index.css">
<?php include("footer.php"); ?>