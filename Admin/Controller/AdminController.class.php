<?php
namespace Admin\Controller;
use Tool\AbaseController;
//后台管理员
class AdminController extends AbaseController{
	//验证码
	public function verifyImg(){
		$cfg=array(
		'imageH'    =>  25,               // 验证码图片高度
        'imageW'    =>  90,               // 验证码图片宽度
        'length'    =>  4,               // 验证码位数
        'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
        'fontSize'  =>  12,              // 验证码字体大小(px)
			);
		$verify=new \Think\Verify($cfg);
		echo $verify->entry();
	}
	//登陆系统
	public function login(){
		$admin=new \Model\AdminModel();
		if (!empty($_POST)) {
			//检验验证码
			$verify=new \Think\Verify();
			if ($verify->check($_POST['captcha'])) {
				//检验用户名和密码
				//通过返回值判断是否成功
				//成功:返回用户信息  失败:flase
				$info=$admin->checkNamePwd($_POST['admin_user'],$_POST['admin_psd']);
				if ($info) {
					//如果检验通过保存session
					session('mg_id',$info['mg_id']);
					session('mg_name',$info['mg_name']);
					session('mg_time',$info['mg_time']);
					$this->redirect('Index/index');
				}else
				$this->redirect('Admin/login',array(),2,'用户名或密码错误');
			}else
			$this->redirect('Admin/login',array(),2,'验证码错误');
		}
		$this->display();
	}
	//退出系统
	public function logout(){
		//销毁session并跳转
		session(null);
		$this->redirect('login');
	}
	//管理员列表展示
	public function showlist(){
		//创建对象
		$admin=new \Model\AdminModel();
		$sql="SELECT a.*,b.role_name FROM `sw_admin` as a left join `sw_role` as b  on a.mg_role_id=b.role_id";
		$infos=$admin->query($sql);

		$this->assign('infos',$infos);
		$this->display();
	}
}