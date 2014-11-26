<?php include("header2.php"); ?>

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
     			<div class="exobox">
 					
					<div class="steps">
	                  	<div class="steps-title">1.入网资料填写</div>
		                <div class="steps-content">
		                    <div class="consignee-from">
		                        <div class="list"  >
		                             <span class="label"><em>*</em>机主姓名：</span>
		                             <div class="field">
		                               <input type="text" class="textbox" id=" " name=" " maxlength="20" >
		                               <div class="my-hint2">机主姓名必填且为2-5个汉字</div>
		                             </div>
		                        </div>
		                       
		                        <div class="list" >
		                             <span class="label"><em>*</em>证件信息：</span>
		                             <div class="field">
		                               <select name="" class="selectbox01">
		                                 <option value="身份证">身份证</option>
		                                 <option value="身份证">身份证</option>
		                               </select>
		                               <input type="text" class="textbox2" id=" " name=" " maxlength="20">
		                               <div class="my-hint">请输入正确有效的证件信息</div>
		                             </div>
		                        </div>
		                       
		                        <div class="consignee-prompt">
		                          您签收时，请提供入网人<span class="font_red">身份证件原件</span>进行身份核对，如工作人员声明需要收取您的<span class="font_red">证件复印件</span>，请您提前准备好<span class="font_red">复印件</span>，并可在<span class="font_red">复印件</span>上标注“仅限中国联通入网使用”字样及日期，中国联通将保证此<span class="font_red">复印件</span>仅用于本次入网使用。
		                        </div>
		                       
		                        <div class="list">
		                            <input name="" type="checkbox" value="" class="checkbox01"  />
		                            <label for="checkbox" class="checklabel">我已阅读并同意<a href="#" id="tprotocol">《中国联通移动业务用户入网协议》</a> </label>                            
		                            <div class="my-hint2 patch" >入网协议错误提示</div>
		                        </div>
		                       
		                        <div class="form-btn">
		                           <a href="" class="btn-submit">确认入网资料</a>
		                        </div>                         
		                    </div>
		                </div>
              		</div>


              		<div class="steps">
	                  	<div class="steps-title">2.套餐生效时间选择</div>
	                  	<div class="steps-content">
		                    <div class="timing">
		                        <ul>
		                         	<li class="timing-selected">
			                            <div class="tining-title">
				                            <input name="radio-time" type="radio" id="radio" value="radio" checked="checked" />
				                            <label for="radio">立即生效</label>
			                            </div>
		                             	<div class="tining-content">
			                              	<p class="font_red">适合10号前购买的用户</p>
			                              	<p>本月月租<span class="font_red">126</span>元，享受<span class="font_red">320</span>分钟国内语音通话、<span class="font_red">450</span>MB上网流量、<span class="font_red">120</span>条短信</p>
		                             	</div>
		                             	<div class="t-ok"></div>
		                         	</li>
		                       
		                        	<li>
		                             	<div class="tining-title">
			                               	<input type="radio" name="radio-time" id="radio" value="radio"/>
			                               	<label for="radio">立即生效</label>
		                          		</div>
		                             	<div class="tining-content">
			                              	<p class="font_red">适合11号到25号前购买的用户</p>
			                              	<p>本月月租<span class="font_red">63</span>元，享受<span class="font_red">160</span>分钟国内语音通话、<span class="font_red">225</span>MB上网流量、<span class="font_red">60</span>条短信</p>
		                             	</div>
		                             	<div class="t-ok"></div>
		                      		</li>
		                       
	                       			<li>
		                             	<div class="tining-title">
		                               		<input type="radio" name="radio-time" id="radio" value="radio"/>
		                               		<label for="radio">立即生效</label>
		                             	</div>
		                             	<div class="tining-content">
		                              		<p class="font_red">适合25号以后购买的用户</p>
		                              		<p>本月月租<span class="font_red">0</span>元，享受<span class="font_red">0</span>分钟国内语音通话、<span class="font_red">0</span>MB上网流量、<span class="font_red">0</span>条短信</p>
		                             	</div>
		                             	<div class="t-ok"></div>
		                       		</li>
		                       </ul>
		                       
		                       <p class="font_gray">提示：套餐超出部分国内电话0.15元/分钟，上网约1元3M，短信0.1元/条 。</p>
		                    </div>
	                                          
	                  </div>
	             	</div>


              		<div class="steps">
	                  	<div class="steps-title">3.地址选择</div>
	                  	<div class="steps-content">
		                    <div class="address">
		                        <ul>
		                            <li class="add-selected">
		                                <div class="add_m"><span class="add-name">张三</span><span class="add-operation">删除</span> <span class="add-operation" id="tsite">编辑</span></div>
		                                <p>江苏省-南京市-鼓楼区 清凉门大街76号，3F 309室，210036</p>
		                                <p>18612348890</p>
		                            </li>
		                              
	                                <li>
	                                    <div class="add_m"><span class="add-name">张三</span><span class="add-operation">删除</span> <span class="add-operation" id="tsite">编辑</span></div>
	                                    <p>江苏省-南京市-鼓楼区 清凉门大街76号，3F 309室，210036</p>
	                                    <p>186****8890</p>
	                                </li>
		                              
		                            <li>
		                                 <div class="add_m"><span class="add-name">张三</span><span class="add-operation">删除</span> <span class="add-operation" id="tsite">编辑</span></div>
		                                 <p>江苏省-南京市-鼓楼区 清凉门大街76号，3F 309室，210036</p>
		                                 <p>186****8890</p>
		                            </li>
		                            <li>
		                                <div class="add_m"><span class="add-name">张三</span><span class="add-operation">删除</span> <span class="add-operation" id="tsite">编辑</span></div>
		                                <p>江苏省-南京市-鼓楼区 清凉门大街76号，3F 309室，210036</p>
		                                <p>186****8890</p>
		                            </li>
		                            <li>
		                                <div class="add_m"><span class="add-name">张三</span><span class="add-operation">删除</span> <span class="add-operation" id="tsite">编辑</span></div>
		                                <p>江苏省-南京市-鼓楼区 清凉门大街76号，3F 309室，210036</p>
		                                <p>186****8890</p>
		                            </li>
		                        </ul>
		                          
		                        <div class="form-btn">
		                           <div class="btn01" id="tsite2">+使用新地址</div>
		                        </div>   
		                        <p class="shopping-prompt">收货地址不能超过5个，如需请直接修改已有收货地址</p>
		                          
		                    </div>       
	                  	</div>
	             	</div>


	             	<div class="steps">
	                  	<div class="steps-title">4.支付方式选择</div>
			            <div class="steps-content">
		                    <div class="paybox">
		                      	<div class="shopping-split6">下单后6小时内完成支付，否则您选择的号码资源会被释放。</div>
			                     <ul>
			                        <li class="pay-selected">
			                            <input name="radio2" type="radio" id="radio2" value="radio2" checked="checked" />
			                            <label for="radio2">在线支付</label>
			                            <div class="t-ok"></div>
			                        </li>

			                        <li >
			                            <input name="radio2" type="radio" id="radio2" value="radio2" />
			                            <label for="radio2">在线支付</label>
			                            <div class="t-ok"></div>
			                        </li>
			                     </ul>
		                    </div>
		                    <p class="font_gray">在线支付，支持信用卡、储蓄卡、支付宝</p>   
			            </div>
	             	</div>


	             	<div class="steps">
	                  	<div class="steps-title">5.配送方式选择</div>
	                  	<div class="steps-content">
	                    	<div class="distribution-box">
		                      	<ul>
			                        <li class="d-selected">
			                            <input name="radio3" type="radio" id="radio3" value="radio3" checked="checked" />
			                            <label for="radio3">快递 0.00元</label>
			                            <div class="t-ok"></div>
			                        </li>
		                      	</ul>
	                      
	                      		<div class="font_blue">送货时间</div>
		                      	<ul>
			                        <li class="d-selected">
			                            <input name="radio4" type="radio" id="radio4" value="radio4" checked="checked" />
			                            <label for="radio41">仅工作日送货</label>
			                            <div class="t-ok"></div>
			                        </li>
			                        <li>
			                            <input type="radio" name="radio4" id="radio4" value="radio4" />
			                            <label for="radio42">仅周末送货</label>
			                            <div class="t-ok"></div>
			                        </li>
			                        <li>
			                            <input type="radio" name="radio4" id="radio4" value="radio4" />
			                            <label for="radio43">工作日/周末/假日均可</label>
			                            <div class="t-ok"></div>
			                        </li>
		                      	</ul>
	                      		<p class="font_gray">声明：我们会努力按照您指定的时间配送，但因天气、交通等各类因素影响，您的订单有可能会有延误现象！敬请谅解！</p>
	                    	</div>       
	                  	</div>
	             	</div>


	             	<div class="steps">
		                <div class="steps-title"><div class="fl">6.商品详情</div> <div class="gocar"><a href="#">返回购物车</a></div></div>
	                  	<div class="steps-content">
		                    <div class="inventory">
	                          	<table class="review-thead" width="100%" border="0" cellpadding="0" cellspacing="0">
		                            <tr>
		                              	<td class="fore1">商品</td>
		                              	<td class="fore2">商品信息</td>
		                              	<td class="fore3">库存</td>
		                              	<td class="fore4">数量(件)</td>
		                              	<td class="fore5">小计</td>
		                            </tr>
	                          	</table>

		                      	<div class="review-body">
	                             	<div class="review-tbody cart-tbody">
	                                 	<table class="order-table" width="100%" border="0" cellspacing="0" cellpadding="0">
		                                   	<tr>
		                                     	<td class="fore1">
			                                       <div class="p-goods">
			                                            <div class="p-img"><a href="#" target="_blank"><img  src="images/phone10.jpg" alt=""></a></div>    
			                                            <div class="p-names">
			                                            <a href="#"  target="_blank" >iPhone5s 金银灰色 指纹识别 送3600M流量</a>
			                                            <p class="font_green">好友推荐最高得100元话费x1微信晒单得20元话费x1 </p></div>    
			                                        </div>
		                                     	</td>
		                                     	<td class="fore2">
			                                        颜色：金色<br />
			                                        号码：18612345678（武汉）<br />
			                                        套餐：286元3GiPhone套餐<br />
			                                        合约：预存话费送手机<br />
			                                        协议期：24个月<br />                                        
		                                     	</td>
		                                     	<td class="fore3">有货</td>
		                                     	<td class="fore4">1</td>
		                                     	<td class="fore5">￥4999.00</td>
		                                   	</tr>
		                                </table>
		                        	</div>
			                        <div class="review-tbody cart-tbody">
	                                 	<table class="order-table" width="100%" border="0" cellspacing="0" cellpadding="0">
		                                   	<tr>
		                                     	<td class="fore1">
			                                       <div class="p-goods">
			                                            <div class="p-img"><a href="#" target="_blank"><img  src="images/phone10.jpg" alt=""></a></div>    
			                                            <div class="p-names">
			                                            <a href="#"  target="_blank" >iPhone5s 金银灰色 指纹识别 送3600M流量</a>
			                                            <p class="font_green">好友推荐最高得100元话费x1微信晒单得20元话费x1 </p></div>    
			                                        </div>
		                                    	</td>
			                                    <td class="fore2">
			                                        颜色：金色<br />
			                                        号码：18612345678（武汉）<br />
			                                        套餐：286元3GiPhone套餐<br />
			                                        合约：预存话费送手机<br />
			                                        协议期：24个月<br />                                        
			                                    </td>
			                                    <td class="fore3 "><span class="font_red">库存紧张</span></td>
			                                    <td class="fore4">1</td>
			                                    <td class="fore5">￥4999.00</td>
		                                   </tr>
		                                </table>
			                        </div>
		                      	</div>

		                      	<div class="statistic fr">
		                         	<div class="list"><span><em>2</em> 件商品，总商品金额：</span><em class="price">￥2346.20</em></div>
		                         	<div class="list"><span>运费：</span><em class="price">￥0.00</em></div>
		                      	</div>
		                    </div>                          
		                </div>
		            </div>


		            <div class="steps">
                  		<div class="steps-title">7.结算信息</div>
	                  	<div class="steps-content">
		                    <div class="special-form">
	                           <div class="step-stitle"> <b></b>发票信息</div>
	                           <div class="step-cont">
	                               <div class="list">
                                        <span class="label">发票抬头：</span>
                                        <div class="field">
                                            <input type="text" class="textbox" id="w" name="w" value="" maxlength="11">
                                            <div class="my-hint">提示框</div>
                                        </div>
	                               </div>
	                               <div class="list-prompt">我们将提供打印发票随同订购商品一起寄送，发票抬头默认为您的姓名。</div>
	                               <div class="list">
                                        <span class="label">发票内容：</span>
                                        <div class="field">
                                            <span>明细</span>
                                        </div>
	                               </div>
	                            </div>
		                    </div>
	                    
		                    <div class="special-form">
	                           	<div class="step-stitle"> <b></b>我有推荐人</div>
	                           	<div class="step-cont">
	                               	<div class="list">
                                        <span class="label">推荐人姓名：</span>
                                        <div class="field">
                                            <input type="text" class="textbox" id="w" name="w" value="" maxlength="11">
                                            <div class="my-hint2">错误提示</div>
                                        </div>
	                               	</div>
	                                <div class="list">
                                        <span class="label">推荐人手机：</span>
                                        <div class="field">
                                            <input type="text" class="textbox" id="w" name="w" value="" maxlength="11">
                                            <div class="my-hint2">错误提示</div>
                                        </div>
	                               </div>
	                           	</div>
		                    </div>  
		                    <div class="special-form">
	                           	<div class="step-stitle"> <b></b>留言</div>
	                           	<div class="step-cont">
                                	<div class="list">
                                        <span class="label">留言：</span>
                                        <div class="field">
                                            <input type="text" class="textbox" id="w" name="w" value="" maxlength="100">
                                        </div>
	                               	</div>
	                           	</div>
		                    </div>                                 
	                  	</div>
             		</div>	

     			</div>

     			<div class="checkout-buttons">
     				<a href="javascript:;" class="btn-checkout">提交订单</a>   
     				<a href="javascript:;" class="btn-checkoutno">提交订单</a>   
		          	<span class="total">应付总额：<strong id="payPriceId">￥2365.50</strong>元 	</span>		                 
		        </div>
			</div>

			<di	v class="side service-side none" id="side-pop">
					<?php include("service_side.php"); ?>
				</div><!--//service-side-->
			</div><!--//home-part-1-->

	</div>

<link rel="stylesheet" href="spm_modules/alice-step/1.1.0/index.css">
<?php include("footer.php"); ?>