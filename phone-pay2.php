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
		              
		              <div class="paycostcont">
		                 <ul>
		                    <li>
		                       <div class="inputleft">交费号码：</div>
		                       <div class="inputright">
		                            <input name="textfield2" type="text" class="inputpay" id="textfield" value="请输入您要充值的手机号码" />
		                       </div>
		                    </li>
		                    <li>
		                       <div class="inputleft">支付方式：</div>
		                       <div class="inputright">
		                              <input name="radio" type="radio" class="radioleft" id="radio" value="radio" />
		                              <label for="radio" class="radioright">在线支付 <span>（通过网银、支付宝账号等支付）</span></label>
		                              
		                             <input name="radio" type="radio" class="radioleft" id="radio" value="radio" checked="checked" />
		                         <label for="radio" class="radioright">充值卡充值 <span> （通过购买的联通充值卡密码充值）</span></label>

		                       </div>
		                    </li>
		                    <li>
		                       <div class="inputleft">充值卡密码：</div>
		                       <div class="inputright">
		                            <input name="textfield2" type="text" class="inputpay" id="textfield" />
		                       </div>
		                    </li>
		                 </ul>
		                 <div class="paycostcontbtn">
		                   <a href="#">下一步</a>
		                 </div>
		              </div>
		              
		              <div class="payconsthint">
		                   <div class="hinttitile">温馨提示：</div>
		                   <p>1、由于每月月底和月初两天为系统出账时间，有可能影响您交费到账，建议您尽量选择其他时段进行交费。如遇问题，请您咨询客服热线10010。</p>
		                   <p>2、如果您需要交费发票，请持个人身份有效证件至号码归属地联通营业厅打印。</p>
		                   <p>3、请您在确认支付时关闭浏览器弹出窗口拦截功能，中国联通门户网站将会跳转到相应银行或支付公司的网站，中国联通门户网站没有设置要求客户输入银行卡号及密码，不会保留您的银行卡号和密码。请您在交费前确认您使用的银行卡是否开通了网上银行并具备网上支付功能。</p>
		                   <p>4、网上营业厅交费充值功能适用于中国联通手机、无线上网卡、固定电话、宽带捆绑的电话、小（大）灵通。详情请咨询客服热线10010。</p>
		                   <p>5、为了便于您查询交费充值订单，建议您登录后进行交费充值操作。</p>
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