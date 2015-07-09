<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="utf-8">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>修改客户信息</title>                       <!--网页标题-->
        <meta name="description" content="修改客户信息">  <!--网页介绍-->
        <META NAME ="keywords" CONTENT="修改客户信息">    <!--搜索关键词-->
        <link rel="stylesheet" href="/SmallCrm/Public/css/bootstrap.min.css">
        <link rel="stylesheet" href="/SmallCrm/Public/css/index.css">
        <link rel="shortcut icon" type="image/x-icon" href="/SmallCrm/Public/image/favicon.ico" />
        <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
<body>
	<!-- <nav>
    <span><a href="<?php echo U('/Home/Index/index');?>">首页</a></span>
    <span>|</span>
  	<span><a href="<?php echo U('/Home/Customer/seecustomer');?>">客户查看</a></span>
    <span class="needadmin" style="display:<?php echo ($needadmin); ?>;"><a href="<?php echo U('/Home/Customer/delcustomer');?>">客户管理</a></span>
  	<span><a href="<?php echo U('/Home/Customer/addcustomer');?>">添加客户</a></span>
  	<span>|</span>
  	<span><a href="<?php echo U('/Home/Partner/index');?>">修改密码</a></span>
    <span class="needadmin" style="display:<?php echo ($needadmin); ?>;"><a href="<?php echo U('/Home/Partner/deluser');?>">伙伴管理</a></span>
  	<span class="needadmin" style="display:<?php echo ($needadmin); ?>;"><a href="<?php echo U('/Home/Partner/adduser');?>">添加伙伴</a></span>
  	<span>|</span>
    <span class="needadmin" style="display:<?php echo ($needadmin); ?>;"><a href="<?php echo U('/Home/Index/delnotice');?>">公告管理</a></span>
  	<span><a href="<?php echo U('/Home/Index/notice');?>">发布公告</a></span>
  	<span id="loginout"><a href="<?php echo U('/Home/Login/loginout');?>">登出</a></span>
</nav> -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">折叠菜单</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="/SmallCrm/Public/image/logo1_2.png" alt="" class="navbar-brand img-responsive">
      <img src="/SmallCrm/Public/image/logo2_2.png" alt="" class="navbar-brand img-responsive">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo U('/Home/Index/index');?>">
          <span class="glyphicon glyphicon-home"></span>
          首页 <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="glyphicon glyphicon-phone-alt"></span>
            客户 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo U('/Home/Customer/seecustomer');?>">
              <span class="glyphicon glyphicon-search"></span>
              客户查看</a></li>
            <li><a href="<?php echo U('/Home/Customer/addcustomer');?>">
              <span class="glyphicon glyphicon-edit"></span>
              添加客户</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo U('/Home/Search/counts');?>">
              <span class="glyphicon glyphicon-equalizer"></span>
              客户统计</a></li>
            <li><a href="<?php echo U('/Home/Customer/delcustomer');?>" class="needadmin" style="display:<?php echo ($needadmin); ?>;">
              <span class="glyphicon glyphicon-calendar"></span>
              客户管理</a></li>
          </ul>
        </li>
        <li><a href="<?php echo U('/Home/Index/notice');?>">
          <span class="glyphicon glyphicon-edit"></span>
          发布公告</a></li>
        <li><a href="<?php echo U('/Home/Index/delnotice');?>" class="needadmin" style="display:<?php echo ($needadmin); ?>;">
          <span class="glyphicon glyphicon-check"></span>
          公告管理</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="<?php echo U('/Home/System/index');?>" class="needadmin" style="display:<?php echo ($needadmin); ?>;">
          <span class="glyphicon glyphicon-cog"></span>
          系统设置
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="glyphicon glyphicon-user"></span>
            个人 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo U('/Home/Partner/index');?>">
              <span class="glyphicon glyphicon-wrench"></span>
              修改密码</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo U('/Home/Partner/deluser');?>" class="needadmin" style="display:<?php echo ($needadmin); ?>;">
              <span class="glyphicon glyphicon-king"></span>
              伙伴管理</a></li>
            <li><a href="<?php echo U('/Home/Partner/adduser');?>" class="needadmin" style="display:<?php echo ($needadmin); ?>;">
              <span class="glyphicon glyphicon-edit"></span>
              添加伙伴</a></li>
          </ul>
        </li>
        <li><a href="<?php echo U('/Home/Login/loginout');?>">
          <span class="glyphicon glyphicon-off"></span>
          登出</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<form action="<?php echo U('/Home/Customer/inscustomerform');?>" method="post">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h4>修改客户信息</h4>
              </div>
              <div class="panel-body">
                <div class="formgroup">
                  <label for="gname" class="control-label"><?php echo ($system["0"]["value1"]); ?>：</label>
                  <input type="text" name="gname" id="gname" value="<?php echo ($result["0"]["gname"]); ?>" class="form-control">
                </div>
                <div class="formgroup">
                  <label for="name" class="control-label"><?php echo ($system["0"]["value2"]); ?>：</label>
                  <input type="text" name="name" id="name" value="<?php echo ($result["0"]["name"]); ?>" class="form-control">
                </div>
                <div class="formgroup">
                  <label for="tel" class="control-label"><?php echo ($system["0"]["value3"]); ?>：</label>
                  <input type="text" name="tel" id="tel" value="<?php echo ($result["0"]["tel"]); ?>" class="form-control">
                </div>
                <div class="formgroup">
                  <label for="ca" class="control-label"><?php echo ($system["0"]["value4"]); ?>：</label>
                  <input type="text" name="ca" id="ca" value="<?php echo ($result["0"]["ca"]); ?>" class="form-control">
                </div>
                <div class="formgroup">
                  <label for="location" class="control-label"><?php echo ($system["0"]["value5"]); ?>：</label>
                  <input type="text" name="location" id="location" value="<?php echo ($result["0"]["location"]); ?>" class="form-control">
                </div>
                <div class="formgroup">
                  <label for="address" class="control-label"><?php echo ($system["0"]["value6"]); ?>：</label>
                  <input type="text" name="address" id="address" value="<?php echo ($result["0"]["address"]); ?>" class="form-control">
                </div>
                <div class="formgroup">
                  <label for="uid" class="control-label">所属人：</label>
                  <select name="uid" id="uid" class="form-control">
                    <option value="now" selected="selected">不修改</option>
                    <?php if(is_array($uid)): foreach($uid as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?> 
                  </select> 
                </div>
                <div class="formgroup">
                  <br>
                  <input type="hidden" name="id"  value="<?php echo ($result["0"]["id"]); ?>">
                  <input class="btn btn-info" type="submit" value="修改">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  	</form>
<footer>
	<div class="container">
		<div class="row">
				<div class="col-md-8">
					<p>© 四川众合世纪网络技术有限公司，版本号：v1.41 Beta</p>
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