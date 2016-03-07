<?php
namespace Tool;
use Think\Controller;

//后台控制器父类
class HbaseController extends Controller{
	function __construct(){
		parent::__construct();
		$goods=D('Goods');
        $category=new \Model\CategoryModel();
        
        $goods_info1=$goods->where("is_hot=1")->select();
        $this->assign('goods_info1',$goods_info1);
         $this->assign('cate_info',$cate_info);
		$cats=$category->frontCats();
		 $this->assign('cats',$cats);
}
}
?>