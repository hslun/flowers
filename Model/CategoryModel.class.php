<?php
 namespace Model;
 use Think\Model;
 class CategoryModel extends Model{
 	//重新排序的方法
 	public function tree($arr,$pid=0,$level=0){
		static $res=array();
		foreach ($arr as $v) {
			if ($v['parent_id']==$pid) {
				//先保存结果和level的值
				$v['level']=$level;
				$res[]=$v;
				//递归查找,$pid变成新分类的cat_id
				$this->tree($arr,$v['cat_id'],$level+1);
			}
		}
		return $res;
	}
	//给定分类cat_id, 找其后代的cat_id
	public function getSubIds($cat_id){
		$res=array();
		
		$cats=D('category');
		$cats_info=$cats->select();
		//获取当前分类下所有后代的分类
		$cat=$this->tree($cats_info,$cat_id);
		foreach ($cat as $v) {
			$res[]=$v['cat_id'];
		}
		//将当前的分类ID 也加到这个数组中
		$res[]="$cat_id";
		return $res;
	}
	//递归  构造多维函数
	public function childList($arr,$pid=0){
		$list=array();
		foreach ($arr as $v) {
			if ($v['parent_id']==$pid) {
				//说明找到了子分类,继续查找
				$v['child']=$this->childList($arr,$v['cat_id']);
				$list[]=$v;
			}
		}
		return $list;
	}
	//定义方法,完成前台数据获取
	public function frontCats(){
		$cats=D('category');
		$cats=$cats->select();
		return $this->childList($cats);
	}
	//给定分类cat_id, 找其父代的cat_id
	public function getTopIds($cat_id){
		static $res=array();
		$cats=D('category');
		$cats=$cats->select($cat_id);
		
		if($cats[0]['cat_id']!=0){
			$res[]=array('cat_id'=>$cats[0]['cat_id'],'cat_name'=>$cats[0]['cat_name']);
			$this->getTopIds($cats[0]['parent_id']);

		}
		
		//获取当前分类下所有父代的id
		return array_reverse($res);
		}
 }
?>