<?php
namespace Admin\Controller;
use Tool\AbaseController;
//后台管理员
class IndexController extends AbaseController{
	
	public function head(){
		$this->display();
	}
	public function left(){
	//根据管理员id获得管理员信息
	$mg_id=session('mg_id');
	$mg_name=session('mg_name');
	$mg_info=D('admin')->find($mg_id);
	$role_id=$mg_info['mg_role_id'];
	//根据mg_role_id获得角色信息
	$role_info=D('role')->find($role_id);
	$auth_ids=$role_info['role_auth_ids'];
	//根据id获取权限
	if ($role_id==0) {
		$auth_infoA=D('auth')->where("auth_level=0")->select();
		$auth_infoB=D('auth')->where("auth_level=1")->select();
	}else{
		$auth_infoA=D('auth')->where("auth_level=0 and auth_id in ($auth_ids)")->select();
		$auth_infoB=D('auth')->where("auth_level=1 and auth_id in ($auth_ids)")->select();
	}
		$this->assign('auth_infoA',$auth_infoA);
		$this->assign('auth_infoB',$auth_infoB);

		$this->display();
	}
	public function right(){
		$this->display();
	}
	public function index(){
		$this->display();
	}
}