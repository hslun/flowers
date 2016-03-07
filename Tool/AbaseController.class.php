<?php
namespace Tool;
use Think\Controller;

//后台控制器父类
class AbaseController extends Controller{
	function __construct(){
		parent::__construct();
		//获取当前用户的控制器和操作方法
		$nowac=CONTROLLER_NAME."-".ACTION_NAME;
		//判断用户的session是否失效,跳转到登陆页面去
		//设置用户允许访问的操作
		$allac="Admin-logout,Admin-login,Admin-verifyImg";
		$mg_id=session('mg_id');
		if (!$mg_id && strpos($allac, $nowac)===false) {
			//$url=U('[分组/控制器/]操作方法') //生成一个请求地址
			$url=U('Admin/login');
			//框架需要用js跳转
			$js=<<<eof
			<script type="text/javascript">
			window.top.location.href="$url";
			</script>
eof;
		echo $js;			
		}

		//根据用户id查询其权限信息
		
		$admin_info=D('admin')->find($mg_id);

		$role_id=$admin_info['mg_role_id'];
		$role_info=D('role')->find($role_id);//角色xinxi
		$auth_info=$role_info['role_auth_ac'];//角色对应权限
		//默认允许访问的权限
		$allowac="Admin-logout,Admin-login,Admin-verifyImg,Index-left,Index-right,Index-head,Index-index";
		//权限访问控制
		//用户是否拥有该权限
		//用户访问的是否是允许的权限
		//用户是否是超级管理员
		$mg_name=session('mg_name');
		if (strpos($auth_info, $nowac)===false && strpos($allowac, $nowac)===false && $mg_name!=='admin') {
			exit('没有权限访问');
		}
	}
}

?>