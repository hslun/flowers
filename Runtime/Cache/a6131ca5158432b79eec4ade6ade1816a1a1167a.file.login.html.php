<?php /* Smarty version Smarty-3.1.6, created on 2015-06-30 13:19:13
         compiled from "D:/PHP/amp/project/shop/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1786559226d19fb2d7-17454596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6131ca5158432b79eec4ade6ade1816a1a1167a' => 
    array (
      0 => 'D:/PHP/amp/project/shop/Home/View\\User\\login.html',
      1 => 1434539654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1786559226d19fb2d7-17454596',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_559226d1b0078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559226d1b0078')) {function content_559226d1b0078($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        
        <div class="login-form fr">
            <div class="form-hd">
                <h3>用户登录</h3>
            </div>
            <div class="form-bd">
                <form action="<?php echo @__SELF__;?>
" method="POST">
                    <table>
                    <tr>
                        <td>用户名:</td>
                        <td><input type="text" name="username" class="text" /></td>
                    </tr>
                    <tr>
                        <td>密&nbsp;&nbsp;&nbsp;&nbsp;码:</td>
                        <td><input type="password" name="password" class="text"/></td>
                    </tr>
                    <tr>
                        <td>验证码:</td>
                <td><input class="TxtValidateCodeCssClass" id="captcha" name="captcha" type="text">
                                            </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><img src="<?php echo @__CONTROLLER__;?>
/verifyImg" onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg/'+Math.random()" alt="" /></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="登  录" class="submit"/> </td>
                    </tr>
                     </table>
                </form>
                <dl>
                    <dt>&nbsp;</dt>
                    <dd> 还不是本站会员？立即 <a href="<?php echo @__CONTROLLER__;?>
/register" class="register">注册</a></dd>
                </dl>
               
            </div>
                
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