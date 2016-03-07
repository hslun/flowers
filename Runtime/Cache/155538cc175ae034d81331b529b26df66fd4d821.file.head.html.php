<?php /* Smarty version Smarty-3.1.6, created on 2015-08-03 15:16:51
         compiled from "D:/PHP/amp/project/shop/Admin/View\Index\head.html" */ ?>
<?php /*%%SmartyHeaderCode:2604855bf1563ea2ce1-88988512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '155538cc175ae034d81331b529b26df66fd4d821' => 
    array (
      0 => 'D:/PHP/amp/project/shop/Admin/View\\Index\\head.html',
      1 => 1434197195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2604855bf1563ea2ce1-88988512',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55bf1564054b9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf1564054b9')) {function content_55bf1564054b9($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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