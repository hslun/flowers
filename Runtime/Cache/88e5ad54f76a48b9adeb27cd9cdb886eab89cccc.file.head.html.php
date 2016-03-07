<?php /* Smarty version Smarty-3.1.6, created on 2015-06-30 13:03:03
         compiled from "D:\PHP\amp\project\shop\Home\View\head.html" */ ?>
<?php /*%%SmartyHeaderCode:148325592230775dde2-32342493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e5ad54f76a48b9adeb27cd9cdb886eab89cccc' => 
    array (
      0 => 'D:\\PHP\\amp\\project\\shop\\Home\\View\\head.html',
      1 => 1435493328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148325592230775dde2-32342493',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_559223078a9ea',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559223078a9ea')) {function content_559223078a9ea($_smarty_tpl) {?><div id="templatemo_header_wh">
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
/user/register">注册</a>]
                    <?php }?>
                    </div>
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
	<div id="templatemo_header" class="header_home">
    	<div id="site_title"><a href="/" title=""></a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="<?php echo @__MODULE__;?>
" class="selected">主页</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/19" >情人节</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/21" >生日鲜花</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/32" >精致花篮</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/34" >玫瑰</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/35">康乃馨</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/26" >家居鲜花</a></li>
                <li><a href="<?php echo @__MODULE__;?>
/list/index/category_id/28">商务礼仪</a></li>
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
        <a href="#" title="visit "  class="site_repeat" target="_blank"><img src="<?php echo @IMG_URL;?>
top_repeat.png"  alt="visit " /></a><!-- end of templatemo_menu -->
     
        <div class="slider-wrapper theme-orman index-yc">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <img src="<?php echo @IMG_URL;?>
portfolio/01.jpg" alt="slider image 1" />
                <a href="http://www.mycodes.net/" >
                	<img src="<?php echo @IMG_URL;?>
portfolio/02.jpg" alt="slider image 2" title="This is an example of a caption" />
                </a>
                <img src="<?php echo @IMG_URL;?>
portfolio/03.jpg" alt="slider image 3" />
                <img src="<?php echo @IMG_URL;?>
portfolio/04.jpg" alt="slider image 4" title="#htmlcaption" />
                <img src="<?php echo @IMG_URL;?>
portfolio/05.jpg" alt="slider image 5" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>Example</strong> caption with <a href="#" >a credit link</a> for <em>this slider</em>.
            </div>
        </div> 
		<script type="text/javascript" src="<?php echo @JS_URL;?>
jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="<?php echo @JS_URL;?>
jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
				controlNav:false
			});
        });
        </script>
      
    </div> <!-- END of header -->
</div><?php }} ?>