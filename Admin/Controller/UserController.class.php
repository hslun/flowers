<?php
namespace Admin\Controller;
use Tool\AbaseController;
//前台会员
class UserController extends AbaseController{

	public function showlist(){
		//
		$user=new \Model\UserModel();
		$info=$user->select();

		$this->assign('info',$info);
		$this->display();
	}
	public function add(){
		//
		if ($_POST) {
			$user_name=I('post.user_name');
			$password=I('post.password');
			$user_email=I('post.user_email');
			$user_sex=I('post.user_sex');
			$user_qq=I('post.user_qq');
			$user_tel=I('post.user_tel');
			$user_time=$last_time=time();
			$user=D('user');
			$user_id=$user->add(array(
				'username'=>$user_name,
				'password'=>$password,
				'user_email'=>$user_email,
				'user_sex'=>$user_sex,
				'user_qq'=>$user_qq,
				'user_tel'=>$user_tel,
				'user_time'=>$user_time,
				'last_time'=>$last_time,
				));
			if ($user_id) {
				$this->redirect('showlist',array(),2,'添加成功');
			}
		}
		$this->display();
	}
	//修改
	public function update(){
		//
		$user_id=I('get.user_id');
		if ($_POST) {
			$user_name=I('post.user_name');
			$password=I('post.password');
			$user_email=I('post.user_email');
			$user_sex=I('post.user_sex');
			$user_qq=I('post.user_qq');
			$user_tel=I('post.user_tel');
			$user_time=I('post.user_time');
			$last_time=time();
			$user=D('user');
			//$z=$user->delete($user_id);
			$newuser_id=$user->save(array(
				'user_id'=>$user_id,
				'username'=>$user_name,
				'password'=>$password,
				'user_email'=>$user_email,
				'user_sex'=>$user_sex,
				'user_qq'=>$user_qq,
				'user_tel'=>$user_tel,
				'user_time'=>$user_time,
				'last_time'=>$last_time,
				),array('user_id'=>$user_id));
			
			if ($newuser_id) {
				$this->redirect('showlist',array(),2,'修改成功');
			}
		}
		$user=D('user');
		$user_info=$user->select($user_id);
		$user=$user_info[0];
	
		$this->assign('user',$user);
		$this->display();
	}
	public function comment(){
		$comments=D('comment');
		$user=new \Model\UserModel();
		$sql="SELECT u.username,c.* FROM sw_comment AS c LEFT JOIN sw_user AS u ON u.user_id=c.user_id";
		$comment_info = $comments->query($sql);
		$this->assign('comment_info',$comment_info);
		$this->display();
	}
	public function deluser($user_id){
		$user=D('user');
		$res=$user->delete($user_id);
		if ($res) {
			$this->redirect('showlist',array(),2,'删除成功');
		}
	}
	public function delly($comment_id){
		$comment=D('comment');
		$res=$comment->delete($comment_id);
		if ($res) {
			$this->redirect('comment',array(),2,'删除成功');
		}
	}
}
?>