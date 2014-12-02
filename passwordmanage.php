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
							<div class="right-title">密码管理</div>
							
							<div class="passwordmanage">
								<form class="ui-form" name="" method="post" action="#" id="">
								    <fieldset>
								        <legend>表单标题</legend>

								        <div class="ui-form-item ui-form-item-error">
								            <label for="" class="ui-label">我的账号：</label>
								            <p class="ui-form-text">huihui0537@163.com</p>
								        </div>

										<div class="ui-form-item">
								            <label for="" class="ui-label">
								                <span class="ui-form-required">*</span>旧密码：
								            </label>
								            <input class="ui-input" type="text"> <span class="ui-form-other"></span>
								            <p class="ui-form-explain">默认文案。</p>
								        </div>

								        <div class="ui-form-item">
								            <label for="" class="ui-label">
								                新密码：
								            </label>
								            <input class="ui-input" type="text"> <span class="ui-form-other"></span>
								            <p class="ui-form-explain">默认文案。</p>
								            
								        </div>

								        <div class="ui-form-item">
								            <label for="" class="ui-label">
								                确认新密码：
								            </label>
								            <input class="ui-input" type="text"> <span class="ui-form-other"></span>
								            <p class="ui-form-explain">默认文案。</p>
								            
								        </div>

								        <div class="ui-form-item">
								            <input type="submit" class="ui-button passbtn" value="保存修改">
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
