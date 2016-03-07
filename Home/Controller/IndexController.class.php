<?php
namespace Home\Controller;
use Tool\HbaseController;
class IndexController extends HbaseController {
	//主页
    public function index(){
    	$category=new \Model\CategoryModel();
        $goods=new \Model\GoodsModel();

        //商品信息
         //给商品实现分页
        $total=$goods->count();//model里的__call封装
        $per=8;
        $page=new \Tool\Page($total,$per);
        //sql语句获得每页商品信息
        $sql="SELECT a . * , b.cat_name
FROM sw_goods AS a
LEFT JOIN sw_category AS b ON a.goods_category_id = b.cat_id  order by goods_id desc ".$page->limit;
        $goods_info=$goods->query($sql);
        
        //制作页码表
        $pagelist=$page->fpage();
        $this->assign('pagelist',$pagelist);
        
        $goods_info1=$goods->where("is_hot=1")->select();
        //分类信息
        $cate_info=$category->select();
        $this->assign('cate_info',$cate_info);
        $this->assign('goods_info',$goods_info);
        $this->assign('goods_info1',$goods_info1);
        $this->assign('user_id',$_SESSION['user_id']);
		$this->display();
	}
}