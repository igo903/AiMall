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
				<div class="helpbox">
					<div class="bread-nav">
						<span>全部结果</span>
						<i>></i>
						<span>帮助中心</span>
						<i>></i>
						<span>发票说明</span>
					</div>

					<div class="help-cont">
						<?php include("help_side.php"); ?>

		         		<div class="helpright">
			              	<div class="helprighttitle">在线支付</div>
			              	<div class="helprightdd">
			                	<b>支持以下几种在线支付方式：</b>
				                <table width="300" border="0" cellspacing="0" cellpadding="0">
				                  	<tr>
				                    	<td>1.支付宝支付</td>
				                    	<td>2、银联支付</td>
				                  	</tr>
				                  	<tr>
				                    	<td align="center" valign="middle"><div class="zfimg"><img src="images/bank.jpg"/></div></td>
				                    	<td align="center" valign="middle"><div class="zfimg"><img src="images/bank2.jpg" /></div></td>
				                  	</tr>
				                </table>

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


<link rel="stylesheet" href="spm_modules/alice-paging/1.1.0/paging.css">
<?php include("footer.php"); ?>