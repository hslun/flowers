<?php /* Smarty version Smarty-3.1.6, created on 2015-06-13 20:06:38
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\Index\head.html" */ ?>
<?php /*%%SmartyHeaderCode:84545567bc3a64ef90-94666231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4eca7a900404b837b3e77b7f15a1e37dade6c107' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\Index\\head.html',
      1 => 1434197195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84545567bc3a64ef90-94666231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5567bc3a6b69a',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5567bc3a6b69a')) {function content_5567bc3a6b69a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" 
               style="background:#0F54B1" border=0>
            <tr height=56>
                <td width=260></td>
                <td style="font-weight: bold; color: #fff; padding-top: 20px" 
                    align=middle>当前用户：<?php echo $_SESSION['mg_name'];?>
 &nbsp;&nbsp; <a style="color: #fff" 
                                                        href="" 
                                                        target=main>修改口令</a> &nbsp;&nbsp; 
                        
                                                        <a style="color: #fff" 
                                                        onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
                                                        href="<?php echo @__MODULE__;?>
/admin/logout" target=_top>退出系统</a> 
                              &nbsp;&nbsp;     <a style="color: #fff"  href="/" target=_blank>前台首页</a> 
                </td>
                <td align=right width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>