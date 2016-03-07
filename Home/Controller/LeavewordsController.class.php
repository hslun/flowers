<?php
namespace Home\Controller;
use Tool\HbaseController;
class LeavewordsController extends HbaseController {
	
    public function show(){
		$this->display();
	}
	public function addLeavewords(){
		if(empty($_SESSION['user_id'])){
			$this->redirect("user/login",array(),2,'请先登录');
			exit;
		}
		//var_dump($_POST);
		$words = D('Leavewords');
		$arr = array();
		$arr['user_id'] = $_SESSION['user_id'];
		$arr['user_name']=$_POST['user_name'];
		$arr['type'] = $_POST['type'];
		$arr['centent'] = $_POST['centent'];
		$arr['phone'] = $_POST['phone'];
		$arr['time'] = date('Y-m-d H:i:s',time());
		//var_dump($arr);
		$num = $words->add($arr);
		if ($num) {
		$this->redirect("/Index/index",array(),3,'留言成功');
	}else{
		$this->error('留言失败');
	}

		
// $comment_id=$comment->add($_POST);
		// $_POST['user_id'] = $_SESSION['user_id'];
		// 	$_POST['insert_time'] = date('Y-m-d H:i:s',time());
		// 	$comment_id=$comment->add($_POST);
	}

}
		