<?php /* Smarty version Smarty-3.1.6, created on 2015-06-30 13:29:16
         compiled from "D:/PHP/amp/project/shop/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:210435592230768ef93-55221833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5fa249f19a3676f254c1a45399072292678a37f' => 
    array (
      0 => 'D:/PHP/amp/project/shop/Home/View\\Index\\index.html',
      1 => 1435642149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210435592230768ef93-55221833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_559223077522b',
  'variables' => 
  array (
    'goods_info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559223077522b')) {function content_559223077522b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
function tishi(){
	alert('请先登录');
}
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
<style text/css>

  #online{
  color: red;
  font-size: 15px;
  width: 30px;
  height: 120px;
  background-color: rgb(45,125,33);
  position: fixed;
  right: 5px;
  top: 50%;
  text-align: center;
  font-weight: bold;
  line-height: 25px;
  padding: 6px 0;
}
</style>
<link rel="stylesheet" href="<?php echo @CSS_URL;?>
slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="<?php echo @JS_URL;?>
slimbox2.js"></script> 


</head>

<body>


<div id="templatemo_wrapper_h">
<?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <!-- END of header wrapper -->
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
    <?php echo $_smarty_tpl->getSubTemplate ("../left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="copyrights"></div>
    <div id="content" class="right">
        <h2>Welcome to NO.5の花店</h2>
       
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
       
        <div class="product_box">
            <a href="<?php echo @__MODULE__;?>
/goods/index/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="<?php echo @__ROOT__;?>
<?php echo ltrim($_smarty_tpl->tpl_vars['v']->value['goods_small_img'],'.');?>
" alt="floral set 1" /></a>
            <h3><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</h3>
            <p class="product_price"><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_price'];?>
</p>
         
        </div> 
            
       <?php } ?>
        <div class="cleaner h20"></div>
        <div class="blank_box">
             <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

        </div>
        <div class="cleaner h20"></div>
        
        <div class="blank_box">
            <a href="#"><img src="<?php echo @IMG_URL;?>
free_shipping.jpg" alt="Free Shipping" /></a>
        </div>  
        <div><br><a href="<?php echo @__MODULE__;?>
/Leavewords/show"><img src="<?php echo @IMG_URL;?>
abc.png" alt="Free Shipping" ></a></div>  
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