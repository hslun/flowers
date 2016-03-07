<?php /* Smarty version Smarty-3.1.6, created on 2015-06-18 11:10:23
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Home/View\Order\showOrder.html" */ ?>
<?php /*%%SmartyHeaderCode:2009455819fa93830a7-42109182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e062f75edca5f0336d05910042f1d2193a1614' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Home/View\\Order\\showOrder.html',
      1 => 1434597020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2009455819fa93830a7-42109182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55819fa9417fa',
  'variables' => 
  array (
    'orders' => 0,
    'v' => 0,
    'order_good' => 0,
    'v2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55819fa9417fa')) {function content_55819fa9417fa($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>花店</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo @CSS_URL;?>
templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?php echo @CSS_URL;?>
orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo @CSS_URL;?>
nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
ddsmoothmenu.css" />

<script type="text/javascript" src="<?php echo @JS_URL;?>
jquery.min.js"></script>


<script type="text/javascript" src="<?php echo @JS_URL;?>
ddsmoothmenu.js">
/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
    mainmenuid: "templatemo_menu", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

</script>

</head>

<body>

<div id="templatemo_wrapper_sp">
<?php echo $_smarty_tpl->getSubTemplate ("../head1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <!-- END of header wrapper -->
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
     <?php echo $_smarty_tpl->getSubTemplate ("../left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div id="content" class="right">
    	<h2>我的订单</h2>
		   <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          
           <div>收货人:<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_user'];?>
 电话:<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_user_tel'];?>
 下单时间:<?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['v']->value['order_time']);?>

                订单总价:<?php echo $_smarty_tpl->tpl_vars['v']->value['total'];?>
元 邮寄地址:<?php echo $_smarty_tpl->tpl_vars['v']->value['province'];?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['city'];?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['piecearea'];?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['order_addr'];?>

           </div>
           <table class="orders">
                    <thead>
                        <tr>
                            
                            <th width="20%">商品图片</th>
                            <th width="20%">商品名称</th>
                            <th width="10%">购买数量</th>
                            <th width="15%">市场价</th>
                            <th width="15%">优惠价</th>
                           
                        </tr>
                    </thead>
                    <tbody>

                        <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_good']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>

                        <?php if (!isset($_smarty_tpl->tpl_vars['k1'])) $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['v']->value['order_id']){?> 
                         <?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_good']->value[][]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value){
$_smarty_tpl->tpl_vars['v2']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['v2']->key;
?>
                        <tr>
                           
                            <td><a href=""></a></td>
                            <td></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v2']->value['goods_id'];?>
</td>
                            <td></td>
                            <td>已取消</td>
                          
                        </tr>
                        <?php } ?>
                        <?php }?>
                        <?php } ?>
                    </tbody>
            </table>
            <?php } ?>
        </div>
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->
<?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<!-- END of footer wrapper -->
</div>

</body>
<script type='text/javascript' src='<?php echo @JS_URL;?>
logging.js'></script>
</html><?php }} ?>