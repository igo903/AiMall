<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie ie6"><![endif]-->
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html class="ie8"><![endif]-->
<!--[if !IE]><!-->
<html lang="zh-CN">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>亚信商城</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="spm_modules/alice-base/1.1.0/src/base.css">
	<link rel="stylesheet" href="spm_modules/alice-button/1.3.0/button.css">
	<link rel="stylesheet" href="spm_modules/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="spm_modules/alice-form/1.1.0/src/form.css">
	<script type="text/javascript" src="spm_modules/seajs/2.3.0/sea-debug.js"></script>
	<!--[if lt IE 9]>
	    <script src="spm_modules/html5shiv/dist/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
<div id="topNav" class="site-nav">
	<div class="mininavInner site-nav-bd">

		<div class="fn-left">
			<span>产业互联网-亚信商城开通啦！</span>
			<a href="login.php" class="ai">请登录</a>
			<a href="javascript:;">免费注册</a>
		</div>
		
		<div class="fn-right dropdowns">		
			<div class="fn-left">
				<a href="javascript:;" id="myMall">我的商城<i class="fa fa-angle-down" id="rm"></i></a>
				<ul id="popupMyMall" class="fn-hide ui-popup">
					<li><a href="javascript:;">我的订单</a></li>
					<li><a href="javascript:;">个人信息</a></li>
					<li><a href="javascript:;">收货地址维护</a></li>
					<li><a href="javascript:;">我的收藏</a></li>
				</ul>

				<a href="javascript:;" class="" id="mobileMall">手机商城</a>
				<a href="javascript:;" id="clientService">客户服务</a>
				<a href="javascript:;" class="" id="siteMap">网站导航</a>
				<a href="javascript:;" class="" id="bookmarkAi">收藏亚信商城</a>
			</div>
		</div>
	</div>
</div><!--//topnav-->

<div id="Ai_Wrap" class="wrap row">		
	<div class="screen-hd row" id="home-part-1">

		<div class="head">
			<div class="logo">
				<h1>
					<a href="index.php" class="ailogo"></a>
				</h1>
				<b class="loginicon">欢迎注册</b>
			</div>
		</div>

		<div class="reg-cont">
		<div class="reg-login">我已注册，现在<a href="">登录</a></div>

			<div class="reg-box">
				<form class="ui-form" name="" method="post" action="#" id="">
				    <fieldset>
				        <legend>表单标题</legend>
				        <div class="ui-form-item">
				            <label for="username" class="ui-label label-plus"> <span class="ui-form-required">*</span>注册邮箱</label>
				            <input id="username" name="username" class="ui-input" type="text" />
				            <div class="ui-form-explain">默认文案</div>
				            
				            <div class="form-prompt">邮箱已被占用	</div>
				        </div>

				        <div class="ui-form-item">
				            <label for="username" class="ui-label label-plus"><span class="ui-form-required">*</span>设置密码</label>
				            <input id="username" name="username" class="ui-input" type="password" />
				            <div class="ui-form-explain">默认文案</div>
				            <div class="p-strength">
		                     	<ul>
		                         	<li class="weak">弱</li>
		                         	<li>中</li>
		                         	<li>强</li>
		                     	</ul>
		                   	</div>
				            
				        </div>

				        <div class="ui-form-item">
				            <label for="username" class="ui-label label-plus"><span class="ui-form-required">*</span>确认密码</label>
				            <input id="username" name="username" class="ui-input" type="password" />
				            <div class="ui-form-explain">默认文案</div>
				            <div class="p-strength">
		                     	<ul>
		                         	<li class="weak"><!--弱--></li>
		                         	<li class="mod"><!--中--></li>
		                         	<li class="forte">强</li>
		                     	</ul>
		                   	</div>
				        </div>

				        <div class="ui-form-item">
				            <label for="" class="ui-label label-plus"><span class="ui-form-required">*</span>验证码</label>
				            <input class="ui-input ui-input-checkcode yzm" type="text" data-explain="请输入右图中字符，不区分大小写。" maxlength="4" autocomplete="off" value="" name="fourcode">
				            <img class="ui-checkcode-imgcode-img" align="absMiddle" alt="请输入您看到的内容" src="https://omeo.alipay.com/service/checkcode?sessionID=82012ab6b1f4ed9e675fb9092a25cb3b&r=0.9321065918075809"  title="点击刷新图片校验码">
				            <a href="#" class="imgcode-a">看不清，换一张</a>
				        </div>

				         <div class="ui-form-item">
				            <label for="test" class=" label-plus">
				                <input class="ui-checkbox "  id="test" value="" type="checkbox">
				                我已阅读并同意<a href="javascript:;" class="label-a" id="aiAgree" data-name="aiAgreement">《亚信商城注册协议》</a>
				            </label>
				        </div>

						<div class="ui-form-item">
				            <input type="submit" class="ui-button btn350" value="注册">
				        </div>

				    </fieldset>
			  	</form>


			</div>
		</div>

	</div>
</div>




<div id="aiAgreement" class="belonging overlay_content">
	<div class="close_overlay"><a href="javascript:;"></a></div>
	<div class="white">
		<div class="">
			<h1>注册协议</h1>
			<div class="txt">			
				<div>
					<p>
						尊敬的客户，欢迎访问亚信商城。您可通过亚信商城进行用户信息查询、信息变更、缴费、业务办理等本网站提供的自助服务。 要成为亚信商城使用者，请您必须仔细阅读同意并接受以下服务条款，谢谢！
					</p>
					<div>
						<h4>一、定义</h4>
						<p>1、本网站：指亚信商城，网址为www.5aimall.com。</p>
						<p>2、亚信公司：指亚信科技（中国）有限公司的缩写。</p>
						<p>3、用户/您：指同意并遵守本协议，完成本网站所有注册程序并经本网站确认，拥有本网站用户登陆账号和密码的自然人、法人、其他组织。</p>
						<p>4、用户信息：指用户注册信息以及用户使用本网站用户服务时提交的、被本网站所知悉的交易信息。</p>
						<p>5、用户注册，是指用户登陆亚信商城，并按要求填写相关信息并确认同意履行本协议的过程。</p>
						<p>6、用户注册信息：指用户在本网站注册的各项信息，包括其后通过身份验证后修改所填写的内容。</p>
						<p>7、用户指令：本协议中，除非专门指明或声明，均指用户以数据电文形式向本网站提出的申请、要求，包括但不限于用户要求本网站提供、变更或取消其依据本网站业务流程可享有的各项服务的申请、要求。</p>
						<p>8、用户服务/产品使用协议：根据亚信公司的业务规定或规则，用户与亚信公司就提供电信业务服务事宜另行签署的协议和/或合同。</p>
						<p>9、用户服务：指本网站基于互联网方式向用户提供的业务宣传、业务查询、业务办理、交费充值、网上销售、客户服务等服务。</p>
					</div>
					<div>
						<h4>二、协议条款的确认和接受</h4>
						<p>1、本网站在此特别提醒您，在您使用注册前请确实仔细阅读本协议，如果您对本协议的任何条款和/或将来随时可能修改、补充的条款有异议，您可选择不注册成为本网站的用户。</p>
						<p>2、当您点选“同意”按钮时即视为您已仔细阅读本条款，同意接受本协议条款的所有规范包括接受本网站对本协议条款随时所做的任何修改，并愿受其拘束。</p>
						<p>3、本网站有权在必要时修改本协议条款，协议条款一旦发生变动，将会在重要页面上提示修改内容。如果不同意所改动的内容，用户可以主动注销其用户账号。如果用户继续享用本网站所提供的网络服务，则视为接受服务条款的变动。</p>
						<p>4、本网站保留在任何时候自行决定对本网站及其相关功能的变更、升级、修改、转移的权利。本网站进一步保留在本网站中开发新的功能或其它语种服务的权利。上述所有新的功能、软件服务的提供，除非本网站另有说明，否则仍适用本协议。</p>
					</div>
					<div>
						<h4>三、服务内容</h4>
						<p>1、本网站将按照本协议及相关操作规程为用户提供相应的用户服务。本网站保证其所提供服务的合法性，并有义务在现有技术上维护整个网上服务及交易的正常运行，并努力提升和改进技术，使用户网上服务和交易活动得以顺利进行。</p>
						<p>2、本网站所提供的用户服务包括用户注册、登录、安全退出、找回密码、修改密码、历史订单查询等服务，本网站有权根据情况变化调整用户服务具体内容。</p>
						<p>3、本网站仅提供网络服务，与网络服务有关的通信设备（如电脑、调制解调器及其他与接入互联网有关的装置）及通信服务所需的费用（如为接入互联网而支付的电话费及宽带费）由用户自行承担。</p>
						<p>4、用户了解并确认本网站中可能包含由第三方提供的服务，本网站只是为了用户的便利而提供功能模块。用户如需使用此等服务，应另行与服务提供方达成服务协议，支付相应费用并承担可能的风险。本网站对第三方提供的服务不提供任何形式的保证。</p>
					</div>
					<div>
						<h4>四、使用规则</h4>
						<p>1、用户保证自己在注册时用户身份的真实性和正确性及完整性，如果资料发生变化，用户应及时更改，本网站不能也不会对您的资料不真实、不准确，或您的资料未能及时更新，或因您丢失了身份号码和密码而引起的任何损失或损害承担责任。若用户提供任何错误、不实、过时或不完整的资料，并为本网站所确知；或者本网站有合理理由怀疑前述资料为错误、不实、过时或不完整，本网站有权暂停或终止用户的账号，并拒绝现在或将来使用本服务的全部或一部分。 亚信公司或本网站有权对用户的注册数据及相关操作进行查阅，发现注册数据或相关操作中存在任何问题或怀疑，均有权向用户发出询问及要求改正的通知或者直接作出删除等处理。</p>
						<p>2、用户账号、密码用户登陆账号及密码为用户在本网站的唯一身份权证，为享受本网站提供的用户服务，您须按照对应的服务要求键入正确的客户登陆账号及密码。 您应保管好自己的客户登陆账号和密码，在服务使用过程中可更改密码。非因本网站原因导致客户登陆账号、密码遗失、遗忘或被他人窃取的，本网站不承担责任。 如果用户发现自己的个人信息泄密，尤其是本网站账户及密码发生泄露，请用户立即联络本网站。</p>
						<p>3、用户在使用本网站所提供网络服务过程中，必须遵循以下原则：</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(a)遵守中国有关的法律和法规；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(b)不得为任何非法目的而使用本网站所提供网络服务系统；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c)遵守所有与网络服务有关的网络协议、规定和程序；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(d)禁止出售、转售或复制、开发本网站授予的使用权限；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(e)禁止基于商业目的模仿亚信公司的产品和服务；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(f)禁止复制和模仿亚信公司的设计理念、界面、功能、图表、文档资料、软件、商标、FLASH、设计、图案、音像、摄影、动画、美术等；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(g)禁止未经亚信公司许可，基于本网站所提供的网络服务或其内容进行修改或制造派生其他产品；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(h)禁止发送违反法律、法规、信息产业行业或亚信公司相关规定的信息，并不违反社会公共利益或公共道德，禁止发送和储存带有病毒的、蠕虫的、木马的和其他有害的计算机代码、文件、脚本和程序；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i)不得利用本网站进行任何可能对互联网的正常运转造成不利影响的行为；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(j)不得利用本网站传输任何非法、有害、胁迫、骚扰、侵害、中伤、粗俗、猥亵、诽谤、淫秽、侵害他人隐私、种族歧视或其他另人不快的包括但不限于文字、软件、音乐、照片、图形、视频或其他内容；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(k)不得以任何方式危害未成年人；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(l)不得冒充任何人或机构，或以虚伪不实的方式谎称而使人误认为与任何人或任何机构有关。</p>
						<p>4、用户必须通过亚信公司指定的系统登录并使用本网站，对于通过其它手段登录、使用所造成的后果，亚信公司和本网站将不承担任何责任。如用户使用本网站任何第三方所提供服务，对于用户和第三方之间的纠纷，亚信公司和本网站将不承担任何责任。</p>
						<p>5、用户承诺其通过本网站服务进行活动引发的一切后果，由其承担全部责任。如因用户使用本网站的行为，导致亚信公司或任何第三方为此承担了相关的责任，用户需全额赔偿亚信公司或任何第三方的相关支出及损失，包括律师费用、诉讼费等。</p>
					</div>
					<div>
						<h4>五、用户隐私保护</h4>
						<p>1、本网站保证不对外公开或向第三方提供用户注册资料及用户在使用网络服务时存储在本网站上的非公开内容，但下列情况除外：</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(a)事先获得用户的明确授权；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(b)根据有关的法律法规要求；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c)按照相关政府主管部门的要求；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(d)为维护社会公众的利益；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(e)为维护本网站或用户的合法权益；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(f)不可抗力所导致的用户信息公开；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(g)不能归咎于本站的客观情势，所导致的个人资料的公开；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(h)由于本网站的硬件和软件的能力限制，所导致用户信息的公开；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i)本网站有充分理由相信用户信息的公开，符合本站和用户利益要求的。</p>
						<p>2、在不透露单个用户信息的前提下，本网站有权对整个用户数据库进行分析并对用户数据库进行利用。</p>
						<p>3、本网站应在其网络系统内建立合理的安全体系，包括身份识别体系、内部安全防范体系，以使用户数据完整，并且保密。但用户了解并同意技术手段在不断更新，本网站无法杜绝全部的非安全因素，但本网站会及时更新体系，妥善维护网络及相关数据。</p>
					</div>
					<div>
						<h4>六、服务变更、中断或终止</h4>
						<p>1、如因系统维护或升级的需要而需暂停网络服务本网站将尽可能事先进行通告。</p>

						<p>2、本网站有权判定您的行为是否符合本网站有关要求，出现包括但不限于以下情形的，本网站有权单方在不作通知的情况下终止对您提供的客户服务，由此产生的风险及责任由您自行承担。如造成亚信公司或本网站损失的，您还应承担赔偿等责任：</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(a)用户提供的注册资料不真实；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(b)用户违反本协议中规定的使用规则；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(c)用户应按时足额向亚信公司支付费用；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(d)用户使用期限届满后未支付下一收费期间服务费用的；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(e)用户所绑定的业务号码注销或被销户的；</p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(f)用户违反本协议其它规定，且自亚信公司书面通知其纠正之日起10个工作日内仍未纠正的。</p>
						<p>3、本协议的终止，以为您在本网站的服务即终止。即时起，本网站将不保留您客户登陆账号中的任何内容或不负责将未阅读或未发出之信息传送给用户或第三方。</p>

						<p>	4、本协议的终止并不能当然的被认为免除用户在本协议生效期间应履行的相关付款义务。</p>
							
						<p>	5、本协议的终止并不意味着终止前所发生的未完成客户指令的撤销，也不能消除因终止前的交易所带来的法律后果。</p>
							
						<p>	6、本网站保留在不事先通知用户的情况下随时中断或终止部分或全部网络服务的权利，对于所有服务的中断或终止而造成的任何损失，本网站无需对用户或任何第三方承担任何责任。</p>
					</div>
					<div>
						<h4>七、知识产权</h4>
						<p>1、亚信公司拥有本网站的著作权、商标权、商业秘密以及其他相关的知识产权，包括但不限于各种文档资料、软件、商标、FLASH、设计、图案、音像、摄影、动画、美术等。其它本协议中未经提及的权利亦由亚信公司保留。</p>

						<p>2、亚信公司及相关亚信标识均属于亚信公司的知识产权，并受到著作权法，商标法和其它知识产权法律的保护，未经授权地复制，模仿，使用或发布上述标识，均被禁止。</p>

						<p>3、未经亚信公司事先书面同意，用户不得为任何营利性或非营利性的目的自行实施、利用、转让或许可任何第三方实施、利用、转让上述知识产权。</p>
					</div>
					<div>
						<h4>八、免责声明</h4>
						<p>1、本网站不就通信系统或互联网的中断或无法运作、技术故障、计算机错误或病毒、信息损坏或丢失或其它在本网站合理控制范围之外的原因而而产生的其他任何性质的破坏而向用户或任何第三方承担赔偿责任。</p>

						<p>2、亚信公司不保证用户在使用本网站时在操作上不会中断或没有错误，不保证会纠正本网站所有缺陷，亦不保证本网站能满足用户的所有要求。</p>

						<p>3、本网站不担保其所提供的网络服务一定能满足用户的要求，也不担保网络服务不会中断，对网络服务的及时性、安全性、准确性也都不作担保。如因本网站原因造成本网站不正常中断或其它技术故障，则用户同意所获唯一赔偿为不超过本协议项下亚信公司已收取费用总额。</p>

						<p>4、用户明确同意其使用本网站网络服务所存在的风险将完全由其自己承担；因其使用本网络服务而产生的一切后果也由其自己承担，亚信公司对用户不承担任何责任。</p>

						<p>5、用户在此同意亚信公司在任何情况下都无需向用户或任何第三方在使用本网站时对其在传输或联络中的延迟、不准确、错误或疏漏及因此而致使的损害负责。</p>

						<p>6、在所适用的法律允许的范围内，任何一方均无须就数据的丢失和/或损坏及任何间接的、附带的、特殊的、后果性的损失向另一方负责赔偿（包括但不限于损失的利润、业务的中断、商业信息的丢失、商誉损失或其它经济损失）。</p>

						<p>7、双方承认本条款反映了双方就协商谈判达成的一致意见。双方均完全了解本条款的后果并进一步承认本条款的合理性。</p>
					</div>
					<div>
						<h4>九、本网站链接</h4>
						<p>1、从本网站链接至亚信公司以外的网站： 某些情况下，本网站会提供跳转至国际互联网上的其它页面或网站的链接。此链接将会引您至第三方发行或经营的网站，而该第三方并非亚信公司的合作机构或与亚信公司有任何联系。亚信公司将该链接列入网站内，仅为协助用户浏览和参考之用。亚信公司致力于挑选声誉良好的网站和资料来源，以方便用户。 然而，除非亚信公司已经明确声明与该第三方有合作关系，提供链接至此第三方网站或网页，并不视为亚信公司同意、推荐、认可、保证或推介任何第三方或在第三方网站上所提供的任何服务、产品，亦不可视为亚信公司与该第三方及其网站有任何形式的合作。</p>
						<p>2、从本网站链接至亚信公司其它网站： 本网站亦包含链接至亚信公司其它网站，以方便您的使用。该网站所提供的产品和服务只提供给身处或居所属于该司法管辖地区的人士使用。亚信公司其他网站各自制定使用条款，条款可能互有差异，您应先仔细查阅适用的使用条款，然后才使用相关的网站。</p>
						<p>3、从其他网站链接至本网站： 若您想在第三方的网站以任何形式建立链接至本网站，必须先取得亚信公司的书面同意,亚信公司有权决定是否核准建立此链接。 凡从第三方网站建立任何链接至本网站，亚信公司不负责该链接的建立与设置。依此建立的链接，并不构成亚信公司与该第三方网站有任何形式的合作，亦不构成亚信公司对该第三方网站的认同。 如因该链接而产生或导致的任何需由您或第三方承担或蒙受的损失或损害，亚信公司不承担任何责任。对于经由亚信公司核准以纯文字格式或任何形式建立的链接，亚信公司保留随时撤销核准的权利，并有权要求清除任何指向本网站的链接。</p>
				</div>
				<div>
					<h4>十、不可抗力</h4>
					<p>如果由于黑客攻击或政府管制或网络通讯瘫痪等用户对其发生和后果不能预见的事件，双方均确认此属不可抗力；双方应按照不可抗力对影响履行本协议的程度，协商决定是否解除本协议、免除履行本协议的部分义务，或者延期履行本协议。</p>
				</div>	
				<div>
					<h4>十一、法律及争议解决</h4>
					<p>1、本协议适用中华人民共和国法律。如遇本协议有关的某一特定事项缺乏明确法律规定，则应参照通用国际商业惯例和（或）行业惯例。</p>

					<p>2、因双方就本协议的签订、履行或解释发生争议，双方应努力友好协商解决。如协商不成，任何一方均有权向本网站服务器托管地有管辖权的人民法院起诉</p>
				</div>
				<div>
					<h4>十二、协议的转让</h4>
					<p>除非取得本网站事先书面同意，用户不得将其在本协议项下的权利与义务转让给任何第三方。</p>
				</div>
				<div>
					<h4>十三、其他</h4>
					<p>1、本协议构成用户和亚信公司间就使用本网站的完整的协议，并取代双方就有关本协议所载任何事项于先前以口头及书面达成的共识。</p>
					<p>2、如本协议的任何条款被视作无效或无法执行，则上述条款可被分离，其余部分则仍具有法律效力。</p>
					<p>3、本协议的标题仅为方便阅读所设，非对条款的定义、限制、解释或描述其范围或界限。</p>
					<p>4、本网站于用户过失或违约时放弃本协议规定的权利的，不得视为其对用户的其他或以后同类之过失或违约行为弃权。</p>
				</div>
				</div>
			
			</div>
			<div class="gobuy">
				<a href="javascript:;" class="">确定</a>
			</div>
		</div><!--//-->
	</div>
</div>



<div id="overlay_area">
	<div></div>
</div>


<script type="text/javascript" src="js/details.js"></script>
<?php include("footer.php"); ?>