<?php
namespace Home\Controller;
use Tool\HbaseController;
class CommentController extends HbaseController {
	//主页
    public function insert(){
		$comment=D('comment');
		if(empty($_SESSION['user_id'])){
			$this->redirect("user/login");
			exit;
		}
		

		if (!empty($_POST['content'])) {
			$_POST['user_id'] = $_SESSION['user_id'];
			$_POST['insert_time'] = date('Y-m-d H:i:s',time());
			$comment_id=$comment->add($_POST);
			if ($comment_id) {
				$this->redirect("Goods/index/goods_id/".$_POST['goods_id']);
			}else{
				$this->redirect("Goods/index/goods_id/".$_POST['goods_id'],array(),2,'评论失败，请稍后再试');	
			}
		}else{
			$this->redirect("Goods/index/goods_id/".$_POST['goods_id'],array(),2,'请输入评论内容');
		}	
	}

}