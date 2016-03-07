<?php /* Smarty version Smarty-3.1.6, created on 2015-06-24 19:53:48
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\Order\orderlist.html" */ ?>
<?php /*%%SmartyHeaderCode:8644558a99e0425670-10755183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0847be8198eb4074c3b75651c8cd6e5154c56eba' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\Order\\orderlist.html',
      1 => 1435146824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8644558a99e0425670-10755183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_558a99e04f94f',
  'variables' => 
  array (
    'order_dz' => 0,
    'v' => 0,
    'pagelist' => 0,
    'orders' => 0,
    'v1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558a99e04f94f')) {function content_558a99e04f94f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
/showlist">【返回订单详情】</a>
                </span>
            </span>
        </div>
        <div></div>
        
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                       
                        <td>收货人姓名</td>
                        <td>收货人电话</td>
                        <td>省份</td>
                        <td>城市</td>
                        <td>地区</td>
                        <td>详细地址</td>
                        <td>会员ID</td>
                        <td>订单提交时间</td>
                        <td>订单总价</td>
                        
                       
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_dz']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                       
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
                       
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
             <table width="100%" border="1" cellpadding="5" cellspacing="0">
                   

                        <tr>
                            
                        <th width="20%" align="left">商品图片</th> 
                        <th width="20%" align="left">商品名字</th> 
                        <th width="20%" align="center">购买数量</th> 
                        <th width="20%" align="right">市场价</th> 
                        <th width="20%" align="right">优惠价</th> 
                           
                        </tr>
                   
                     <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
                     <?php if ($_smarty_tpl->tpl_vars['v1']->value['order_id']==$_smarty_tpl->tpl_vars['v']->value['order_id']){?>
                        <tr>
                           
                            <td><a href=""><img src="<?php echo ltrim($_smarty_tpl->tpl_vars['v1']->value['goods_small_img'],'.');?>
"  width="30"/></a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v1']->value['goods_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v1']->value['goods_num'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v1']->value['goods_price'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v1']->value['shop_price'];?>
</td>
                          
                        </tr>
                        <?php }?>
                    <?php } ?> 
            </table>
        </div>
    </body>
</html><?php }} ?>