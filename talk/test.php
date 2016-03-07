<?php
session_start();
//var_dump($_SESSION['user_id']);
header("content-type:text/html;charset=utf-8");
//获得聊天信息，并通过json格式提供出来
$link = mysql_connect('localhost','root','aa');
mysql_select_db('shop0407',$link);
mysql_query('set names utf8');
$user_id = $_SESSION['user_id'];
$sql = "select username from sw_user where user_id='$user_id'";
$qry = mysql_query($sql);

$info = array();
while($rst = mysql_fetch_assoc($qry)){
    $info[] = $rst;
}

$str = substr(json_encode($info),14);
$GLOBALS['username']  = substr($str,0,-3);



