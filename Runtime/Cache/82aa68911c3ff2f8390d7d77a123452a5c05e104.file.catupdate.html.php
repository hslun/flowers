<?php /* Smarty version Smarty-3.1.6, created on 2015-06-12 15:19:40
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\Goods\catupdate.html" */ ?>
<?php /*%%SmartyHeaderCode:305005571326e297432-04048110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82aa68911c3ff2f8390d7d77a123452a5c05e104' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\Goods\\catupdate.html',
      1 => 1434093576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305005571326e297432-04048110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5571326e2f7b7',
  'variables' => 
  array (
    'info' => 0,
    'par_info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5571326e2f7b7')) {function content_5571326e2f7b7($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品分类</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品分类管理-》修改商品分类</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/category">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                <input type="hidden" name="cat_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cat_id'];?>
"/>
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品分类名称</td>
                    <td><input type="text" name="cat_name"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cat_name'];?>
"/></td>
                    
                </tr>
                 <tr>
                    <td>商品父类</td>
                    <td>
                         <select name="parent_id">
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['info']->value['parent_id']==0){?>selected="selected"<?php }?>>顶级分类</option>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['par_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['parent_id']==$_smarty_tpl->tpl_vars['v']->value['cat_id']){?>selected="selected"<?php }?>>-<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
-</option>
                           <?php } ?>
                            
                        </select>
                        
                </tr>
                <tr>
                    <td>是否展示</td>
                    <td>
                        <select name="is_show">
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['is_show']==1){?>selected="selected"<?php }?>>是</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['info']->value['is_show']==0){?>selected="selected"<?php }?>>否</option>
                            
                        </select>
                    </td>
                </tr>
              
                
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