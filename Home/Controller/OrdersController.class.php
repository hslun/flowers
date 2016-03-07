<?php
namespace Home\Controller;
use Tool\HbaseController;
class OrdersController extends HbaseController {
	public function setOrder(){
		$goods_user=I('post.goods_user');
		$goods_user_tel=I('post.goods_user_tel');
		$province=I('post.province');
		$city=I('post.city');
		$piecearea=I('post.piecearea');
		$order_addr=I('post.order_addr');
		$total=I('post.total');
		$order_time=time();
		$user_id=session('user_id');

		$order_info=D('order_info');
		$order_id=$order_info->add(array(
			'goods_user'=>$goods_user,
			'goods_user_tel'=>$goods_user_tel,
			'province'=>$province,
			'city'=>$city,
			'piecearea'=>$piecearea,
			'order_addr'=>$order_addr,
			'order_time'=>$order_time,
			'total'=>$total,
			'order_time'=>$order_time,
			'user_id'=>$user_id,

			));
		if ($order_id) {
			//清空购物车
			$cart=D('cart');
			$cart->where("user_id='$user_id'")->delete();

			$goods_id=I('post.goods_id');
			$goods_num=I('post.goods_num');
			$data="";
			foreach ($goods_id as $k => $v) {
				$data["$k"][0]=$v;
				
			}
			foreach ($goods_num as $k => $v) {
				$data["$k"][1]=$v;
				
			}
				
			
			$order_goods=D('order_goods');
			foreach ($data as $k=> $v) {
			$order_goods->add(array(
			'order_id'=>$order_id,
			'goods_id'=>$v[0],
			'goods_num'=>$v[1],
			));
			}
			
			$this->display();
			
		}
	}
	public function showOrder(){
		if (session('username')=="") {
			$this->redirect('User/login');
		}else{
			$user_id=session('user_id');
			//多表查询
			$order_info=D('order_info');
			$order_goods=D('order_goods');
			$goods=D('goods');
			$sql="SELECT a.order_id,b.goods_id,b.goods_num,c.goods_name,c.goods_price,c.goods_small_img,c.shop_price FROM `sw_order_info` as `a`  left join `sw_order_goods` as `b` on a.order_id=b.order_id left join `sw_goods` as `c` on b.goods_id=c.goods_id WHERE `user_id`='$user_id'";
			$orders=$order_info->query($sql);

		
			$this->assign('orders',$orders);
		
			$order_dz=$order_info->where("`user_id`='$user_id'")->select();
			$this->assign('order_dz',$order_dz);

			$this->display();
		}
		
	}
}
?>