<?php /* Smarty version Smarty-3.1.6, created on 2015-08-03 15:16:53
         compiled from "D:/PHP/amp/project/shop/Admin/View\Index\right.html" */ ?>
<?php /*%%SmartyHeaderCode:3114555bf15651ce423-43520106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd533da229981e206c22c9902bafbc20d6def4b6c' => 
    array (
      0 => 'D:/PHP/amp/project/shop/Admin/View\\Index\\right.html',
      1 => 1433074671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3114555bf15651ce423-43520106',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55bf156546173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf156546173')) {function content_55bf156546173($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\PHP\\amp\\project\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" align=center border=0>
            <tr height=28>
                <td background=<?php echo @ADMIN_IMG_URL;?>
title_bg1.jpg>当前位置: </td></tr>
            <tr>
                <td bgcolor=#b1ceef height=1></td></tr>
            <tr height=20>
                <td background=<?php echo @ADMIN_IMG_URL;?>
shadow_bg.jpg></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="90%" align=center border=0>
            <tr height=100>
                <td align=middle width=100><img height=100 src="<?php echo @ADMIN_IMG_URL;?>
admin_p.gif" 
                                                width=90></td>
                <td width=60>&nbsp;</td>
                <td>
                    <table height=100 cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td>当前时间：<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %T");?>
</td></tr>
                        <tr>
                            <td style="font-weight: bold; font-size: 16px"><?php echo $_SESSION['mg_name'];?>
</td></tr>
                        <tr>
                            <td>欢迎进入网站管理中心！</td></tr></table></td></tr>
            <tr>
                <td colspan=3 height=10></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="95%" align=center border=0>
            <tr height=20>
                <td></td></tr>
            <tr height=22>
                <td style="padding-left: 20px; font-weight: bold; color: #ffffff" 
                    align=middle background=<?php echo @ADMIN_IMG_URL;?>
title_bg2.jpg>您的相关信息</td></tr>
            <tr bgcolor=#ecf4fc height=12>
                <td></td></tr>
            <tr height=20>
                <td></td></tr></table>
        <table cellspacing=0 cellpadding=2 width="95%" align=center border=0>
            <tr>
                <td align=right width=100>登陆帐号：</td>
                <td style="color: #880000"><?php echo $_SESSION['mg_name'];?>
</td></tr>
            <tr>
                <td align=right>真实姓名：</td>
                <td style="color: #880000">admin</td></tr>
            <tr>
                <td align=right>注册时间：</td>
                <td style="color: #880000"><?php echo smarty_modifier_date_format($_SESSION['mg_time'],"%Y-%m-%d %T");?>
</td></tr>
            <tr>
                <td align=right>登陆次数：</td>
                <td style="color: #880000">58</td></tr>
            <tr>
                <td align=right>上线时间：</td>
                <td style="color: #880000">2008-12-27 17:02:54</td></tr>
            <tr>
                <td align=right>ip地址：</td>
                <td style="color: #880000">222.240.172.117</td></tr>
            <tr>
                <td align=right>身份过期：</td>
                <td style="color: #880000">30 分钟</td></tr>
           
        </table>
    </body>
</html><?php }} ?>