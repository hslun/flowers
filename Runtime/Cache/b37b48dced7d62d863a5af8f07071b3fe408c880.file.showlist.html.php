<?php /* Smarty version Smarty-3.1.6, created on 2015-06-28 21:00:53
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\User\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:16850557575673da8c3-48737852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b37b48dced7d62d863a5af8f07071b3fe408c880' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\User\\showlist.html',
      1 => 1435496135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16850557575673da8c3-48737852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_557575674f157',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557575674f157')) {function content_557575674f157($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

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
                <span style="float: left;">当前位置是：会员管理-》会员列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add">【添加会员】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="<?php echo @__SELF__;?>
" method="post">
                    会员名字:&nbsp;<input type="text" name="checkname" />
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        
                        <td>会员名称</td>
                        <td>密码</td>
                        <td>邮箱</td>
                        <td>性别</td>
                        <td>QQ</td>
                        <td>手机号</td>
                        
                        <td>创建时间</td>
                        <td>修改时间</td>
                        <td align="center" colspan="2">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['password'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_email'];?>
</td>
                        <td>
                             <?php if ($_smarty_tpl->tpl_vars['v']->value['user_sex']==1){?>
                            男
                            <?php }else{ ?>
                            女
                            <?php }?>
                           </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_qq'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_tel'];?>
</td>
                       
                        <td><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['v']->value['user_time']);?>
</td>
                        <td><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['v']->value['last_time']);?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/update/user_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/deluser/user_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
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