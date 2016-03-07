<?php /* Smarty version Smarty-3.1.6, created on 2015-06-29 08:58:01
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\User\update.html" */ ?>
<?php /*%%SmartyHeaderCode:27868558ff4cff20016-77556248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9193a480d4f479d372d0d3186c5ffc4e812bddaf' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\User\\update.html',
      1 => 1435539335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27868558ff4cff20016-77556248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_558ff4d0048df',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558ff4d0048df')) {function content_558ff4d0048df($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改用户</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：用户管理-》修改用户信息</span>
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
                    <td><input type="text" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
"/></td>
                </tr>
                
                <tr>
                    <td>用户密码</td>
                    <td><input type="text" name="password" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
"/></td>
                </tr>
                 <tr>
                    <td>邮箱</td>
                    <td><input type="text" name="user_email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
"/></td>
                </tr>
               <tr>
                    <td>性别</td>
                    <td>
                        <input type="radio" name="user_sex" value="1" <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex']==1){?> checked<?php }?>/>男
                        <input type="radio" name="user_sex" value="2" <?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex']==2){?> checked<?php }?>/>女

                    </td>
                </tr>
                <tr>
                    <td>qq</td>
                    <td>
                        <input type="text" name="user_qq" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_qq'];?>
"/>

                    </td>
                </tr>
                 <tr>
                    <td>手机号</td>
                    <td><input type="text" name="user_tel" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_tel'];?>
"/></td>
                </tr>
                 <tr>
                    <td>创建时间</td>
                    <td><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['user']->value['user_time']);?>
</td>
                </tr>
               <input type="hidden" name="user_time" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_time'];?>
"/>
             
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>