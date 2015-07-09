<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="utf-8">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Small-Phoenix CRM</title>                       <!--网页标题-->
        <meta name="description" content="管理首页">  <!--网页介绍-->
        <META NAME ="keywords" CONTENT="管理首页">    <!--搜索关键词-->
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

<div class="container">
  <div class="row">
    <?php if(is_array($require)): foreach($require as $key=>$v): ?><div class="col-md-4 col-sm-6 col-xs-12 notice panel panel-info">
        <div class="row noticeheader panel-heading">
          <div class="col-md-6 col-xs-6">
            <p class="text-center"><strong>发布人</strong></p>
            <p class="text-center"><strong><?php echo ($v["username"]); ?>(<?php echo ($v["name"]); ?>)</strong></p>
          </div>
          <div class="col-md-6 col-xs-6 ">
            <p class="text-center"><strong>发布时间</strong></p>
            <p class="text-center"><strong><?php echo (date("Y-m-d H:i",$v["addtime"])); ?></strong></p>
          </div>
        </div>
        <div class="col-md-12 col-xs-12 noticebody panel-body">
          <pre class="text-left text-muted"><?php echo ($v["text"]); ?></pre>
        </div>
      </div><?php endforeach; endif; ?>
    <div class="col-md-12 col-xs-12">
        <?php echo ($page); ?>
    </div>
  </div>
</div> 
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