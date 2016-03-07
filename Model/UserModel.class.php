<?php
 namespace Model;
 use Think\Model;
class UserModel extends Model{
		//检验用户名和密码
 	public function checkNamePwd($name,$pwd){
 			//查询用户名是否存在
 		$info=$this->where("username='$name'")->find();
 
 		//查询出来的密码与pwd比较
 		if ($info) {
 			if ($info['password']===$pwd) {
 				return $info;
 			}
 		}
 		return false;
 	}
		//是否批量处理
	protected $patchValidate=true;
	//自动验证
	protected $_validate =array(
			//用户名,密码,邮箱,qq号,学历,爱好,
		array('username','require','用户名必须填写'),
		array('username','','用户名必须唯一',0,'unique'),
		array('password','require','密码必须填写'),
		array('password2','require','确认密码必须填写'),
		array('password2','password','两次密码必须一致',0,'confirm'),
		array('user_email','email','邮箱格式不正确',2),
		array('user_qq','number','qq号码必须为纯数字'),
		array('user_qq','5,12','长度为5-12位',0,'length'),
		

		);
	
	//给一些字段自动填充
	protected $_auto =array(
		//array(完成字段1,完成规则,[完成条件,附加规则])
		array('user_time','time',1,'function'),//新增数据时候通过time()函数填充user_time字段
		array('last_time','user_time',1,'field'),//新增数据时候last_time数据与user_time一致
		array('last_time','time',2,'function'),//数据修改时候通过time()函数填充last_time字段
		);

}


?>