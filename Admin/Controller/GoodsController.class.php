<?php
namespace Admin\Controller;
use Tool\AbaseController;
//后台商品控制器
class GoodsController extends AbaseController{
	//商品列表
	public function showlist(){
		$goods=D('Goods');
		$category=new \Model\CategoryModel();
		$cats=$category->select();
		$this->assign('cats',$cats);
		//给商品实现分页
		$total=$goods->count();//model里的__call封装
		$per=6;
		$page=new \Tool\Page($total,$per);
		//sql语句获得每页商品信息
		$cat_id=$_POST['category_id'];
		if ($cat_id=="") {
			$sql="SELECT a . * , b.cat_name
FROM sw_goods AS a
LEFT JOIN sw_category AS b ON a.goods_category_id = b.cat_id order by goods_id desc ".$page->limit;
		}else{
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

		$this->assign('info',$info);
		$this->display();
	}
	//添加商品
	public function add(){
		$goods=new \Model\GoodsModel();

		if(!empty($_POST)){
			//做商品图片的处理
			//var_dump($_FILES);die;
			if ($_FILES['goods_img']['error']===0) {
				$cfg=array(
					'rootPath'      =>  './Admin/Public/goods/', //保存根路径
					);
			$up=new \Think\Upload($cfg);
			$z=$up->uploadOne($_FILES['goods_img']);

			$_POST['goods_big_img']=$up->rootPath.$z['savepath'].$z['savename'];

			$bigimg=$_POST['goods_big_img'];
			//对上传图片进行缩略图处理
			$im=new \Think\Image();//实例化对象
			$im->open($bigimg);//相对服务器路径打开图片
			$im->thumb(165,165,3);//自适应大小制作缩略图
			$smallimg=$up->rootPath.$z['savepath']."small_".$z['savename'];
			$im->save($smallimg);//保存
			$_POST['goods_small_img']=$smallimg;

			//var_dump($_POST['goods_big_img']);die;
			}
			//收集表单数据
			$info=$goods->create();
			$result=$goods->add($info);
			if($result){
				//跳转
				$this->redirect('showlist',array(),2,'添加商品成功');
			}

		}
		$category=new \Model\CategoryModel();
		$cats=$category->select();
		$this->assign('cats',$cats);
		$this->display();
	}
	//更新商品
	public function update($goods_id){
		$goods=new \Model\GoodsModel();
		if (!empty($_POST)) {

			if ($_FILES['goods_img']['error']===0) {
				$cfg=array(
					'rootPath'      =>  './Admin/Public/goods/', //保存根路径
					);
			$up=new \Think\Upload($cfg);
			$z=$up->uploadOne($_FILES['goods_img']);

			$_POST['goods_big_img']=$up->rootPath.$z['savepath'].$z['savename'];

			$bigimg=$_POST['goods_big_img'];
			//对上传图片进行缩略图处理
			$im=new \Think\Image();//实例化对象
			$im->open($bigimg);//相对服务器路径打开图片
			$im->thumb(165,165,3);//自适应大小制作缩略图
			$smallimg=$up->rootPath.$z['savepath']."small_".$z['savename'];
			$im->save($smallimg);//保存
			$_POST['goods_small_img']=$smallimg;

			//var_dump($_POST['goods_big_img']);die;
			}

			$arr=$goods->create();
			$result=$goods->save($arr);
			if ($result) {
				$this->redirect('showlist',array(),2,'修改商品成功');
		}else{
			var_dump($goods->getError());
		}
		}
		$category=new \Model\CategoryModel();
		$cats=$category->select();
		$this->assign('cats',$cats);
		$info=$goods->find($goods_id);
		$this->assign('info',$info);
		$this->display();
	}
	//删除商品
	public function del($goods_id){
		$goods=D('Goods');
		$res=$goods->delete($goods_id);
		if ($res) {
			$this->redirect('showlist',array(),2,'删除成功');
		}
	}
	//商品分类
	public function category(){
		$category=new \Model\CategoryModel();
		$info=$category->select();

		$info=$category->tree($info);
		$this->assign('info',$info);

		$this->display();
	}
	//删除商品种类
	public function catdel($cat_id){
		$category=new \Model\CategoryModel();
		$c=$category->getSubIds($cat_id);
		foreach ($c as $v) {
			$res=$category->delete($v);
		}


		if ($res) {
			$this->redirect('category',array(),2,'删除成功');
		}
	}
	//添加分类
	public function catadd(){
		$category=new \Model\CategoryModel();

		if(!empty($_POST)){

			//收集表单数据
			$info=$category->create();
			$result=$category->add($info);
			if($result){
				//跳转
				$this->redirect('category',array(),2,'添加分类成功');
			}

		}
		$par_info=$category->where("parent_id=0")->select();
		$this->assign('par_info',$par_info);
		$this->display();
	}
	//修改分类
	public function catupdate($cat_id){
		$category=new \Model\CategoryModel();

		if(!empty($_POST)){

			//收集表单数据
			$info=$category->create();
			$result=$category->save($info);
			if($result){
				//跳转
				$this->redirect('category',array(),2,'修改分类成功');
			}

		}
		$par_info=$category->where("parent_id=0")->select();
		$this->assign('par_info',$par_info);
		$info=$category->find($cat_id);
		$this->assign('info',$info);
		$this->display();
	}
}