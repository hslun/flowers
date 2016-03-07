<?php
namespace Home\Controller;
use Tool\HbaseController;
class BuyController extends HbaseController {
		//添加到购物车
	public function addCart(){
		$goods_id=I('post.goods_id');
		$goods_num=I('post.goods_num');
		$cart=new \Model\CartModel();
		$a=$cart->addCart($goods_id,$goods_num);
		if ($a) {
			$this->redirect('cartlist');
		}

		
	}
	public function cartlist(){
		$cart=new \Model\CartModel();
		$data=$cart->cartlist();
		$tp=0;
		foreach ($data as $k => $v) {
			$tp+=$v['shop_price']*$v['goods_num'];
		}
		$this->assign('tp',$tp);
		$this->assign('data',$data);
		$this->display();
	}
	//修改购物车商品数量
	public function changeGoodsNumber(){
		$goods_id=I('get.goods_id');
		var_dump($goods_id);
		$changTo=I('get.changTo');
		$cart=new \Model\CartModel();
		$ret=$cart->changGoodsNumber($goods_id,$changTo);
		if ($ret===true) {
			echo "ok";
		}else{
			echo $ret;
		}
	}
	//删除购物车shangpin
	public function delCart(){
		$goods_id=I('get.goods_id');
		$cart=new \Model\CartModel();
		$a=$cart->delCart($goods_id);
		if ($a) {
			$this->redirect('cartlist');
		}
	}
	//地址订单
	public function addresslist(){
		if (session('username')=="") {
			$this->redirect('User/login');
		}else{
		$cart=new \Model\CartModel();
		$data=$cart->cartlist();
		$tp=0;
		foreach ($data as $k => $v) {
			$tp+=$v['shop_price']*$v['goods_num'];
		}
		$this->assign('tp',$tp);
		$this->assign('data',$data);
		$this->display();
		}
	}
}
?>