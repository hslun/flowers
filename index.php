<?php
header("content-type:text/html;charset=utf-8");
//定义错为开发模式
define('APP_DEBUG', true);
//定义home路径
define('CSS_URL', '/shop/Home/Public/css/');
define('IMG_URL', '/shop/Home/Public/images/');
define('JS_URL', '/shop/Home/Public/js/');
//定义admin路径
define('ADMIN_CSS_URL', '/shop/Admin/Public/css/');
define('ADMIN_IMG_URL', '/shop/Admin/Public/img/');

include "../ThinkPHP/ThinkPHP.php";