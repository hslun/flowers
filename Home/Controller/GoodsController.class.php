<?php
namespace Home\Controller;
use Tool\HbaseController;
class GoodsController extends HbaseController {
	//主页
    public function index($goods_id){

        $category=new \Model\CategoryModel();
        $goods=new \Model\GoodsModel();
        $goods_id=$_GET['goods_id'];
        //商品信息
        $goods_info=$goods->find($goods_id);
       
        $this->assign('goods_info',$goods_info);
       
		 //商品评论
        $comment=D('comment');
        $sql="SELECT c . * , u.username FROM sw_comment AS c LEFT JOIN sw_user AS u ON c.user_id = u.user_id where c.goods_id=".$goods_id." order by c.comment_id desc";
        $comment_info = $comment->query($sql);
        $this->assign('comment_info',$comment_info);

        $this->display();
	}
    public function search(){
         //
        if (!empty($_GET)) {
             $goods=new \Model\GoodsModel();
            $keyword=$_GET['keyword'];
         if (!$keyword=="") {
            $sql1="SELECT * FROM sw_goods WHERE goods_name like '%{$keyword}%'  order by goods_id desc ".$page->limit; 
        }
        $keygoods=$goods->query($sql1);
        $this->assign('keygoods',$keygoods);
        $this->assign('keyword',$keyword);
       
        }
         
         $this->display();
    }
}