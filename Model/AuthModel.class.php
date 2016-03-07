<?php
 namespace Model;
 use Think\Model;
 class AuthModel extends Model{
 	public function saveData($authinfo){
 		//根据以后信息,形成新纪录
 		$newid=$this->add($authinfo);
 		//根据结果 求auth_path和auth_level,并更新
 		//制作auth_path
 		if ($authinfo['auth_pid']==0) {
 			$path=$newid;   //顶级权限
 		}else{
 				//非顶级权限
 			$pinfo=$this->find($authinfo['auth_pid']);//父权限信息
 			$path=$pinfo['auth_path']."-".$newid;
 		}
 		//制作level层数
 		$level=str_word_count($path,0,'-');
 		//把$path 和$level更新到新纪录
 		$sql="update sw_auth set auth_path ='$path',auth_level='$level' where auth_id='$newid'";
 		return $this->execute($sql);
 	}
 	public function upData($authinfo){
 		//根据以后信息,形成新纪录
 		$newid=$authinfo['auth_id'];
 		$this->save($authinfo);
 		//根据结果 求auth_path和auth_level,并更新
 		//制作auth_path
 		if ($authinfo['auth_pid']==0) {
 			$path=$newid;   //顶级权限
 		}else{
 				//非顶级权限
 			$pinfo=$this->find($authinfo['auth_pid']);//父权限信息
 			$path=$pinfo['auth_path']."-".$newid;
 		}
 		//制作level层数
 		$level=str_word_count($path,0,'-');
 		//把$path 和$level更新到新纪录
 		$sql="update sw_auth set auth_path ='$path',auth_level='$level' where auth_id='$newid'";
 		return $this->execute($sql);
 	}
 }
?>