<?php 
namespace Home\Controller;
use Think\Controller;
/**
 * 客户管理
 */
Class CustomerController extends CommonController{
	//添加客户
	Public function addcustomer(){
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);

		$pid = 1;
		$db = M('system');
		$where = array(
			'pid' => $pid	
			);
		$system = $db -> where($where)->select();
		$this->assign('system',$system);

		$this->display();
	}
	//添加客户表单
	Public function addcustomerform(){
		if(!IS_POST) E('无效的页面');

		$data = array(
			'gname'=> I('gname'),
			'name'=> I('name') ,
			'tel'=> I('tel'),
			'ca'=> I('ca'),
			'location'=> I('location'),
			'address'=> I('address'),
			'uid'=>$_SESSION['uid'],
			'date'=>time()
			);
		$db = M('customer');
		// $select = array('gname'=>I('gname'));
		// $result = $db->where($select)->order('id DESC')->select();
		// if($result){
		// 	$this->error('公司名称重复');
		// }
		// $result = $db->data($data)->add();
		// if($result){
		// 	$this->success('添加成功',U('/Home/Customer/seecustomer'));
		// }else{
		// 	$this->error('添加失败');
		// }
		$customer = D('Customer');
		if(!$customer->create()){
			$err = $customer->getError();
			$this->error("$err");

		}
		$result = $db->data($data)->add();
		if($result){
			$this->success('添加成功',U('/Home/Customer/seecustomer'));
		}else{
			$this->error('添加失败');
		}
	}
		

	//删除客户
	Public function delcustomer(){
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);

		$pid = 1;
		$db = M('system');
		$where = array(
			'pid' => $pid	
			);
		$system = $db -> where($where)->select();
		$this->assign('system',$system);

		$db = M('customer');
		$count = $db->count();
		$page = new \Lib\Page($count);
		$limit = $page->firstRow.','.$page->listRows;
		$result = $db->order('id DESC')->limit($limit)->select();
		$this->assign('result',$result);
		$this->page = $page->show();
		$this->display();
	}
	//删除客户表单
	Public function delcustomerform(){
		if (!IS_POST) E('无效的页面');
		$delid = I('delid');
		$db = M('customer');
		$dbc = M('remarks');
		foreach ($delid as $v) {
			$result = $db -> where("id=$v")->order('id DESC') ->delete();
			$result2 = $dbc -> where("uid=$v")->order('id DESC') ->delete();
		}
		if ($result){
			$this->success('删除成功', U('/Home/Customer/delcustomer'));
		}
		else{
			$this->error('删除失败');
		}
		

	}
	//修改客户信息
	Public function inscustomer(){
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);
		$userid = session(uid);
		$this->assign('userid',$userid);

		$pid = 1;
		$db = M('system');
		$where = array(
			'pid' => $pid	
			);
		$system = $db -> where($where)->select();
		$this->assign('system',$system);

		$id = I('id');
		$where = array(
			'id'=>$id	
			);
		$db = M('customer');
		$result = $db->where($where)->order('id DESC')->select();
		$this->assign('result',$result);
		$dbc = M('login');
		$uid = $dbc->order('id')->select();
		$this->assign('uid',$uid);
		$this->display();
	}
	//修改客户信息表单
	Public function inscustomerform(){
		if(!IS_POST) E('无效的页面');
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);
		$data = array(
			'gname'=> I('gname'),
			'name'=> I('name') ,
			'tel'=> I('tel'),
			'ca'=> I('ca'),
			'location'=> I('location'),
			'address'=> I('address'),
			'uid'=>I('uid')
			);
		$where=array(
			'id'=>I('id'));
		$db = M('customer');
		$customer = D('Customer');
		if (!$customer->create()){
		   $err = $customer->getError();
			$this->error("$err");
		}else{
			$result = $db->where($where)->data($data)->save();
	    	if($result){
			$this->success('修改成功',U('/Home/Customer/seecustomer'));
			}else{
			$this->error('修改失败');
			}
		}
	// $select = array('gname'=>I('gname'));
		// $result = $db->where($select)->order('id DESC')->select();
		// if($result){
		// 	$this->error('公司名称重复');
		// }
		// 
		// if($result){
		// 	$this->success('修改成功',U('/Home/Customer/seecustomer'));
		// }else{
		// 	$this->error('修改失败');
		// }


		// $rules = array(
		// 	array('gname','','公司名称重复！',0,'unique'),
		// 	array('tel','','联系电话重复！',0,'unique'),
		// );
		// if (!$db->validate($rules)->create()){
		//     // 如果创建失败 表示验证没有通过 输出错误提示信息
	 //     	exit($db->getError());
	 //    }else{     
	 //     // 验证通过 可以进行其他数据操作
	 //    	$result = $db->where($where)->data($data)->save();
	 //    	if($result){
		// 	$this->success('修改成功',U('/Home/Customer/seecustomer'));
		// 	}else{
		// 	$this->error('修改失败');
		// 	}
	 //    }

		 
	}
	//查看客户信息
	Public function seecustomer(){
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);

		$pid = 1;
		$db = M('system');
		$where = array(
			'pid' => $pid	
			);
		$system = $db -> where($where)->select();
		$this->assign('system',$system);

		$db = M('customer');
		if(session('admin')== 0){
			$uid['uid'] = session('uid');
		}else{
			$uid['uid'] = array('neq',0);
		}
		$count = $db->count();
		$page = new \Lib\Page($count);
		$limit = $page->firstRow.','.$page->listRows;
		$result = $db->where($uid)->limit($limit)->order('id DESC')->select();
		$this->assign('result',$result);
		$dbc = M('login');
		$username = $dbc->field('id,name,username')->select();
		$this->assign('username',$username);
		$this->page=$page->show();
		$this->display();
	}
	//查看客户备注
	Public function seeremarks(){
		$pid = 1;
		$db = M('system');
		$where = array(
			'pid' => $pid	
			);
		$system = $db -> where($where)->select();
		$this->assign('system',$system);

		$id =array('id' => I('id'));
		$uid = array('uid' => I('id'));
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);
		$db = M('customer');
		$result = $db->where($id)->order('id DESC')->select();
		$this->assign('result',$result);
		$dbc = M('remarks');
		// $count = $dbc->count();
		$count = $dbc->where($uid)->count();
		$page = new \Lib\Page($count,10);
		$limit = $page->firstRow.','.$page->listRows;
		$remarks = $dbc->where($uid)->limit($limit)->order('id DESC')->select();
		$this->assign('remarks',$remarks);
		$this->page=$page->show();
		$this->display(); 

	}
	//修改客户备注 
	Public function insremarks(){
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);

		$uid = I('uid');
		$id = I('id');
		$where = array(
			'id'=>$id,
			'uid' => $uid	
			);
		$db = M('remarks');
		$result = $db->where($where)->order('id DESC')->select();
		$this->assign('result',$result);
		$this->display();

	}
	//修改客户备注表单
	Public function insremarksform(){
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);
		$data = array(
			'value'=> I('value'),
			'remarks'=> I('remarks') ,
			);
		$where=array(
			'id'=>I('id'));
		$db = M('remarks');
		$select = array('remarks'=>I('remarks'),'value'=>I('value'));
		$result = $db->where($select)->order('id DESC')->select();
		if($result){
			$this->error('修改信息相同，修改失败');
		}
		$result = $db->where($where)->data($data)->save();
		if($result){
			$this->success('修改成功',U('/Home/Customer/seeremarks',array('id' =>I('uid'))));
		}else{
			$this->error('修改失败');
		}
	}
	//添加客户备注
	Public function addremarks(){
		$uid = I('id');
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);
		$this->assign('uid',$uid);
		$this->display();
	}
	//添加客户备注表单
	Public function addremarksform(){
		if(!IS_POST) E('无效的页面');
		$data = array(
			'uid' => I('uid'),
			'value' => I('value'),
			'remarks' => I('remarks'),
			'time' => time()
			);
		$db = M('remarks');
		$result = $db->data($data)->add();
		if($result){
			$this->success('添加成功',U('/Home/Customer/seeremarks',array('id' =>I('uid'))));
		}else{
			$this->error('添加失败');
		}

	}
	//删除备注
	Public function delremarks(){
		if(!IS_GET) E('无效的页面');
		$id = I('id');
		$uid = I('uid');
		$db = M('remarks');
		$result = $db -> where("id=$id") ->delete();
		if ($result){
			$this->success('删除成功', U('/Home/Customer/seeremarks',array('id' => $uid)));
		}else{
			$this->error('删除失败');
		}
	}
	


	//公海
	//客户进入公海
	Public function addseas(){
		if(!IS_GET) E('无效的页面');
		// $uid = 0;
		// $data = array(
		// 	'uid'=>$uid
		// 	);
		$data['uid'] = '0';
		$where=array(
			'id'=>I('id'));
		$db = M('customer');
		// $customer = D('Customer');
		// if (!$customer->create()){
		//    $err = $customer->getError();
		// 	$this->error("$err");
		// }else{
			$result = $db->where($where)->data($data)->save();
	    	if($result){
			$this->success('修改成功',U('/Home/Customer/seecustomer'));
			}else{
			$this->error('修改失败');
			}
		// }	
	}
	//查看公海
	Public function seeseas(){
		$needadmin = needadmin();
		$this->assign('needadmin',$needadmin);

		$pid = 1;
		$db = M('system');
		$where = array(
			'pid' => $pid	
			);
		$system = $db -> where($where)->select();
		$this->assign('system',$system);

		$db = M('customer');
	 	$uid['uid'] = 0;
		$count = $db->count();
		$page = new \Lib\Page($count);
		$limit = $page->firstRow.','.$page->listRows;
		$result = $db->where($uid)->limit($limit)->order('id DESC')->select();
		$this->assign('result',$result);
		$dbc = M('login');
		$username = $dbc->field('id,name,username')->select();
		$this->assign('username',$username);
		$this->page=$page->show();
		$this->display();
	
	}
	//从公海调入到自己的库中
	Public function pickupseas(){
		if(!IS_GET) E('无效的页面');
		// $uid = 0;
		// $data = array(
		// 	'uid'=>$uid
		// 	);
		$data['uid'] = session('uid');
		$where=array(
			'id'=>I('id'));
		$db = M('customer');
		// $customer = D('Customer');
		// if (!$customer->create()){
		//    $err = $customer->getError();
		// 	$this->error("$err");
		// }else{
			$result = $db->where($where)->data($data)->save();
	    	if($result){
			$this->success('修改成功',U('/Home/Customer/seeseas'));
			}else{
			$this->error('修改失败');
			}
		// }
	}

}

 ?>