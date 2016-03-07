<?php /* Smarty version Smarty-3.1.6, created on 2015-06-03 15:49:13
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\Admin\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:21018556ea5b99a65e7-56321795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19e988b12284fa6dbd56618cf862bc3a4f587bce' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\Admin\\showlist.html',
      1 => 1433317749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21018556ea5b99a65e7-56321795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_556ea5b9a318d',
  'variables' => 
  array (
    'infos' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556ea5b9a318d')) {function content_556ea5b9a318d($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <span style="float: left;">当前位置是：后台用户管理-》角色列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add">【添加角色】</a>
                </span>
            </span>
        </div>
        <div></div>
       
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <th>序号</th>
                        <th>名称</th>
                        <th>密码</th>
                        <th>注册时间</th>
                        <th>职位</th>
                        
                        <th colspan="2" align="center">操作</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_pwd'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_time'];?>
</td>
                        <td>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['mg_role_id']==0){?>
                        <span>管理员</span>
                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</td>
                        <?php }?> 
                        <td><a href="#">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/del/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" onclick="javascript:return confirm('您确认要删除这条记录吗?')">删除</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>