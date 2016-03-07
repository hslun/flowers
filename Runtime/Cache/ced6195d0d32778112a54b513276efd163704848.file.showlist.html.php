<?php /* Smarty version Smarty-3.1.6, created on 2015-08-03 16:50:54
         compiled from "D:/PHP/amp/project/shop/Admin/View\Goods\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:619355bf2b6e5ef2a0-07410710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ced6195d0d32778112a54b513276efd163704848' => 
    array (
      0 => 'D:/PHP/amp/project/shop/Admin/View\\Goods\\showlist.html',
      1 => 1434272760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '619355bf2b6e5ef2a0-07410710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cats' => 0,
    'v' => 0,
    'cat_id' => 0,
    'info' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55bf2b6e72343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf2b6e72343')) {function content_55bf2b6e72343($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\PHP\\amp\\project\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add">【添加商品】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="<?php echo @__SELF__;?>
" method="post">
                    商品种类&nbsp;<select name="category_id" style="width: 100px;">
                        <option  value="0">--请选择--</option>
                      
                         <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                         <?php if ($_smarty_tpl->tpl_vars['v']->value['parent_id']!=0){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['cat_id']==$_smarty_tpl->tpl_vars['cat_id']->value){?>selected="selected"<?php }?>
                        ><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</option>
                        <?php }?>
                        <?php } ?>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td>优惠价格</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>商品种类</td>
                        <td>热销</td>
                        <td>创建时间</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_price'];?>
</td>
                        <td><img src="<?php echo @__ROOT__;?>
<?php echo ltrim($_smarty_tpl->tpl_vars['v']->value['goods_big_img'],'.');?>
" height="55" width="60"></td>
                        <td><img src="<?php echo @__ROOT__;?>
<?php echo ltrim($_smarty_tpl->tpl_vars['v']->value['goods_small_img'],'.');?>
" height="40" width="40"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['is_hot']==0){?>
                            否
                            <?php }else{ ?>
                            是
                            <?php }?>
                        </td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['goods_create_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/update/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">修改</a></td>
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