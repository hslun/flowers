<?php
//实现用户留言的接收/存储
header("content-type:text/html;charset=utf-8");
$link = mysql_connect('localhost','root','aa');
mysql_select_db('shop0407',$link);
mysql_query('set names utf8');

$color      = $_POST['color'];
$msg        = $_POST['msg'];
$biaoqing   = $_POST['biaoqing'];
$receiver   = $_POST['receiver'];

$sql = "insert into message values (null,'$msg','admin','$receiver','$color','$biaoqing',now())";
if(mysql_query($sql)){
    echo "发表留言成功！";
}else{
    echo "留言失败";
}
