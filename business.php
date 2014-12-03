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
							<div class="right-title">我的业务</div>

							<div class="myon-box">
				                <div class="myon_tab_menu">
				                    <ul>
				                        <li class="selected">已开通业务</li>
				                        <li>业务办理记录查询</li>
				                    </ul>
				                </div>

				                <div class="myon_tab_box">
									
									<div class="tabdiv">
			                         	<div class="myon_retrieve">
			                               	<label for="textfield">业务名称：</label>
			                               	<input type="text" name="textfield2" id="textfield" class="retrieveinput1" />
			                               	<input type="submit" name="button" id="button" class="retrievebtn" value="查询" />
			                         	</div>
			                       		<div class="address-cont">
			                         		<table width="100%" class="address-thead" border="0" cellspacing="0" cellpadding="0">
			                                    <tr>
			                                      	<td class="on8">业务名称</td>
			                                      	<td class="on8">业务信息</td>
			                                      	<td class="on9">办理时间</td>
			                                      	<td class="on9">操作</td>
			                                      	<td class="on8">受理结果</td>
			                                      	<td class="on8">备注</td>
			                                    </tr>
		                                  	</table>
		                                  	<div class="address-body">
		                                     	<div class="address-tbody">
		                                         	<table width="100%" class="address-table yestable" border="0" cellspacing="0" cellpadding="0">
			                                            <tr>
			                                              	<td class="on8">10元包100MB-3G国内流量包 </td>
			                                              	<td class="on8 on8-align">
                                                              	<p><span class="l">业务档次：</span><span class="r">10元包100Mb-3g流量包</span></p>
                                                              	<p><span class="l">资　　费：</span><span class="r">10元/月</span></p>
                                                              	<p><span class="l">生效时间：</span><span class="r">立即生效</span></p>
                                                              	<p><span class="l">优惠活动：</span><span class="r">订购即送5元话费</span></p>
			                                              	</td>
			                                              	<td class="on9">2014年8月12日</td>
			                                              	<td class="on9">订购</td>
			                                              	<td class="on8">开通处理中</td>
			                                              	<td class="on8">-----------</td>
			                                            </tr>
			                                       </table>
		                                     	</div> 
		                                     	<div class="address-tbody">
		                                         	<table width="100%" class="address-table yestable" border="0" cellspacing="0" cellpadding="0">
			                                            <tr>
			                                              	<td class="on8">10元包100MB-3G国内流量包 </td>
			                                              	<td class="on8 on8-align">
                                                              	<p><span class="l">业务档次：</span><span class="r">10元包100Mb-3g流量包</span></p>
                                                              	<p><span class="l">资　　费：</span><span class="r">10元/月</span></p>
                                                              	<p><span class="l">生效时间：</span><span class="r">立即生效</span></p>
                                                              	<p><span class="l">优惠活动：</span><span class="r">订购即送5元话费</span></p>
			                                              	</td>
			                                              	<td class="on9">2014年8月12日</td>
			                                              	<td class="on9">订购</td>
			                                              	<td class="on8">开通成功</td>
			                                              	<td class="on8">-----------</td>
			                                            </tr>
			                                       	</table>
		                                     	</div>  
			                                    <div class="address-tbody">
		                                         	<table width="100%" class="address-table yestable" border="0" cellspacing="0" cellpadding="0">
			                                            <tr>
			                                              	<td class="on8">10元包100MB-3G国内流量包 </td>
			                                              	<td class="on8 on8-align">
                                                              	<p><span class="l">业务档次：</span><span class="r">10元包100Mb-3g流量包</span></p>
                                                              	<p><span class="l">资　　费：</span><span class="r">10元/月</span></p>
                                                              	<p><span class="l">生效时间：</span><span class="r">立即生效</span></p>
                                                              	<p><span class="l">优惠活动：</span><span class="r">订购即送5元话费</span></p>
			                                              	</td>
			                                              	<td class="on9">2014年8月12日</td>
			                                              	<td class="on9">订购</td>
			                                              	<td class="on8">开通处理中<p><a class="reblink" href="#">快速充值</a></p></td>
			                                              	<td class="on8">-----------</td>
			                                            </tr>
			                                       	</table>
		                                     	</div> 
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
<link rel="stylesheet" href="spm_modules/alice-form/1.1.0/src/form.css">
<link rel="stylesheet" href="spm_modules/alice-paging/1.1.0/paging.css">
<?php include("footer.php"); ?>
