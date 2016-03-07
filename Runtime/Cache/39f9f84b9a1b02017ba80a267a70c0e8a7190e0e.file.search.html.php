<?php /* Smarty version Smarty-3.1.6, created on 2015-06-24 20:13:09
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\Order\search.html" */ ?>
<?php /*%%SmartyHeaderCode:30930558a9ed50aba11-00263562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39f9f84b9a1b02017ba80a267a70c0e8a7190e0e' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\Order\\search.html',
      1 => 1435147971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30930558a9ed50aba11-00263562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orders' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_558a9ed5164c3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558a9ed5164c3')) {function content_558a9ed5164c3($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>订单列表</title>

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
                <span style="float: left;">当前位置是：订单管理-》订单列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add">【添加订单】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="<?php echo @__CONTROLLER__;?>
/search" method="post">
                    订单ID&nbsp;<input type="text" name="order_id" style="width:90px"/>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>订单ID</td>
                        <td>收货人姓名</td>
                        <td>收货人电话</td>
                        <td>省份</td>
                        <td>城市</td>
                        <td>地区</td>
                        <td>详细地址</td>
                        <td>会员ID</td>
                        <td>订单提交时间</td>
                        <td>订单总价</td>
                        
                        <td align="center" colspan="2">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_user'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_user_tel'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['province'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['city'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['piecearea'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_addr'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
</td>
                        <td><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['v']->value['order_time']);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['total'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/orderlist/order_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_id'];?>
">订单详情</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/del/order_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_id'];?>
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