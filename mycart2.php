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
				<div class="mycartbox">
					<div class="mycart-title">
			            <div class="fl">我的购物车</div>
			            <div class="fr">现在<a href="#">登录</a>您购物车中的商品将被永久保存</div>
			        </div>
			        <div class="mycart-split">订单中所有商品只能填写一份入网资料，如需填写多份，请分成多个订单提交</div>

			        <div class="mycart-remind">
			            <div class="s-time fl">请在<span class="font_red">29分37秒</span>内提交订单。下单后6小时内完成支付，否则您选择的号码资源会被释放。</div>
			            <div class="cart-sum">
			                已选商品<span class="font_red">2</span>件<b></b>合计：<span class="font_red">￥5059.00</span><a href="#">去结算</a>
			            </div>
			        </div>

			        <div class="mycart-content">
			        	<div class="cart-thead">
			        		<div class="cart-thead">
			        			<div class="colum t-checkbox">
			        				<input  type="checkbox" value="">
                     			 	<label >全选</label>
			        			</div>
			        			<div class="column t-goods">商品</div>
			        			<div class="column t-message">商品信息</div>
                   				<div class="column t-price">单价(元)</div>
                   				<div class="column t-inventory">
			                       	<div id="inventory" >
			                        	<span id="location" title="湖北省">湖北省</span>
			                       	</div>
                   				</div>
                   				<div class="column t-quantity">数量</div>
                   				<div class="column t-total">小计</div>
                   				<div class="column t-action">操作</div>
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


<?php include("footer.php"); ?>