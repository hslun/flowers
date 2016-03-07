<?php
header("content-type:text/html;charset=utf-8");
//获得聊天信息，并通过json格式提供出来
$link = mysql_connect('localhost','root','aa');
mysql_select_db('shop0407',$link);
mysql_query('set names utf8');

$maxID = $_GET['maxID'];

$sql2 = "select * from message where id>'$maxID' order by id";
$qry2 = mysql_query($sql2);

$info = array();
while($rst = mysql_fetch_assoc($qry2)){
    $info[] = $rst;
}

echo json_encode($info);

