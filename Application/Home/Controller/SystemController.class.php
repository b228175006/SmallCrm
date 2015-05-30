<?php 
namespace Home\Controller;
use Think\Controller;
/**
 * 客户管理
 */
Class SystemController extends CommonController{
	Public function index(){
		$pid = 1;
		$db = M('system');
		$where = array(
			'pid' => $pid	
			);
		$system = $db -> where($where)->select();
		$this->assign('system',$system);

		$this->display();

	}
	/**
	 * 系统设置修改表单处理
	 */
	Public function inssystem(){
		$db = M('system');
		$data = array(
			'value1' => I('value1'),
			'value2' => I('value2'),
			'value3' => I('value3'),
			'value4' => I('value4'),
			'value5' => I('value5'),
			'value6' => I('value6')
			);
		$where = array('id' => I('id'));
		$result = $db->where($where)->data($data)->save();
		if($result){
			$this->success('修改成功',U('/Home/System/index'));
		}else{
			$this->error('修改失败');
		}
	}
}
?>