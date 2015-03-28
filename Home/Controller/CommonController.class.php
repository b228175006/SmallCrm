<?php 
namespace Home\Controller;
use Think\Controller;
Class CommonController extends Controller{
	Public function _initialize(){
		if (!isset($_SESSION['uid'])) {
			$this->redirect('/Home/Login/index');
		}
	}
}
 ?>
