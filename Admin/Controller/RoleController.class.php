<?php
namespace Admin\Controller;
use Tool\AbaseController;
class RoleController extends AbaseController{
	//列表展示
	public function showlist(){
		//获得全部角色信息
		$info=D('role')->select();


		$this->assign('info',$info);
		$this->display();
	}
	//分配权限
	public function distribute($role_id){
		//实例化对象
		$role=new \Model\RoleModel();
		if (!empty($_POST)) {
			//调用子model方法实现数据制作并存入数据库
			$z=$role->saveAuth($_POST['auth_id'],$_POST['role_id']);
			if ($z) {
				$this->redirect('showlist',array(),2,'分配权限成功');
			}
		}

		//获得对应权限
		$auth=D('auth');
		$auth_infoA=$auth->where('auth_level=0')->select();//顶级权限
		$auth_infoB=$auth->where('auth_level=1')->select();//次顶级权限
		//根据$role_id 查询分配权限的角色信息
		$role_info=D('role')->find($role_id);
		//勾选已有权限
		$auth_arr=explode(",", $role_info['role_auth_ids']);
		$this->assign('auth_arr',$auth_arr);
		$this->assign('auth_infoA',$auth_infoA);
		$this->assign('auth_infoB',$auth_infoB);
		$this->assign('role_info',$role_info);

		$this->display();

	}
		//更新角色
	public function update($role_id){
		$role=new \Model\RoleModel();
		if (!empty($_POST)) {
			//搜集所有字段

			if ($role->save($_POST)) {
				$this->redirect('showlist',array(),2,"修改角色成功");
			}
		}
		
		$info=$role->find($role_id);
		$this->assign('info',$info);
		$this->display();
	}
}

?>