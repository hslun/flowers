<?php /* Smarty version Smarty-3.1.6, created on 2015-06-28 21:18:24
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\User\add.html" */ ?>
<?php /*%%SmartyHeaderCode:22472558ff09168ef64-51723314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1d5020f89b800ccb3fcc7bc21d106156d777157' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\User\\add.html',
      1 => 1435497162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22472558ff09168ef64-51723314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_558ff091731a0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558ff091731a0')) {function content_558ff091731a0($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加用户</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：用户管理-》添加用户信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>用户名称</td>
                    <td><input type="text" name="user_name" /></td>
                </tr>
                
                <tr>
                    <td>用户密码</td>
                    <td><input type="text" name="password" /></td>
                </tr>
                 <tr>
                    <td>邮箱</td>
                    <td><input type="text" name="user_email" /></td>
                </tr>
               <tr>
                    <td>性别</td>
                    <td>
                        <input type="radio" name="user_sex" value="1"/>男
                        <input type="radio" name="user_sex" value="2"/>女

                    </td>
                </tr>
                <tr>
                    <td>qq</td>
                    <td>
                        <input type="text" name="user_qq" />

                    </td>
                </tr>
                 <tr>
                    <td>手机号</td>
                    <td><input type="text" name="user_tel" /></td>
                </tr>
      
               
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>