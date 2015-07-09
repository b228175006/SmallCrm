<?php 
namespace Home\Controller;
use Think\Controller;
/**
 * 搜索与统计控制器
 */
Class SearchController extends CommonController{
	//搜索客户表单处理
		Public function searched(){
		if (!IS_POST) E('无效的页面');
		$arr = I('searched','',trim);
		if(session('admin') == 0){
			$uid = session('uid');
		}else{
			$uid = array('egt',0);
		}
		$where = array(
			'gname'=>array('LIKE','%'.$arr.'%'),
			'name'=>array('LIKE','%'.$arr.'%'),
			'tel'=>array('LIKE','%'.$arr.'%'),
			'ca'=>array('LIKE','%'.$arr.'%'),
			'location'=>array('LIKE','%'.$arr.'%'),
			'address'=>array('LIKE','%'.$arr.'%'),
			'_logic'=>'or'
			);
		$userid = array(
			'uid' => $uid);
		$db=M('customer');
		$count = $db->count();
		$page = new \Lib\Page($count);
		$limit = $page->firstRow.','.$page->listRows;
		$searched = $db->where(array($where,$userid))->limit($limit)->order('id DESC')->/*fetchSql(true)->*/select();
		$dbc = M('login');
		$username = $dbc->field('id,name,username')->select();
		$result = $db->field('uid')->select();
		$this->assign('result',$result);
		$maxuid = $db->max('uid');
		$maxid = $maxuid + 1;
		$this->assign('maxid',$maxid);
		$dba = M('system');
		$pid = 1;
		$where = array(
			'pid' => $pid	
			);
		$system = $dba -> where($where)->select();
		$this->assign('system',$system);
		$this->assign('username',$username);
		$this->assign('searched',$searched);
		$this->assign('needadmin',needadmin());
		$this->display();
	}
	//统计页面
	Public function counts(){
		$db = M('customer');
		$maxdb = $db->max('uid');
		for ($i=0; $i <= $maxdb ; $i++) { 
			$where = array('uid' =>$i);
			$vcount = $db->where($where)->count('uid');
			if($vcount != 0){
				$count["$i"] = $vcount ;
			}
		}

		$sum = array_sum($count);
		$width = 100/$sum;
		$dbc = M('login');
		$username = $dbc->field('id,name,username')->select();
		$this->assign('needadmin',needadmin());
		$this->assign('username',$username);
		$this->assign('count',$count);
		$this->assign('sum',$sum);
		$this->assign('width',$width);
		$this->display();
	}
	//筛选
	public function screening(){
		if (!IS_POST) E('无效的页面');
		$username = I('username');
		
		// //判断是否具有管理员权限，有管理员权限可以查看所有客户
		// if(session('admin') == 0){
		// 	$uid = session('uid');
		// }else{
		// 	$uid = array('egt',0);
		// }

		$db = M('customer');
		$maxdate = $db->max('date');
		$mindate = $db->min('date');
		//输入时间转为unix时间戳
		$d1 = (string)I('date1');
		$d2 = (string)I('date2');
		$date1 = strtotime($d1) == '' ? $mindate:strtotime($d1);
		$date2 = strtotime($d2) == '' ? $maxdate:strtotime($d2);
		$count = $db->count();
		$page = new \Lib\Page($count);
		$limit = $page->firstRow.','.$page->listRows;
		$userid = array(
			'uid' => $uid);
		$date['date'] = array('BETWEEN',"$date1,$date2");
		if($username!=0){
			$date['uid'] = $username;
		}else{
			$date['uid'] = array('egt',0);
		}
		switch (I('success')) {
			case 'all':
				$date['success'] = array('egt',0);
				break;
			case '1':
				$date['success'] = '1';
				break;
			case '0':
				$date['success'] = '0';
				break;	
			default:
				$date['success'] = array('egt',0);
				break;
		}
		$date['_logic'] = 'and';
		$searched = $db->where(array($date))->limit($limit)->order('id DESC')->/*fetchSql(true)->*/select();
		$dbc = M('login');
		$username = $dbc->field('id,name,username')->select();
		$maxuid = $db->max('uid');
		$maxid = $maxuid + 1;
		$this->assign('maxid',$maxid);
		$dba = M('system');
		$pid = 1;
		$where = array(
			'pid' => $pid	
			);
		$system = $dba -> where($where)->select();
		$this->assign('system',$system);
		$this->assign('username',$username);
		$this->assign('searched',$searched);
		$this->assign('needadmin',needadmin());
		$this->display();
	}
}
?>
	