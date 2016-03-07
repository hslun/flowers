<?php /* Smarty version Smarty-3.1.6, created on 2015-06-28 20:08:52
         compiled from "E:\www\PHP1\ljl\2015-05-28\shop\Home\View\head1.html" */ ?>
<?php /*%%SmartyHeaderCode:53765571815795a870-98208889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e6e653d82ad65b4648a01416c058c8aa9d125fc' => 
    array (
      0 => 'E:\\www\\PHP1\\ljl\\2015-05-28\\shop\\Home\\View\\head1.html',
      1 => 1435493304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53765571815795a870-98208889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55718157977ec',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55718157977ec')) {function content_55718157977ec($_smarty_tpl) {?><div id="templatemo_header_wsp">
     <div class="shop_hd_topNav">
            <div class="shop_hd_topNav_all">
    <div class="shop_hd_topNav_all_left">
                    <div>您好，欢迎来到<b>NO.5の花店</b>
                    <?php if (isset($_SESSION['username'])){?>
                        用户名:  <?php echo $_SESSION['username'];?>

                        [<a href="<?php echo @__MODULE__;?>
/user/logout">注销</a>]
                    <?php }else{ ?>
                        [<a href="<?php echo @__MODULE__;?>
/user/login">登录</a>][<a href="<?php echo @__MODULE__;?>
/user/register">注册</a>]<?php }?></div>
                </div>
                <div class="shop_hd_topNav_all_right">
                <div class="topNav_quick_menu">

                            <div class="topNav_menu">
                                <a href="<?php echo @__MODULE__;?>
/Orders/showOrder" class="topNavHover">已买到的商品<i></i></a>
                              
                            </div>

                           

                            <div class="topNav_menu">
                                <a href="<?php echo @__MODULE__;?>
/buy/cartlist" class="topNavHover">购物车<i></i></a>
                               
                            </div>
  
                          

                </div></div>
                <!-- Header TopNav Right End -->
            </div>
                    </div>
    <div id="templatemo_header" class="header_subpage">
        <div id="site_title"><a href="" title=""></a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="<?php echo @__MODULE__;?>
" >主页</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/19" >情人节</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/21">生日鲜花</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/32" >精致花篮</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/34" >玫瑰</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/35" >康乃馨</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/26" >家居鲜花</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/28" >商务礼仪</a></li>
            </ul>
            <div id="templatemo_search">
                <form action="<?php echo @__MODULE__;?>
/goods/search/" method="get">
                    <input type="text" value="Site Search" name="keyword" id="keyword" title="keyword" 
                            onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                    <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                </form>
            </div>
            <br style="clear: left" />
        </div> 
        
        <!-- end of templatemo_menu -->
        
    </div> <!-- END of header -->
</div> <?php }} ?>