<?php /* Smarty version Smarty-3.1.6, created on 2015-06-28 21:00:45
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\User\comment.html" */ ?>
<?php /*%%SmartyHeaderCode:13101558fec929cc5e8-96207881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f457cc71ad5f9f0d1f9a36cf7a187cc6d2858045' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\User\\comment.html',
      1 => 1435496441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13101558fec929cc5e8-96207881',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_558fec92a3b4a',
  'variables' => 
  array (
    'comment_info' => 0,
    'comment' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558fec92a3b4a')) {function content_558fec92a3b4a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <span style="float: left;">当前位置是：会员管理-》用户评论</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;"</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        
                        <td>留言人</td>
						<td>留言内容</td>
						<td colspan="2">留言时间</td>			
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
					<tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['comment']->value['insert_time'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/delly/comment_id/<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
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