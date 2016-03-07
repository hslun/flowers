<?php /* Smarty version Smarty-3.1.6, created on 2015-06-04 19:20:59
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\Role\distribute.html" */ ?>
<?php /*%%SmartyHeaderCode:5334556dd65077be14-88771423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f82767e2c8b6da63881405ee1b102742be29a11' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\Role\\distribute.html',
      1 => 1433416855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5334556dd65077be14-88771423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_556dd6508613f',
  'variables' => 
  array (
    'role_info' => 0,
    'auth_infoA' => 0,
    'v' => 0,
    'auth_arr' => 0,
    'auth_infoB' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556dd6508613f')) {function content_556dd6508613f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>角色列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{
                background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：角色管理-》分配权限--[<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_name'];?>
]</span>
              
            </span>
        </div>
        <div></div>
     
        <div style="font-size: 13px; margin: 10px 5px;">
            <form method="POST" action="<?php echo @__SELF__;?>
" name="theFrom">
                <input type="hidden" name="role_id" value="<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_id'];?>
" />
            <div class="list-div">
                <table border="1" cellspacing='1' id="list-table">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <tr>
                <td width="18%" valign="top" class="first-cell" style="font-weight:bold">
                <input name="auth_id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" 
                <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['auth_id'],$_smarty_tpl->tpl_vars['auth_arr']->value)){?>checked='checked'<?php }?>
                /><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</td>
                <td>
                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']===$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                <div style="width:200px;float:left;">
            <label for="goods_manage">
                <input type="checkbox" name="auth_id[]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_id'];?>
"  
                  <?php if (in_array($_smarty_tpl->tpl_vars['vv']->value['auth_id'],$_smarty_tpl->tpl_vars['auth_arr']->value)){?>
                  checked="checked"
                  <?php }?>
                /><?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>
</label>
            </div>
            <?php }?>
             <?php } ?>
             </td>
         </tr>
         <?php } ?>

             </table>
             <input type="submit" value="修改权限"/>
        </div>
        </form>
        </div>
    </body>
</html><?php }} ?>