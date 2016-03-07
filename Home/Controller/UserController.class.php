<?php
namespace Home\Controller;
use Tool\HbaseController;

//前台用户控制器
class UserController extends HbaseController{
	//验证码
	public function verifyImg(){
		$cfg=array(
		'imageH'    =>  40,               // 验证码图片高度
        'imageW'    =>  150,               // 验证码图片宽度
        'length'    =>  4,               // 验证码位数
        'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
        'fontSize'  =>  19,              // 验证码字体大小(px)
			);
		$verify=new \Think\Verify($cfg);
		echo $verify->entry();
	}
	//登录系统
	public function login(){
		$user=new \Model\UserModel();
		if (!empty($_POST)) {
			//检验验证码
			$verify=new \Think\Verify();
			if ($verify->check($_POST['captcha'])) {
				//检验用户名和密码
				//通过返回值判断是否成功
				//成功:返回用户信息  失败:flase
				$info=$user->checkNamePwd($_POST['username'],$_POST['password']);
				if ($info) {
					//如果检验通过保存session
					session('user_id',$info['user_id']);
					session('username',$info['username']);

					//移动购物车数据
					$cart=new \Model\CartModel();
					$cart->moveData();

					$this->redirect('buy/cartlist');
				}else
				$this->redirect('User/login',array(),2,'用户名或密码错误');
			}else
			$this->redirect('User/login',array(),2,'验证码错误');
		}
		$this->display();
	}
	//注册系统
	public function register(){
		//展示表单,收集数据
		$user=new \Model\UserModel();
		if (!empty($_POST)) {
			 
			$arr=$user->create();
			if ($arr) {
				
				$z=$user->add($arr);
				if ($z) {
				$this->redirect('User/login');
				}
			}
				$this->assign('errorinfo',$user->getError());//获取验证错误信息
		}
		$this->display();
	}
	//退出系统
	public function logout(){
		//销毁session并跳转
		session(null);
		$this->redirect('index/index');
	}
	//验证用户名
	function checkNm($name){
		//通过Model 查询$name是否存在
		$user=new \Model\UserModel();
		$z=$user->where("username='$name'")->find();
		if ($z==null) {
			echo "<span style='color:yellow;font-size:14px'>用户名合法</span>";
		}else{
			echo "<span style='color:red;font-size:14px'>已被注册</span>";
		}
		exit;
	}
}