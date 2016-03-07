<?php /* Smarty version Smarty-3.1.6, created on 2015-06-18 16:41:14
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Home/View\Orders\showOrder.html" */ ?>
<?php /*%%SmartyHeaderCode:1785582609195b680-94797715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6128d438d3a7df56d91573094cdeefa014a12d5' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Home/View\\Orders\\showOrder.html',
      1 => 1434616872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1785582609195b680-94797715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_558260919fe4c',
  'variables' => 
  array (
    'order_dz' => 0,
    'v' => 0,
    'orders' => 0,
    'v1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558260919fe4c')) {function content_558260919fe4c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<style type="text/css">
    table th{ text-align: center;}
    table tr{ text-align: center;}
</style>
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
         <hr style="width:670px"></hr> 
           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_dz']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <table width="680" border="0" cellpadding="5" cellspacing="0">
             <tr><th >收货人:</th> 
             <th ><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_user'];?>
</th> 
            <th >电话:</th> 
            <th ><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_user_tel'];?>
</th> 
            <th >下单时间:</th> 
            <th ><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['v']->value['order_time']);?>
</th> 
            
            <th >邮寄地址:</th> 
            <th ><?php echo $_smarty_tpl->tpl_vars['v']->value['province'];?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['city'];?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['piecearea'];?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['order_addr'];?>
</th> 
        </tr>
    </table>
             
          
           <table width="680" border="0" cellpadding="5" cellspacing="0">
                   

                        <tr>
                            
                        <th width="58" align="left">商品图片</th> 
                        <th width="88" align="left">商品名字</th> 
                        <th width="90" align="center">购买数量</th> 
                        <th width="80" align="right">市场价</th> 
                        <th width="80" align="right">优惠价</th> 
                           
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
          
             <div align="right" style="font-weight:bold;font-size:14px;">总价:<?php echo $_smarty_tpl->tpl_vars['v']->value['total'];?>
元</div> 
             <hr style="width:670px"></hr> 
         
           <?php } ?> 
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