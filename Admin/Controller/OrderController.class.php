<?php
namespace Admin\Controller;
use Tool\AbaseController;
//后台订单
class OrderController extends AbaseController{
	public function showlist(){
			$order_info=D('order_info');
			$orders=$order_info->select();
			$this->assign('orders',$orders);
			$this->display();
	}
	public function orderlist(){
			
			$order_id=I('get.order_id');
			//多表查询
			$order_info=D('order_info');
			$order_goods=D('order_goods');
			$goods=D('goods');
			$sql="SELECT a.*,b.goods_name,b.goods_price,b.goods_small_img,b.shop_price FROM `sw_order_goods` as `a`  left join `sw_goods` as `b` on a.goods_id=b.goods_id  where  `order_id`='$order_id'";
			$orders=$order_info->query($sql);

		
			 $this->assign('orders',$orders);
		
			$order_dz=$order_info->where("`order_id`='$order_id'")->select();
		
			$this->assign('order_dz',$order_dz);

			$this->display();
	}
	//删除订单
	public function del($order_id){
		$order_info=D('order_info');
		$order_goods=D('order_goods');
		$res=$order_info->delete($order_id);
		$sql="delete from sw_order_goods where order_id='$order_id'";
		$res1=$order_goods->execute($sql);
		if ($res&&$res1) {
			$this->redirect('showlist',array(),2,'删除成功');
		}
	}
	//查询订单
	public function search(){
		$order_id=I('post.order_id');
		$order_info=D('order_info');
			$orders=$order_info->select($order_id);
			$this->assign('orders',$orders);
			$this->display();
	}
		//添加订单
	public function add(){
		if(!empty($_POST)){
		$goods_user=I('post.goods_user');
		$goods_user_tel=I('post.goods_user_tel');
		$province=I('post.province');
		$city=I('post.city');
		$piecearea=I('post.piecearea');
		$order_addr=I('post.order_addr');
		$order_time=time();
		$user_id=I('post.user_id');

		$goods_id=I('post.goods_id');
		$goods_num=I('post.goods_num');
		$data="";
		$total=0;
		foreach ($goods_id as $k => $v) {
			$data["$k"][0]=$v;
			
				
		}
		foreach ($goods_num as $k => $v) {
			$data["$k"][1]=$v;
				
		}
			$goods=D('goods');
			
		foreach ($data as $k=> $v) {
			$goods_info=$goods->select($v[0]);
			$total+=$goods_info[0]["shop_price"]*$v[1];
			
		}
	
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
			$order_goods=D('order_goods');
			foreach ($data as $k=> $v) {
			$order_goods->add(array(
			'order_id'=>$order_id,
			'goods_id'=>$v[0],
			'goods_num'=>$v[1],
			));
			}
			$this->redirect('showlist',array(),2,'添加成功');
		}

		}
		$this->display();
		
	}
	//验证商品id
	function checkuser($user_id){
		//通过Model 查询$goods_id是否存在
		$user=D('user');
		
		$z=$user->where("user_id='$user_id'")->find();
		if ($z==null) {
			echo "<span style='color:black;font-size:14px'>会员不存在</span>";
		}else{
			echo "<span style='color:red;font-size:14px'>会员可以使用</span>";
		}
		exit;
	}

}
?>