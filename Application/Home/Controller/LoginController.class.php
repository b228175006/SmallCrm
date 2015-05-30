<?php 
namespace Home\Controller;
use Think\Controller;
/**
 * 后台登录控制器
 */
Class LoginController extends Controller{
	//登录页面视图
	Public function index(){
		$rand = rand(1,4);
		$bg = 'bg'.$rand.'.jpg';
		switch ($rand) {
			case '1':
				$color = '#240d21';
				# code...
				break;
			case '2':
				$color = '#e7eaef';
				# code...
				break;
			case '3':
				$color = '#011240';
				# code...
				break;
			case '4':
				$color = '#1c1912';
				# code...
				break;	
			default:
				$color = '#FFF';
				break;
		}
		$this->assign('color',$color);
		$this->assign('bg',$bg);
		$this->display();

	}

	//验证码
	Public function verify(){
		$config =    array(
		    'fontSize'    =>    19,    // 验证码字体大小
		    'length'      =>    4,     // 验证码位数
		    // 'useNoise'    =>    false, // 关闭验证码杂点
		);
		
		// 开启验证码背景图片功能 随机使用 ThinkPHP/Library/Think/Verify/bgs 目录下面的图片
		$Verify->useImgBg = true;
		$Verify = new \Think\Verify($config);
		// ob_end_clean();
		$Verify->entry();
		// import('ORG.Util.Image');
		// Image::buildImageVerify();
	}

	//登录验证
	Public function login(){
		if (!IS_POST) E('无效的页面');
		$Verify = new \Think\Verify();
		//if(!$Verify->check($code)) $this->error('验证码错误');

		 $db=M('login');
		 $user=$db->where(array('username'=>I('username')))->find();
		 if (!$user || $user['password'] != I('password','',md5)) {
		 	$this->error('账号或密码错误');
		 }
		 //更新最后一次登录时间及IP
		 $data=array(
		 	'id'=>$user['id'],
		 	'logintime' => time(),
		 	'loginip'=> get_client_ip()
		 	);
		$db->save($data);

		session('uid',$user['id']);
		session('username',$user['username']);
		session('name',$user['name']);
		session('logintime',date('Y-m-d H:i:s',$user['logintime']));
		session('loginip',$user['loginip']);
		if ($user['jd'] == '1') {
			session('admin','1');
		}else{
			session('admin','0');
		}
		if(I('username') == 'admin'){
			session('iadmin',1);
		}else{
			session('iadmin',0);
		}
		$this->redirect('/Home/Index/index');
	}

	//登出
	Public function loginout(){
		session(null);
		$this->success('您已安全退出', U('/Home/Login/index'));
			$code = I('verify');
		}
		

}
?>
