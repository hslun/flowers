<?php /* Smarty version Smarty-3.1.6, created on 2015-06-30 13:29:17
         compiled from "D:\PHP\amp\project\shop\Home\View\foot.html" */ ?>
<?php /*%%SmartyHeaderCode:1483055922307929229-88905069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2faab1adb8d9ba1278f4a30f720b0059bb651415' => 
    array (
      0 => 'D:\\PHP\\amp\\project\\shop\\Home\\View\\foot.html',
      1 => 1435642153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1483055922307929229-88905069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5592230794b07',
  'variables' => 
  array (
    'user_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5592230794b07')) {function content_5592230794b07($_smarty_tpl) {?><div id="templatemo_footer_wrapper">
<div id="templatemo_footer">
	
		<div class="footer_right">
		<?php if ($_smarty_tpl->tpl_vars['user_id']->value){?>
		<a href="http://www.qq.com/shop/Talk/index.html" target="_blank" id="online">在线咨询</a>
		<?php }else{ ?>
		<a href="<?php echo @__MODULE__;?>
/user/login" id="online" onclick="tishi()">在线咨询</a>
		<?php }?>
		<p><a href="<?php echo @__MODULE__;?>
">主页</a> | <a href="<?php echo @__MODULE__;?>
/list/index/category_id/19" >情人节</a> | <a href="<?php echo @__MODULE__;?>
/list/index/category_id/32" >精致花篮</a> | <a href="<?php echo @__MODULE__;?>
/list/index/category_id/34" >玫瑰</a> | <a href="<?php echo @__MODULE__;?>
/list/index/category_id/35" >康乃馨</a> | <a href="<?php echo @__MODULE__;?>
/list/index/category_id/26" >家居鲜花</a> | <a href="<?php echo @__MODULE__;?>
/list/index/category_id/28" >商务礼仪</a></p>
        <p>Copyright (c) 2084 <a href="#">Company Name</a></p>
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <?php }} ?>