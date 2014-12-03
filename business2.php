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
				                        <li>已开通业务</li>
				                        <li class="selected">业务办理记录查询</li>
				                    </ul>
				                </div>

				                <div class="myon_tab_box">
									
									<div class="tabdiv ">
                         <div class="myon_retrieve">
                               <label for="textfield">业务名称：</label>
                               <input type="text" name="textfield2" id="textfield" class="retrieveinput1" />
                               <label for="select">受理结果：</label>
                               <select name="select" id="select" class="retrieveselect">
                                 <option value="全部">全部</option>
                               </select>
<input type="submit" name="button" id="button" class="retrievebtn" value="查询" />
                         </div>
                       <div class="address-cont">
                         <table width="100%" class="address-thead" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td class="on1">业务名称</td>
                                      <td class="on2">业务档次</td>
                                      <td class="on3">资费</td>
                                      <td class="on4">订购日期</td>
                                      <td class="on5">生效日期</td>
                                      <td class="on6">失效日期</td>
                                      <td class="on7">操作</td>
                                    </tr>
                                  </table>
                                  <div class="address-body">
                                     <div class="address-tbody">
                                         <table width="100%" class="address-table yestable" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td class="on1">10元包100MB-3G国内流量包 </td>
                                              <td class="on2">10元包100MB-3G国内流量包</td>
                                              <td class="on3">10元/月</td>
                                              <td class="on4">2014年8月10日</td>
                                              <td class="on5">2014年8月10日</td>
                                              <td class="on6">------------</td>
                                              <td class="on7"><a href="#" id="unsubscribe">退订</a></td>
                                            </tr>
                                       </table>
                                     </div> 
                                     <div class="address-tbody">
                                       <table width="100%" class="address-table yestable" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td class="on1">10元包100MB-3G国内流量包 </td>
                                              <td class="on2">10元包100MB-3G国内流量包</td>
                                              <td class="on3">10元/月</td>
                                              <td class="on4">2014年8月10日</td>
                                              <td class="on5">2014年8月10日</td>
                                              <td class="on6">------------</td>
                                              <td class="on7"><a href="#">退订</a></td>
                                            </tr>
                                          </table>
                                     </div>  
                                     <div class="address-tbody">
                                       <table width="100%" class="address-table yestable" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td class="on1">10元包100MB-3G国内流量包 </td>
                                              <td class="on2">10元包100MB-3G国内流量包</td>
                                              <td class="on3">10元/月</td>
                                              <td class="on4">2014年8月10日</td>
                                              <td class="on5">2014年8月10日</td>
                                              <td class="on6">------------</td>
                                              <td class="on7"><a href="#">退订</a></td>
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
