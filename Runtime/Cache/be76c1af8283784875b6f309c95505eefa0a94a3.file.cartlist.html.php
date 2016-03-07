<?php /* Smarty version Smarty-3.1.6, created on 2015-06-30 13:19:23
         compiled from "D:/PHP/amp/project/shop/Home/View\Buy\cartlist.html" */ ?>
<?php /*%%SmartyHeaderCode:27496559226db715146-53299769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be76c1af8283784875b6f309c95505eefa0a94a3' => 
    array (
      0 => 'D:/PHP/amp/project/shop/Home/View\\Buy\\cartlist.html',
      1 => 1435544246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27496559226db715146-53299769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'v' => 0,
    'tp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_559226db7fc70',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559226db7fc70')) {function content_559226db7fc70($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
cart1.js"></script>

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
    	<h2>购物车</h2>
		<table width="700" border="0" cellpadding="5" cellspacing="0">
          	<tr bgcolor="#395015">
                <th width="58" align="left">商品图片</th> 
                <th width="88" align="left">商品名字</th> 
                <th width="90" align="center">购买数量</th> 
                <th width="80" align="right">市场价</th> 
                <th width="80" align="right">优惠价</th> 
                <th width="80" align="right">总价</th> 
                <th width="64"> </th>
          	</tr>
            
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    
            <tr bgcolor="#41581B" goods_id="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">
                <td><img src="<?php echo ltrim($_smarty_tpl->tpl_vars['v']->value['goods_small_img'],'.');?>
" alt="flower" width="30"/></td> 
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</td> 
                <td align="center">
                <a href="javascript:;" class="reduce_num"></a>
                    <input name="amount" type="text" id="quantity1"  class="amount" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_num'];?>
" size="4" maxlength="3" /> 
                <a href="javascript:;" class="add_num" ></a>
                </td>
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</td> 
                <td align="right" class="col3"><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_price'];?>
</td> 
                <td align="right" class="col5"><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_price']*$_smarty_tpl->tpl_vars['v']->value['goods_num'];?>
</td>
                <td align="center"> <a href="<?php echo @__CONTROLLER__;?>
/delCart/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="<?php echo @IMG_URL;?>
remove.png" alt="remove" /><br /></a> </td>
            </tr>
            
        <?php } ?>
<tr bgcolor="#41581B">
                <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo @__MODULE__;?>
"><strong>继续购物 </strong></a> &nbsp;&nbsp;</td>
                <td align="right"><h4>总价格:</h4></td>
                <td align="right" id="total"><h4><?php echo $_smarty_tpl->tpl_vars['tp']->value;?>
&nbsp;&nbsp;RMB</h4></td>
                <td> </td>
            </tr>
        </table>
		<div class="cleaner h20"></div>
        <div class="right"><a href="<?php echo @__CONTROLLER__;?>
/addresslist" class="button">去结算</a></div>
        <div class="cleaner h20"></div>
        <div class="blank_box">
        	<a href="#"><img src="<?php echo @IMG_URL;?>
free_shipping.jpg" alt="Free Shipping" /></a>
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