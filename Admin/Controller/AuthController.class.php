<?php
namespace Admin\Controller;
use Tool\AbaseController;
class AuthController extends AbaseController{
	//列表展示
	public function showlist(){
		//获取权限信息并传给模板
		$info=D('auth')->order('auth_path')->select();

		$this->assign('info',$info);
		$this->display();
	}
	public function add(){
		$auth=new \Model\AuthModel();
		//展示收集
		if (!empty($_POST)) {
			//搜集所有字段
			if ($auth->saveData($_POST)) {
				$this->redirect('showlist',array(),2,"添加权限成功");
			}
		}
		//获取供选择的上级权限
		$auth_infoA=$auth->where('auth_level=0')->select();
		$this->assign('auth_infoA',$auth_infoA);
		$this->display();
	}
	public function del($auth_id){
		$auth=new \Model\AuthModel();

		$res=$auth->delete($auth_id);

		if ($res) {
			$this->redirect('showlist',array(),2,'删除成功');
		}
	}
	//更新权限
	public function update($auth_id){
		$auth=new \Model\AuthModel();
		$auth_infoA=$auth->where('auth_level=0')->select();
		if (!empty($_POST)) {
			//搜集所有字段
			if ($auth->upData($_POST)) {
				$this->redirect('showlist',array(),2,"修改权限成功");
			}
		}
		
		$info=$auth->find($auth_id);
		$this->assign('auth_infoA',$auth_infoA);
		$this->assign('info',$info);
		$this->display();
	}
}
?>