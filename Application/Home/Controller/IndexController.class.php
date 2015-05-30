<?php 
namespace Home\Controller;
use Think\Controller;
/**
 * 后台首页控制器
 */
Class IndexController extends CommonController{
	Public function index(){
		// if ($_SESSION['admin']=='1') {  
		// 	$needadmin="block-inline";
		// }else{
		// 	$needadmin="none";
		// }
		$needadmin = needadmin();
		$db=M('notice');
		$count = $db->count();
		$page = new \Lib\Page($count,6);
		$limit = $page->firstRow.','.$page->listRows;
		$require = $db->order('id DESC')->limit($limit)->select();
		// $name=$_SESSION['name'];
		// $this->assign('name',$name);
		$this->assign('require',$require);
		$this->assign('needadmin',$needadmin);
		$this->page = $page->show();
		$this->display();
	}

	//公告发布页面
	Public function notice(){
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);
		$this->display();
	}
	//公告发布表达处理
	Public function addnotice(){
		if(!IS_POST) E('无效的页面');
		$username=$_SESSION['username'];
		$name = $_SESSION['name'];
		$db=M('notice');
		$data=array('username'=>$username,'name'=>$name,'addtime'=>time(),'text'=>I('text','',trim));
		$result=$db->data($data)->add();
		if($result){
			$this->success('新增成功', U('/Home/Index/index'));
		}
	}
	//公告删除页面
	Public function delnotice(){
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);
		$db=M('notice');
		$count = $db->count();
		$page = new \Lib\Page($count);
		$limit = $page->firstRow.','.$page->listRows;
		$result = $db->order('id DESC')->limit($limit)->select();
		$this->assign('result',$result);
		$this->page = $page->show();
		$this->display();

	}
	//公告删除表单
	Public function delnoticeform(){
		if (!IS_POST) E('无效的页面');
		$delid = I('delid');
		$db = M('notice');
		foreach ($delid as $v) {
			$result = $db -> where("id=$v") ->delete();
		}
		if ($result){
			$this->success('删除成功', U('/Home/Index/delnotice'));
		}else{
			$this->error('删除失败');
		}
	}
	
}

 ?>