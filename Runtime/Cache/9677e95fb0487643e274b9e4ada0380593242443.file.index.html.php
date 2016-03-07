<?php /* Smarty version Smarty-3.1.6, created on 2015-06-28 20:15:44
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Home/View\Goods\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2866155731b8abae134-58235977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9677e95fb0487643e274b9e4ada0380593242443' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Home/View\\Goods\\index.html',
      1 => 1435493734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2866155731b8abae134-58235977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55731b8ac4b67',
  'variables' => 
  array (
    'goods_info' => 0,
    'comment_info' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55731b8ac4b67')) {function content_55731b8ac4b67($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<script type="text/javascript" src="<?php echo @JS_URL;?>
jquery-1-4-2.min.js"></script> 
<link rel="stylesheet" href="<?php echo @CSS_URL;?>
slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="<?php echo @JS_URL;?>
slimbox2.js"></script> 

</head>

<body>

<div id="templatemo_wrapper_sp">
<?php echo $_smarty_tpl->getSubTemplate ("../head1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <!-- END of header wrapper -->
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
	 <?php echo $_smarty_tpl->getSubTemplate ("../left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <div id="content" class="right">
        <h2><?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_name'];?>
</h2>
        <div class="content_half left">
            <a  rel="lightbox" href="<?php echo @__ROOT__;?>
<?php echo ltrim($_smarty_tpl->tpl_vars['goods_info']->value['goods_big_img'],'.');?>
"><img src="<?php echo @__ROOT__;?>
<?php echo ltrim($_smarty_tpl->tpl_vars['goods_info']->value['goods_small_img'],'.');?>
" alt="" /></a>
        </div>
            <div class="content_half right">
                <form action="<?php echo @__MODULE__;?>
/Buy/addCart" method="POST">
                    <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_id'];?>
" />
                <table>
                    <tr>
                        <td width="130">市场价格:</td>
                        <td width="84">$<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_price'];?>
</td>
                    </tr>
                    <tr>
                        <td>本店价格:</td>
                        <td><strong>$<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['shop_price'];?>
</strong></td>
                    </tr>
                    <tr><td>数量</td><td><input type="text" name="goods_num" value="1" size="6" maxlength="2" /></td></tr>
                </table>
                <div class="cleaner h20"></div>
                <input type="submit" value="加入购物车" class="button" />
                </form>
            </div>
            <div class="cleaner h40"></div>
            
            <h4>商品描述</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_introduce'];?>
</p>
            <div class="cleaner h40"></div>
             <h4>商品评论</h4>
             <?php if (!empty($_smarty_tpl->tpl_vars['comment_info']->value)){?>
             <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
            <p><b><?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
</b> 于 <?php echo $_smarty_tpl->tpl_vars['comment']->value['insert_time'];?>
 说：<br><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</p>
             <?php } ?>
             <?php }else{ ?>
             <p>暂无评论</p>
             <?php }?>
            <div class="cleaner h40"></div>
            <h4>发布评论</h4>
             <form action='<?php echo @__MODULE__;?>
/comment/insert' method='post'>
             <input type='hidden' name='goods_id' value='<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_id'];?>
'>
            <p><textarea name='content' style='width:500px; height:100px;'></textarea></p>
            <p><input type='submit' value='发布评论'></p>
            </form>
            <div class="cleaner h40"></div>
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