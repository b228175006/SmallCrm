<?php 
namespace Home\Controller;
use Think\Controller;
/**
 * 伙伴管理
 */
Class PartnerController extends CommonController{
	//修改密码
	Public function index(){
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);
		$this->display();
	}
	//修改密码表单
	Public function inspassword(){
		if(!IS_POST) E('无效的页面');
		$oldpsw = I('oldpsw');
		$newpsw = I('newpsw');
		$newpsw2 = I('newpsw2');
		$uid = $_SESSION['uid'];
		$db=M('login');
		$where = array('id'=>$uid,'password'=>md5($oldpsw));
		$result = $db->where($where)->order('id DESC')->select();
		if(!$result) E('原密码错误!');
		if($newpsw != $newpsw2) E('新密码输入不一致!');

		$updata['password'] = md5($newpsw);
		$where['id']=$uid;
		$result = $db->where($where)->save($updata);
		
		if($result){
			$this->success('修改成功', U('/Home/Index/index'));
		}else{
			$this->error('修改失败或新老密码相同');
		}
	}
	//删除伙伴页面
	Public function deluser(){
		$needadmin = needadmin();
		$iadmin = iadmin();
		$this->assign('needadmin',$needadmin);
		$this->assign('iadmin',$iadmin);
		$db=M('login');
		$where = "username != 'admin'";
		$count = $db->count();
		$page = new \Lib\Page($count);
		$limit = $page->firstRow.','.$page->listRows;
		$result = $db->where($where)->limit($limit)->order('id DESC')->select();
		$this->assign('result',$result);
		$this->page = $page->show();
		$this->display();
	}
	//管理伙伴表单
	Public function deluserform(){
		if (!IS_POST) E('无效的页面');
		$delid = I('delid');
		$db = M('login');
		if(null != I('del')){
			foreach ($delid as $v) {
			$result = $db -> where("id=$v") ->delete();
			}
			if ($result){
				$this->success('删除成功', U('/Home/Partner/deluser'));
			}else{
				$this->error('删除失败');
			}
		}
		else if(null != I('addjd')){
			$updata['jd'] = 1;
			$where['id']=$delid;
			foreach ($delid as $v) {
				$result = $db -> where("id=$v") ->save($updata);
			}
			if ($result){
				$this->success('管理权限增加成功', U('/Home/Partner/deluser'));
			}else{
				$this->error('管理权限增加失败');
			}
		}
		else if(null != I('deljd')){
			$updata['jd'] = 0;
			$where['id']=$delid;
			foreach ($delid as $v) {
				$result = $db -> where("id=$v") ->save($updata);
			}
			if ($result){
				$this->success('管理权限删除成功', U('/Home/Partner/deluser'));
			}else{
				$this->error('管理权限删除失败');
			}
		}
		
	}
	//添加伙伴页面
	Public function adduser(){
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);
		$this->display();
	}
	//添加伙伴表单
	Public function addusertab(){
		if(!IS_POST) E('无效的页面');
		$db=M('login');
		$where=array('username'=>I('username'));
		$result=$db->where($where)->order('id DESC')->select();
		if($result){
			$this->error('重复的用户名');
		}
		if(I('password','',md5)==I('password2','',md5)){
			$password = I('password','',md5);
		}else{
			$this->error('两次密码输入不一致');
		}
		$data = array('username'=>I('username'),
					  'password'=>$password,
					  'logintime'=>time(),
					  'loginip'=>get_client_ip(),
					  'name'=>I('name'),
					  'jd'=>I('jd')
			);
		$result=$db->data($data)->add();
		if($result){
			$this->success('新增成功', U('/Home/Index/index'));
		}else{
			$this->error('添加失败');
		}
	}
}

 ?>