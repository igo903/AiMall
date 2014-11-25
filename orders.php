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



              		<!-- <div class="steps">
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
		                        <p class="add-hint">收货地址不能超过5个，如需请直接修改已有收货地址</p>
		                          
		                    </div>       
	                  	</div>
	             	</div> -->







     			</div>
			</div>

			<div class="side service-side none" id="side-pop">
					<?php include("service_side.php"); ?>
				</div><!--//service-side-->
			</div><!--//home-part-1-->

	</div>

<link rel="stylesheet" href="spm_modules/alice-step/1.1.0/index.css">
<?php include("footer.php"); ?>