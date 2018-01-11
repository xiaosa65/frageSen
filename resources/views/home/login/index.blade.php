<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1">  

<title>login</title>
<link rel="stylesheet" type="text/css" href="public/home/login/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="public/home/login/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="public/home/login/css/component.css" />
<!--[if IE]>
<script src="public/home/login/js/html5.js"></script>
<![endif]-->
</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<div class="logo_box">
						<h3>欢迎你</h3>
						<form action="homeLogCon" name="f" method="post"> 
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
							<div class="input_outer">
								<span class="u_user"></span>
								<input name="logname" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input name="logpass" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
							</div>
							<div class="mb2"> 
								<input type="button" class="act-but submit" style="width:104px;height:50px;margin-right:35px;color: #FFFFFF;float:right;" value="注册" id="zc">
								<input type="submit" class="act-but submit" style="width:104px;height:50px;margin-left:35px;color: #FFFFFF;float:left;" value="登录">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="public/home/login/js/TweenLite.min.js"></script>
		<script src="public/home/login/js/EasePack.min.js"></script>
		<script src="public/home/login/js/rAF.js"></script>
		<script src="public/home/login/js/demo-1.js"></script> 
		<script src="public/home/jquery-2.1.4.min.js"></script> 
		<script>
			$("#zc").click(function(){alert('你不能注册')})
		</script>
	</body>
</html>