<?php
namespace Home\Controller;
use Tool\HbaseController;
class ListController extends HbaseController {
	//列表页
    public function index(){
        $goods=D('Goods');
        $category=new \Model\CategoryModel();
         $cat_id=$_GET['category_id'];
        $catslist=$category->getTopIds($cat_id);
     
        $cate_info=$category->select();
        $goods_info1=$goods->where("is_hot=1")->select();
        //给商品实现分页
       
        $per=8;
        //sql语句获得每页商品信息
      
        
        if ($cat_id=="") {
            $total=$goods->count();
             $page=new \Tool\Page($total,$per);
            $sql="SELECT a . * , b.cat_name
FROM sw_goods AS a
LEFT JOIN sw_category AS b ON a.goods_category_id = b.cat_id  order by goods_id desc ".$page->limit;
        }else{
            $total=$goods->where("goods_category_id='$cat_id'")->count();
             $page=new \Tool\Page($total,$per);
            $sql="SELECT a . * , b.cat_name
FROM sw_goods AS a
LEFT JOIN sw_category AS b ON a.goods_category_id = b.cat_id where a.goods_category_id='$cat_id' order by goods_id desc ".$page->limit;
        }
        
    
        $info=$goods->query($sql);
       
        //制作页码表
        $pagelist=$page->fpage();
        $this->assign('cat_id',$cat_id);
        $this->assign('pagelist',$pagelist);
        
        //把商品信息传递给模板
         $this->assign('goods_info1',$goods_info1);
         $this->assign('cate_info',$cate_info);
         $this->assign('catslist',$catslist);
        $this->assign('info',$info);
        $this->display();

	}
}
?>