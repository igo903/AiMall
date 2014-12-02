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
							<div class="right-title">收货地址管理</div>
							<div class="address-box">
				                <div class="address-title">已保存的地址</div>
				                <div class="shopping-prompt">最多保存5个有效地址。您目前已保存2个有效地址，还能保存3个有效地址。</div>
				                <div class="address-cont">
			                      	<table width="100%" class="address-thead" border="0" cellspacing="0" cellpadding="0">
				                        <tr>
				                          	<td class="for1">收货人</td>
				                          	<td class="for2">收货地址</td>
				                          	<td class="for3">手机</td>
				                          	<td class="for4">电子邮箱</td>
				                          	<td class="for5">默认</td>
				                          	<td class="for6">操作</td>
				                        </tr>
			                      	</table>
				                      	<div class="address-body">
			                         		<div class="address-tbody">
				                             	<table width="100%" class="address-table yestable" border="0" cellspacing="0" cellpadding="0">
					                                <tr>
					                                  	<td class="for1">张三</td>
					                                  	<td class="for2">湖北  武汉市  江汉区  江汉经济开发区 江旺路8号爱帝楼3楼</td>
					                                  	<td class="for3">18611111111</td>
					                                  	<td class="for4">asa@163.com</td>
					                                  	<td class="for5"><span class="font_red">默认地址</span></td>
					                                  	<td class="for6"><a href="#">修改</a> <a href="#" id="cancelb">删除</a></td>
					                                </tr>
				                              	</table>
				                         	</div> 
				                         	<div class="address-tbody">
				                             	<table width="100%" class="address-table" border="0" cellspacing="0" cellpadding="0">
				                                	<tr>
				                                  	<td class="for1">张三</td>
				                                  	<td class="for2">湖北  武汉市  江汉区  江汉经济开发区 江旺路8号爱帝楼3楼</td>
				                                  	<td class="for3">18611111111</td>
				                                  	<td class="for4">asa@163.com</td>
				                                  	<td class="for5"><span><a href="#">设为默认</a></span></td>
				                                  	<td class="for6"><a href="#">修改</a> <a href="#">删除</a></td>
				                                	</tr>
				                              </table>
				                         	</div> 
				                         	<div class="address-tbody">
				                             	<table width="100%" class="address-table" border="0" cellspacing="0" cellpadding="0">
					                                <tr>
					                                  	<td class="for1">张三</td>
					                                  	<td class="for2">湖北  武汉市  江汉区  江汉经济开发区 江旺路8号爱帝楼3楼</td>
					                                  	<td class="for3">18611111111</td>
					                                  	<td class="for4">asa@163.com</td>
					                                  	<td class="for5"><span><a href="#">设为默认</a></span></td>
					                                  	<td class="for6"><a href="#">修改</a> <a href="#">删除</a></td>
					                                </tr>
				                              	</table>
				                         </div> 
				                      </div>
				                      
				              </div>
				          	</div>

				          	<div class="my-side ">  
				          		<form class="ui-form" name="" method="post" action="#" id="">
								    <fieldset>
								        <legend>表单标题</legend>

										<div class="ui-form-item">
								            <label for="" class="ui-label">
								                <span class="ui-form-required">*</span>收货人：
								            </label>
								            <input class="ui-input" type="text"> <span class="ui-form-other"></span>
								            <p class="ui-form-explain">默认文案。</p>
								        </div>
								        
					         		</fieldset>
								</form>
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
