<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="utf-8">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>登录</title>                       <!--网页标题-->
        <meta name="description" content="登录页面">  <!--网页介绍-->
        <META NAME ="keywords" CONTENT="登录">    <!--搜索关键词-->
        <script language="JavaScript">
			function changeVerify(){
 			var timenow = new Date().getTime();
 			document.getElementById('verifyImg').src='<?php echo U('/Home/Login/verify','','');?>'+'/'+timenow;  
			}
		</script>
		<link rel="stylesheet" href="/SmallCrm/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/SmallCrm/Public/css/login.css">
		<link rel="shortcut icon" type="image/x-icon" href="/SmallCrm/Public/image/favicon.ico" />
		<style>
			body{
				background-image:url("/SmallCrm/Public/image/<?php echo ($bg); ?>"); 
				background-color:<?php echo ($color); ?>;
			}
		</style>
		<!--[if lt IE 9]>
      	<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
	</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-1 col-xs-2">
	    				<img class="img-responsive" src="/SmallCrm/Public/image/logo.png" alt="">
	    			</div>
	    			<div class="col-md-1 col-xs-2">
	    				<img class="img-responsive" src="/SmallCrm/Public/image/logo2.png" alt="">
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>
</nav>
<div class="container main">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
			<form action="<?php echo U('/Home/Login/login');?>" method="post">
				<div class="form-group">
					<label for="username"></label>
					<input type="text" class="form-control" id="username" name="username" placeholder="用户名">
					</div>
					<div class="form-group">
    				<label for="password"></label>
   					<input type="password" class="form-control" id="password" name="password" placeholder="密码">
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
	 							<label for="verify"></label>
	 						</div>
	 						<div class="col-md-6">
	 							<input type="text" class="form-control" name="verify" id="verify" placeholder="验证码" >	
	 						</div>
	 						<div class="col-md-6">
	 							<img id="verifyImg" src="<?php echo U('/Home/Login/verify','','');?>" onClick="changeVerify()" title="点击刷新验证码" />
	 						</div>	
						</div>
					</div>
				<div class="form-group">
					<input type="submit" value="登录" class="btn btn-info">
				</div>
			</form>
		</div>
	</div>
</div>
<footer>
	<div class="container">
		<div class="row">
				<div class="col-md-8">
					<p>© 四川众合世纪网络技术有限公司，版本号：v1.32 Beta</p>
				</div>
				<div class="col-md-4">
					<p class="pull-right">Coding by Luoye~</p>
				</div>
			
		</div>
	</div>
</footer>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="/SmallCrm/Public/js/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="/SmallCrm/Public/js/bootstrap.min.js"></script>
</body>
</html>