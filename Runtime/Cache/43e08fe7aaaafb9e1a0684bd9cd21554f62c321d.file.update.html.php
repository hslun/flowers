<?php /* Smarty version Smarty-3.1.6, created on 2015-06-04 19:54:05
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\Auth\update.html" */ ?>
<?php /*%%SmartyHeaderCode:19869557033cc46ae67-42005598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43e08fe7aaaafb9e1a0684bd9cd21554f62c321d' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\Auth\\update.html',
      1 => 1433418840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19869557033cc46ae67-42005598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_557033cc4ea6f',
  'variables' => 
  array (
    'info' => 0,
    'auth_infoA' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557033cc4ea6f')) {function content_557033cc4ea6f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加权限</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：权限管理-》修改权限信息</span>
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
                <input type="hidden" name="auth_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_id'];?>
" />
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>权限名称</td>
                    <td><input type="text" name="auth_name"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_name'];?>
"/></td>
                </tr>
                
                <tr>
                    <td>上级</td>
                    <td>
                        <select name="auth_pid">
                            <option value="0">请选择</option>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['auth_id']==$_smarty_tpl->tpl_vars['info']->value['auth_pid']){?>selected="selected"<?php }?>
                            ><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
               
               <tr>
                    <td>控制器</td>
                    <td><input type="text" name="auth_c" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_c'];?>
"/></td>
                </tr>
                <tr>
                    <td>操作方法</td>
                    <td><input type="text" name="auth_a" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_a'];?>
"/></td>
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