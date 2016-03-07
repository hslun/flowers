<?php /* Smarty version Smarty-3.1.6, created on 2015-06-12 10:13:13
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\Goods\catadd.html" */ ?>
<?php /*%%SmartyHeaderCode:16815557188b7aceec8-44604534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfb222d4bc79ae04fc8d472ce0cd0b3e243a3ca7' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\Goods\\catadd.html',
      1 => 1434075190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16815557188b7aceec8-44604534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_557188b7b29dc',
  'variables' => 
  array (
    'par_info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557188b7b29dc')) {function content_557188b7b29dc($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加商品分类</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品分类管理-》添加商品分类</span>
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
                    <td>商品分类名称</td>
                    <td><input type="text" name="cat_name" /></td>
                </tr>
                <tr>
                    <td>商品父类</td>
                    <td>
                        <select name="parent_id">
                            <option value="0">顶级分类</option>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['par_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
">-<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
-</option>
                           <?php } ?>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>是否展示</td>
                    <td>
                        <select name="is_show">
                            <option value="1">是</option>
                            <option value="0">否</option>
                            
                        </select>
                    </td>
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