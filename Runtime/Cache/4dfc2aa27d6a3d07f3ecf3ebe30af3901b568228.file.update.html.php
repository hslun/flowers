<?php /* Smarty version Smarty-3.1.6, created on 2015-06-06 23:03:22
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\Goods\update.html" */ ?>
<?php /*%%SmartyHeaderCode:263335567bdd13c4493-73151872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dfc2aa27d6a3d07f3ecf3ebe30af3901b568228' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\Goods\\update.html',
      1 => 1433602998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263335567bdd13c4493-73151872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5567bdd1436d7',
  'variables' => 
  array (
    'info' => 0,
    'cats' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5567bdd1436d7')) {function content_5567bdd1436d7($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>
        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
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
                <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_id'];?>
"/>
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="goods_name"  value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_name'];?>
"/></td>
                </tr>
                
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="goods_price" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_price'];?>
"/></td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="shop_price" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_price'];?>
"/></td>
                </tr>
               <tr>
                    <td>商品数量</td>
                    <td><input type="text" name="goods_number" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_number'];?>
"/></td>
                </tr>
                <tr>
                    <td>商品种类</td>
                    <td>
                        <select name="goods_category_id">
                            <option value="0">--请选择--</option>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['cat_id']==$_smarty_tpl->tpl_vars['info']->value['goods_category_id']){?>selected="selected"<?php }?>
                            ><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</option>
                            <?php } ?>
                        </select>

                    </td>
                </tr>
                 <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="goods_img" /><?php echo $_smarty_tpl->tpl_vars['info']->value['goods_big_img'];?>
</td>
                </tr>
                 <td>商品热销</td>
                    <td>
                         <select  name="is_hot">
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['info']->value['is_hot']==0){?>selected="selected"<?php }?>>否</option>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['is_hot']==1){?>selected="selected"<?php }?>>是</option>
                        </select>
                    </td>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="goods_introduce"><?php echo $_smarty_tpl->tpl_vars['info']->value['goods_introduce'];?>
</textarea>
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