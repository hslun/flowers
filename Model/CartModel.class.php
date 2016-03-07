<?php
namespace Model;
use Think\Model;
class CartModel extends Model{
	//加入购物车
	public function addCart($goods_id,$goods_num){
		$user_id=session('user_id');
		
		//会员登录
		if($user_id){
			$has=$this->where(array(
				'user_id'=>array('eq',$user_id),
				'goods_id'=>array('eq',$goods_id),
				))->count();
			
			if ($has>0) {
				$a=$this->where(array(
				'user_id'=>array('eq',$user_id),
				'goods_id'=>array('eq',$goods_id),
					))->setInc('goods_num',$goods_num);
				return $a;
			}else{

				$a=$this->add(array(
				'user_id'=>$user_id,
				'goods_id'=>$goods_id,
				'goods_num'=>$goods_num,
					));
			return $a;
				

			}
		}else{
			//会员未登录
			//从cookie中取出
			$cart=isset($_COOKIE['cart'])?unserialize($_COOKIE['cart']):array();

			//根据商品ID判断一维数组中有没这件商品  
			$key=$goods_id;
			//如果存在就加上这次购买的数量,如果不存在就把这件商品添加到数组中
			if (isset($cart[$key])) {
				$cart[$key]+=$goods_num;
			}else{
				$cart[$key]=$goods_num;
			}

			//保存回cookie
			setcookie('cart',serialize($cart),time()+72000,'/');
			
			return true;
		}
	}
	//购物车模型
	public function cartlist(){
		$user_id=session('user_id');
		if ($user_id) {
			$cart=$this->field('goods_id,goods_num')->where(array('user_id'=>array('eq',$user_id)))->select();
		}else{
			$_cart=isset($_COOKIE['cart'])?unserialize($_COOKIE['cart']):array();
				
			//将一维数组转成二维数组
			$cart=array();
			foreach ($_cart as $k => $v) {
				//从小标中取出商品ID
				$cart[]=array(
					'goods_id'=>$k,
					'goods_num'=>$v,
					);
			}

		}

		//循环购物车的商品
		 $goods=new \Model\GoodsModel();
		 foreach ($cart as $k => $v) {
		 	$info=$goods->find($v['goods_id']);
		 	$cart[$k]['goods_name']=$info['goods_name'];
		 	$cart[$k]['goods_small_img']=$info['goods_small_img'];
		 	$cart[$k]['goods_price']=$info['goods_price'];
		 	$cart[$k]['shop_price']=$info['shop_price'];
		 }
		 return $cart;
	}
	//登陆添加数据到数据库  删除cookie
	public function moveData(){
		$user_id=session('user_id');
		if ($user_id) {
			$cart=isset($_COOKIE['cart'])?unserialize($_COOKIE['cart']):array();
			if ($cart) {
				foreach ($cart as $k => $v) {
					$this->addCart($k,$v);
				}
				//清空浏览器购物车的COOKIE
				setcookie('cart','',time()-1,'/');
			}
		}
	}
	//修改购物车商品数量
	public function changGoodsNumber($goods_id,$changTo){
		$user_id=session('user_id');
		$isEnough=1;//商品够不够
		//还要不是删除商品 就先取出库存
		if ($changTo!=0) {
			$goods=new \Model\GoodsModel();
			$gn=$goods->field('goods_number')->where('goods_id="$goods_id"')->find();
			if ($gn['goods_number']<$changTo) {
				$isEnough=0;//商品不够
				$changTo=$gn['goods_number'];
			}
		}
		if ($user_id) {
			if ($changTo==0) {
				$this->delCart($goods_id);
			}else{
				$this->where(array(
					'user_id'=>$user_id,
					'goods_id'=>$goods_id,
					))->setField('goods_number',$changTo);
			}
			if ($isEnough) {
				return true;
			}else{
				return $changTo;
			}
		}else{
			if ($changTo==0) {
				$cart=isset($_COOKIE['cart'])?unserialize($_COOKIE['cart']):array();
				unset($cart["$goods_id"]);
			}else{
				$cart["$goods_id"]=$changTo;
			}
			//保存回cookie
			setcookie('cart',serialize($cart),time()+72000,'/');
			if ($isEnough) {
				return true;
			}else{
				return $changTo;
			}
		}
	}
	//移出购物车
	public function delCart($goods_id){
		$user_id=session('user_id');
		
		//会员登录
		if($user_id){
			$cart=new \Model\CartModel();
			$sql="DELETE FROM `shop0407`.`sw_cart` WHERE `sw_cart`.`user_id` = {$user_id} AND `sw_cart`.`goods_id`={$goods_id}";

			$a=$cart->execute($sql);
				
			return $a;
		
		}else{
			//会员未登录
			//从cookie中取出
			$cart=isset($_COOKIE['cart'])?unserialize($_COOKIE['cart']):array();

			
			unset($cart["$goods_id"]);
			
			//保存回cookie
			setcookie('cart',serialize($cart),time()+72000,'/');
			
			return true;
		}
	}

}


?>