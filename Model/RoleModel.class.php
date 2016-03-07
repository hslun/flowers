<?php
 namespace Model;
 use Think\Model;
 class RoleModel extends Model{
 	public function saveAuth($auth_ids,$role_id){
 		//处理auth_ids
 		$auth_ids=implode(',', $auth_ids);
 		//根据id查询控制器和方法
 		$authinfo=D('auth')->select($auth_ids);

 		//遍历  取得控制器方法  并拼装成字符串
 		$s="";
 		foreach ($authinfo as $k => $v) {
 			if (!empty($v['auth_c']) && !empty($v['auth_a'])) {
 				$s.=$v['auth_c']."-".$v['auth_a'].",";
 			}
 		}
 		$s=rtrim($s,',');
 		//根据获得的$auth_ids 和$s更新操作
 		$sql="update sw_role set role_auth_ids ='$auth_ids',role_auth_ac ='$s' where role_id ='$role_id'";
 		return $this->execute($sql);
 	}

 }
?>