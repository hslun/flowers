<?php
// 实现用户留言的接收/存储
header("content-type:text/html;charset=utf-8");
$link = mysql_connect('localhost','root','aa');
mysql_select_db('shop0407',$link);
mysql_query('set names utf8');

session_start();

if(@$_SESSION['user_id']){
	$user_id = $_SESSION['user_id'];
$sql = "select username from sw_user where user_id='$user_id'";
$qry = mysql_query($sql);

$info = array();
while($rst = mysql_fetch_assoc($qry)){
    $info[] = $rst;
}
$str = substr(json_encode($info),14);
$username = substr($str,0,-3);
}else if(@$_SESSION['mg_name']){
	$username = $_SESSION['mg_name'];
}else{
	die('请先登录');
}

$color      = $_POST['color'];
$msg        = $_POST['msg'];
$biaoqing   = $_POST['biaoqing'];
$receiver   = $_POST['receiver'];

$sql1 = "insert into message values (null,'$msg','$username','$receiver','$color','$biaoqing',now())";
if(mysql_query($sql1)){
    echo "发表留言成功！";
}else{
    echo "留言失败";
}


