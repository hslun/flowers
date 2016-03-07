<?php /* Smarty version Smarty-3.1.6, created on 2015-06-14 20:25:44
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Home/View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:1555755687ef33689b2-06985586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4deec41195b1d8b332fc8d16c614c62dae3ba5c0' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Home/View\\User\\register.html',
      1 => 1434284742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1555755687ef33689b2-06985586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55687ef34b1c0',
  'variables' => 
  array (
    'errorinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55687ef34b1c0')) {function content_55687ef34b1c0($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <h2>注册</h2>
        <form id="yw0" action="<?php echo @__SELF__;?>
" method="post">            
    <script type="text/javascript">
    function checkname(){
        var nm=document.getElementById('User_username').value;
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange=function(){
            if (xhr.readyState==4 && xhr.status==200) {
            
                document.getElementById('name_result').innerHTML=xhr.responseText;
            }
        }
        xhr.open('get','/index.php/Home/user/checkNm/name/'+nm);
        xhr.send(null);
    }
    </script>
            <table cellpadding="5" cellspacing="3" style="text-align:left; width:100%; border:0;">
                                <tbody>
                                    <tr>
                                        <td style="width:13%; text-align: right;"><label for="username" class="required">用户名 
                                        <span class="required">*</span></label>
                                        </td>

                                        <td style="width:87%;">
                                            <input class="inputBg" size="25" name="username" id="User_username" type="text" value="" onblur="checkname()" />                  
                                            <span style="color:red;" id="name_result"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['username'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                            <label for="User_password" class="required">密码 <span class="required">*</span></label>

                                        </td>

                                        <td>
                                            <input class="inputBg" size="25" name="password" id="User_password" type="password" value="" />  
                                            <span style="color:red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['password'])===null||$tmp==='' ? '' : $tmp);?>
</span>       
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><label for="User_password2">密码确认</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="password2" id="User_password2" type="password" />
                                            <span style="color:red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['password2'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td align="right"><label for="User_user_email">邮箱</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_email" id="User_user_email" type="text" value="" />  
                                            <span style="color:red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['user_email'])===null||$tmp==='' ? '' : $tmp);?>
</span>  
                                        </td>
                                    </tr>
                                    <tr>

                                        <td align="right"><label for="User_user_qq">qq号码</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_qq" id="User_user_qq" type="text" value="" />
                                            <span style="color:red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['errorinfo']->value['user_qq'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><label for="User_user_tel">手机</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="user_tel" id="User_user_tel" type="text" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--radioButtonList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><label for="User_user_sex">性别</label></td>
                                        <td>
                                            <input id="ytUser_user_sex" type="hidden" value="" name="user_sex" />
                                            <span id="User_user_sex">
                                            <input id="User_user_sex_0" value="1" checked="checked" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_0">男</label>&nbsp;
                                            <input id="User_user_sex_1" value="2" type="radio" name="user_sex" /> 
                                            <label for="User_user_sex_1">女</label>&nbsp;
                                                                          
                                        </td>
                                    </tr>
                                  
                                    
                                    
                                    <tr>
                                        <td>&nbsp;</td>

                                        <td align="left">
                                            <input name="Submit" value="注册" class="us_Submit_reg" type="submit" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>

                        </form> 
            
            
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