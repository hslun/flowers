<?php
	namespace Model;
 	use Think\Model;
 class AdminModel extends Model{
 		//检验用户名和密码
 	public function checkNamePwd($name,$pwd){
 			//查询用户名是否存在
 		$info=$this->where("mg_name='$name'")->find();
 
 		//查询出来的密码与pwd比较
 		if ($info) {
 			if ($info['mg_pwd']===$pwd) {
 				return $info;
 			}
 		}
 		return false;
 	}
 }
?>