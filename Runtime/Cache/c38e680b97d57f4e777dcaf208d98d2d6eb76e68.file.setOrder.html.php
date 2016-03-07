<?php /* Smarty version Smarty-3.1.6, created on 2015-06-18 00:36:30
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Home/View\Order\setOrder.html" */ ?>
<?php /*%%SmartyHeaderCode:36855819cb4ad8684-38410776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c38e680b97d57f4e777dcaf208d98d2d6eb76e68' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Home/View\\Order\\setOrder.html',
      1 => 1434558942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36855819cb4ad8684-38410776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55819cb4b6900',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55819cb4b6900')) {function content_55819cb4b6900($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h2>订单提交成功</h2>
		   <div class="success_bd">
            <p><span></span>订单提交成功，我们将及时为您处理</p>
            
            <p class="message">完成支付后，你可以 <a href="<?php echo @__CONTROLLER__;?>
/showOrder">查看订单状态</a>  <a href="/" >继续购物</a> </p>
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