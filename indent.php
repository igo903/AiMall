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
							<div class="right-title">订单中心</div>
							<div class="ordersbox">
								<div class="orders-thead">
				                   <div class="column t-goods">商品名是称</div>
				                   <div class="column t-message">商品信息</div>
				                   <div class="column t-quantity">数量(件)</div>
				                   <div class="column t-people">收货人</div>
				                   <div class="column t-total">应付金额</div>
				                   <div class="column t-inventory">
				                        <select name="select2" id="select2">
				                          <option value="全部状态">全部状态</option>
				                          <option value="待付款">待付款</option>
				                          <option value="待审核">待审核</option>
				                          <option value="待开户">待开户</option>
				                          <option value="待出库">待出库</option>
				                          <option value="已出库">已出库</option>
				                          <option value="已签收">已签收</option>
				                          <option value="已完成">已完成</option>
				                        </select>
				                   </div>                   
				                   <div class="column t-action">操作</div>
				                </div>
								<div class="shopping-prompt">最靓的顾客，由于您的商品属于不同商家活着不同仓库，所以您的订单会拆分为多个子订单配送，给您带来不便，敬请谅解！</div>
								


								<div class="orders-explode">
				                    <b class="font_red">【已拆单】</b>
				                    <span>订单号：730020356987671</span>
				                    <span>下单时间：2014-07-11  12:00:01</span> 
				                    <span class="send">由运营商发货</span>
				                </div>
				                <div class="orders-tbody">
				                	<div class="item_selected"> 
					                    <div class="goodbox">
					                        <div class="goodbox-m"> 
					                            <div class="cell p-goods">
					                               	<div class="p-img">
					                               		<a href="#" target="_blank"><img  src="images/phone10.jpg" alt=""></a>
					                               	</div>    
					                                <div class="p-names">
					                                	<a href="#"  target="_blank" >iPhone5s 金银灰色 指纹识别 送3600M流量</a>
					                                	<p class="font_green">好友推荐最高得100元话费x1微信晒单得20元话费x1 </p>
					                                	<p class="font_gray">商品编号：107891</p>
					                                </div>    
					                            </div>
					                            <div class="cell p-message">
					                                颜色：金色<br />
					                                号码：18612345678（武汉）<br />
					                                套餐：286元3GiPhone套餐<br />
					                                合约：预存话费送手机<br />
					                                协议期：24个月<br />
					                            </div>
					                            <div class="cell p-quantity">1</div>
					                        </div>
					                        <div class="goodbox-m">
					                             <div class="cell p-goods">
					                                <div class="p-img">
					                               		<a href="#" target="_blank"><img  src="images/phone10.jpg" alt=""></a>
					                               	</div>    
					                                <div class="p-names">
					                                	<a href="#"  target="_blank" >iPhone5s 金银灰色 指纹识别 送3600M流量</a>
					                                	<p class="font_green">好友推荐最高得100元话费x1微信晒单得20元话费x1 </p>
					                                	<p class="font_gray">商品编号：107891</p>
					                                </div> 
				                                </div>
					                             <div class="cell p-message">
					                                颜色：金色<br />
					                                号码：18612345678（武汉）<br />
					                                套餐：286元3GiPhone套餐<br />
					                                合约：预存话费送手机<br />
					                                协议期：24个月<br />
					                             </div>
					                             <div class="cell p-quantity">1</div>
					                        </div>
					                    </div>
					                    <div class="cell p-people">张三<p>12345678914</p></div>
					                    <div class="cell p-total">￥4000.00<p>网上支付</p></div>
					                    <div class="cell p-inventory">待付款</div>
					                    <div class="cell p-action">
					                       <a href="javascript:;" class="payment">付款</a><br />
					                       <a href=" indent_details.php">订单详情</a><br />
					                       <a href="javascript:;" id="t-order">取消</a>
					                    </div>				                	
				                	</div>				                	
				                </div>

								<div class="orders-explode">
				                    <b class="font_red">【已拆单】</b>
				                    <span>订单号：730020356987671</span>
				                    <span>下单时间：2014-07-11  12:00:01</span> 
				                    <span class="send">由联通商家发货</span>
				                </div>
				                <div class="orders-tbody">
				                	<div class="item_selected"> 
					                    <div class="goodbox">
					                        <div class="goodbox-m"> 
					                            <div class="cell p-goods">
					                               	<div class="p-img">
					                               		<a href="#" target="_blank"><img  src="images/phone10.jpg" alt=""></a>
					                               	</div>    
					                                <div class="p-names">
					                                	<a href="#"  target="_blank" >iPhone5s 金银灰色 指纹识别 送3600M流量</a>
					                                	<p class="font_green">好友推荐最高得100元话费x1微信晒单得20元话费x1 </p>
					                                	<p class="font_gray">商品编号：107891</p>
					                                </div>    
					                            </div>
					                            <div class="cell p-message">
					                                颜色：金色<br />
					                                号码：18612345678（武汉）<br />
					                                套餐：286元3GiPhone套餐<br />
					                                合约：预存话费送手机<br />
					                                协议期：24个月<br />
					                            </div>
					                            <div class="cell p-quantity">1</div>
					                        </div>
					                        <div class="goodbox-m">
					                             <div class="cell p-goods">
					                                <div class="p-img"><a href="#" target="_blank"><img  src="images/phone10.jpg" alt=""></a></div>    
					                                <div class="p-name">
					                                <a href="#"  target="_blank" >iPhone5s 金银灰色 指纹识别 送3600M流量</a>
					                                <p class="font_green">好友推荐最高得100元话费x1微信晒单得20元话费x1 </p></div>    
					                             </div>
					                             <div class="cell p-message">
					                                颜色：金色<br />
					                                号码：18612345678（武汉）<br />
					                                套餐：286元3GiPhone套餐<br />
					                                合约：预存话费送手机<br />
					                                协议期：24个月<br />
					                             </div>
					                             <div class="cell p-quantity">1</div>
					                        </div>
					                    </div>
					                    <div class="cell p-people">张三<p>12345678914</p></div>
					                    <div class="cell p-total">￥4000.00<p>网上支付</p></div>
					                    <div class="cell p-inventory">待付款</div>
					                    <div class="cell p-action">
					                       <a href="#" class="payment">付款</a><br />
					                       <a href="#">订单详情</a><br />
					                       <a href="#" id="t-order">取消</a>
					                    </div>				                	
				                	</div>				                	
				                </div>

				                <div class="orders-explode">
				                    <b class="font_red">【已拆单】</b>
				                    <span>订单号：730020356987671</span>
				                    <span>下单时间：2014-07-11  12:00:01</span> 
				                    <span class="send">由联通商家发货</span>
				                </div>
				                <div class="orders-tbody">
				                	<div class="item_selected"> 
					                    <div class="goodbox">
					                        <div class="goodbox-m"> 
					                            <div class="cell p-goods">
					                               	<div class="p-img">
					                               		<a href="#" target="_blank"><img  src="images/phone10.jpg" alt=""></a>
					                               	</div>    
					                                <div class="p-names">
					                                	<a href="#"  target="_blank" >iPhone5s 金银灰色 指纹识别 送3600M流量</a>
					                                	<p class="font_green">好友推荐最高得100元话费x1微信晒单得20元话费x1 </p>
					                                	<p class="font_gray">商品编号：107891</p>
					                                </div>    
					                            </div>
					                            <div class="cell p-message">
					                                颜色：金色<br />
					                                号码：18612345678（武汉）<br />
					                                套餐：286元3GiPhone套餐<br />
					                                合约：预存话费送手机<br />
					                                协议期：24个月<br />
					                            </div>
					                            <div class="cell p-quantity">1</div>
					                        </div>
					                    </div>
					                    <div class="cell p-people">张三<p>12345678914</p></div>
					                    <div class="cell p-total">￥4000.00<p>网上支付</p></div>
					                    <div class="cell p-inventory">待付款</div>
					                    <div class="cell p-action">
					                       <a href="javascript:;" class="payment">付款</a><br />
					                       <a href=" indent_details.php">订单详情</a><br />
					                       <a href="javascript:;" id="t-order">取消</a>
					                    </div>				                	
				                	</div>				                	
				                </div>

				                <div class="orders-explode">
				                    <b class="font_red">【已拆单】</b>
				                    <span>订单号：730020356987671</span>
				                    <span>下单时间：2014-07-11  12:00:01</span> 
				                    <span class="send">由联通商家发货</span>
				                </div>
				                <div class="orders-tbody">
				                	<div class="item_selected"> 
					                    <div class="goodbox">
					                        <div class="goodbox-m"> 
					                            <div class="cell p-goods">
					                               	<div class="p-img">
					                               		<a href="#" target="_blank"><img  src="images/phone10.jpg" alt=""></a>
					                               	</div>    
					                                <div class="p-names">
					                                	<a href="#"  target="_blank" >iPhone5s 金银灰色 指纹识别 送3600M流量</a>
					                                	<p class="font_green">好友推荐最高得100元话费x1微信晒单得20元话费x1 </p>
					                                	<p class="font_gray">商品编号：107891</p>
					                                </div>    
					                            </div>
					                            <div class="cell p-message">
					                                颜色：金色<br />
					                                号码：18612345678（武汉）<br />
					                                套餐：286元3GiPhone套餐<br />
					                                合约：预存话费送手机<br />
					                                协议期：24个月<br />
					                            </div>
					                            <div class="cell p-quantity">1</div>
					                        </div>
					                    </div>
					                    <div class="cell p-people">张三<p>12345678914</p></div>
					                    <div class="cell p-total">￥4000.00<p>网上支付</p></div>
					                    <div class="cell p-inventory">待付款</div>
					                    <div class="cell p-action">
					                       <div class="btn01" id="t2">修改入网号码</div>
                       					   <div class="btn01" id="t-id">修改入网资料</div>
					                       <a href="indent_details.php">订单详情</a><br />
					                       
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

<?php include("footer.php"); ?>



