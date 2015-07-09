<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="utf-8">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>客户查看</title>                       <!--网页标题-->
        <meta name="description" content="客户查看">  <!--网页介绍-->
        <META NAME ="keywords" CONTENT="客户查看">    <!--搜索关键词-->
        <link rel="stylesheet" href="/SmallCrm/Public/css/bootstrap.min.css">
        <link rel="stylesheet" href="/SmallCrm/Public/css/index.css">
        <link rel="shortcut icon" type="image/x-icon"  href="/SmallCrm/Public/image/favicon.ico" />
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
      <div class="row well well-sm">
	<div class="col-xs-12 col-sm-4 col-md-4">
		<form class="navbar-form navbar-left" role="search" action="<?php echo U('/Home/Search/searched');?>" method="post">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="搜索客户" name="searched">
			</div>
			  <input class="btn btn-success" type="submit" value="搜索">
		</form>
	</div>


<!-- 	<div class="col-xs-12 col-sm-8 col-md-8">
		<form action="<?php echo U('/Home/Search/screening');?>" method="post" class="navbar-form navbar-right">
			<div class="form-group">
				<span>是否合作：</span>
				<select name="success" id="" class="form-control">
					<option value="all">所有</option>
					<option value="1">已合作</option>
					<option value="0">未合作</option>
				</select>
				<span>所属人：</span>
				<select name="username" id="" class="form-control">
					<option value="0">所有</option>
					<?php $__FOR_START_1305897489__=1;$__FOR_END_1305897489__=$maxid;for($i=$__FOR_START_1305897489__;$i < $__FOR_END_1305897489__;$i+=1){ if(is_array($username)): foreach($username as $key=>$n): if(($i == $n['id'])): ?><option value="<?php echo ($v['uid']); ?>"><?php echo ($n["name"]); ?></option><?php endif; endforeach; endif; } ?>
				</select>
				<span></span>
				<span>添加日期：</span>
				<input type="date" name="date1" id="">
				<span>至</span>
				<input type="date" name="date2" id="">
				<input type="submit" value="筛选" class="btn btn-success">
			</div>
		</form>
	</div> -->






	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  筛选
	</button>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">筛选</h4>
	      </div>
	      <div class="modal-body">
	        <form action="<?php echo U('/Home/Search/screening');?>" method="post" class="navbar-form navbar-right">
				<div class="form-group">
					<span>是否合作：</span>
					<select name="success" id="" class="form-control">
						<option value="all">所有</option>
						<option value="1">已合作</option>
						<option value="0">未合作</option>
					</select>
				</div>
				<div class="form-group">
					<span>所属人：</span>
					<select name="username" id="" class="form-control">
						<option value="0">所有</option>
						<?php $__FOR_START_1498687586__=1;$__FOR_END_1498687586__=$maxid;for($i=$__FOR_START_1498687586__;$i < $__FOR_END_1498687586__;$i+=1){ if(is_array($username)): foreach($username as $key=>$n): if(($i == $n['id'])): ?><option value="<?php echo ($v['uid']); ?>"><?php echo ($n["name"]); ?></option><?php endif; endforeach; endif; } ?>
					</select>
				</div>
				<div class="form-group">
					<span>添加日期：</span>
					<input type="date" name="date1" id="">
					<span>至</span>
					<input type="date" name="date2" id="">
					
				</div>
			
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <input type="submit" value="筛选" class="btn btn-success">
	      </div>
	      </form>
	    </div>
	  </div>
	</div>
	<!-- end -->
</div>

      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-2"><p class="text-center"><?php echo ($system["0"]["value1"]); ?></p></div>
            <div class="col-xs-12 col-sm-6 col-md-1"><p class="text-center"><?php echo ($system["0"]["value2"]); ?></p></div>
            <div class="col-xs-12 col-sm-6 col-md-2"><p class="text-center"><?php echo ($system["0"]["value3"]); ?></p></div>
            <div class="col-xs-12 col-sm-6 col-md-1"><p class="text-center"><?php echo ($system["0"]["value4"]); ?></p></div>
            <div class="col-xs-12 col-sm-6 col-md-1"><p class="text-center"><?php echo ($system["0"]["value5"]); ?></p></div>
            <div class="col-xs-12 col-sm-6 col-md-1"><p class="text-center"><?php echo ($system["0"]["value6"]); ?></p></div>
            <div class="col-xs-12 col-sm-6 col-md-1"><p class="text-center">所属伙伴</p></div>
            <div class="col-xs-12 col-sm-6 col-md-1"><p class="text-center">添加时间</p></div>
            <div class="col-xs-12 col-sm-6 col-md-2"><p class="text-center">操作</p></div>
          </div>
        </div>
        <div class="panel-body">
          <?php if(is_array($result)): foreach($result as $key=>$v): if(($v['success'] == 1 )): ?><div class="row well well-sm">
            <?php else: ?>
              <div class="row"><?php endif; ?>

              <div class="col-xs-12 col-sm-6 col-md-2 overflowed"><p class="text-center">
                <a class="btn btn-default" href="<?php echo U('/Home/Customer/seeremarks',array('id'=>$v['id']));?>">
                  <?php echo ($v["gname"]); ?>
                </a></p></div>
              <div class="col-xs-12 col-sm-6 col-md-1 overflowed"><p class="text-center"><?php echo ($v["name"]); ?></p></div>
              <div class="col-xs-12 col-sm-6 col-md-2 overflowed"><p class="text-center"><?php echo ($v["tel"]); ?></p></div>
              <div class="col-xs-12 col-sm-6 col-md-1 overflowed"><p class="text-center"><?php echo ($v["ca"]); ?></p></div>
              <div class="col-xs-12 col-sm-6 col-md-1 overflowed"><p class="text-center"><?php echo ($v["location"]); ?></p></div>
              <div class="col-xs-12 col-sm-6 col-md-1 overflowed"><p class="text-center"><?php echo ($v["address"]); ?></p></div>
              <div class="col-xs-12 col-sm-6 col-md-1 overflowed"><p class="text-center">
                <?php if(is_array($username)): foreach($username as $key=>$n): if(($v['uid'] == $n['id'])): echo ($n["name"]); endif; endforeach; endif; ?>
              </p></div>
              <div class="col-xs-12 col-sm-6 col-md-1 overflowed "><p class="text-center"><?php echo (date("Y-m-d h:i",$v["date"])); ?></p></div>
              <div class="col-xs-12 col-sm-6 col-md-2 overflowed"><p class="text-center">
                <a class="btn btn-primary" href="<?php echo U('/Home/Customer/inscustomer',array('id'=>$v['id']));?>">
                  修改</a>
                <a class="btn btn-warning" href="<?php echo U('/Home/Customer/addseas',array('id'=>$v['id']));?>">
                  丢进公海</a>
                </p></div>
            </div><?php endforeach; endif; ?>
        </div>
        <div class="panel-footer">
          <a class="btn btn-success abottom" href="<?php echo U('/Home/Customer/seeseas');?>">查看公海</a>
          <?php echo ($page); ?>
        </div>
      </div>
    </div>
<footer>
	<div class="container">
		<div class="row">
				<div class="col-md-8">
					<p>© 四川众合世纪网络技术有限公司，版本号：v1.53 Beta</p>
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