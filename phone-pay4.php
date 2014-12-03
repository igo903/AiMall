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
				<div class="costebox">
		         	<div class="costleft">
		           		<div class="costdd">购物指南</div>
		           		<ul>
		                    <li><div class="cicon01"></div><a href="#">我的账户</a></li>
		                    <li><div class="cicon02"></div><a href="#" >话费查询</a></li>
		                    <li><div class="cicon03"></div><a href="#">账单查询</a></li>
		                    <li><div class="cicon04"></div><a href="#">详单查询</a></li>
		                    <li><div class="cicon05"></div><a href="#">使用量查询</a></li>
		                    <li><div class="cicon06"></div><a href="#">积分查询</a></li>
		           		</ul> 
		           		<div class="costdd">交话费</div>
		           		<ul>
		                    <li class="active"><div class="cicon07"></div><a href="#">手机/上网卡交费</a></li>
		                    <li><div class="cicon08"></div><a href="#" >宽带/固话交费</a></li>
		                    <li><div class="cicon09"></div><a href="#">充值卡购买</a></li>
		           		</ul> 		           
		         	</div>
         			<div class="costright">
			          	<div class="paycosttitle">
			              	<div class="titleleft">手机/上网卡交费</div>
			              	<div class="titleright">

			              		<ol class="ui-step ui-step-3">
								    <li class="ui-step-start ui-step-done">
								        <div class="ui-step-line">-</div>
								        <div class="ui-step-icon">
								            <i class="iconfont">&#xf02f;</i>
								            <i class="ui-step-number">1</i>
								            <span class="ui-step-text">填写交费信息</span>
								        </div>
								    </li>
								    <li class="ui-step-active">
								        <div class="ui-step-line">-</div>
								        <div class="ui-step-icon">
								            <i class="iconfont">&#xf02f;</i>
								            <i class="ui-step-number">2</i>
								            <span class="ui-step-text">支付</span>
								        </div>
								    </li>
								    <li class="ui-step-end">
								        <div class="ui-step-line">-</div>
								        <div class="ui-step-icon">
								            <i class="iconfont">&#xf02f;</i>
								            <i class="iconfont ui-step-number">&#xF029;</i>
								            <span class="ui-step-text">交费完成</span>
								        </div>
								    </li>
								</ol>

			              	</div>
			          	</div>
              
			          	<div class="paycostcontok">
		                  	<p class="okhint1">您已经成功交费100.00元，感谢您的使用！</p>
		                  	<p class="okhint2">订单号：10233333776522 <span>|</span>  交费号码：18688888888 南京</p>
		                  	<p class="okhint3">支付金额：<span>100.00</span> 元</p>
             		 	</div>
		              
		              	<div class="payyoucan">您可以：<a href="#">继续交费</a> <a href="#">余额查询</a></div>
		              
		              	<div class="payconsthint">
		                   	<div class="hinttitile">温馨提示：</div>
		                   	<p>1、如果您需要交费发票，请持个人身份有效证件至号码归属地联通营业厅打印。</p>
		                   	<p>2、如果您本次交费/充值尚未成功,请稍后进行查询，如果24小时内查询结果仍未成功，请致电中国联通客服热线10010。</p>
		                   	<p>3、有效期为“-“，表示没有使用期的限制。</p>
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