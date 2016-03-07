<?php /* Smarty version Smarty-3.1.6, created on 2015-06-25 19:57:07
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Home/View\Buy\addresslist.html" */ ?>
<?php /*%%SmartyHeaderCode:23145557eb88816c5a4-70738477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4029f19e945f4e787408e25b378a788d4f43b7d' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Home/View\\Buy\\addresslist.html',
      1 => 1435233424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23145557eb88816c5a4-70738477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_557eb888265ea',
  'variables' => 
  array (
    'data' => 0,
    'k' => 0,
    'v' => 0,
    'tp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557eb888265ea')) {function content_557eb888265ea($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
cart2.js"></script>


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

</head>

<body>

<div id="templatemo_wrapper_sp">
<?php echo $_smarty_tpl->getSubTemplate ("../head1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <!-- END of header wrapper -->
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
     <?php echo $_smarty_tpl->getSubTemplate ("../left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
        var xmldom = null;
     $(function(){
            $.ajax({
                url:'<?php echo @JS_URL;?>
/ChinaArea.xml',
                type:'get',
                dataType:'xml',
                success:function(msg){
                    xmldom = msg;
                    
                //遍历省份  并获得省份信息
                $(msg).find('province').each(function(i,v){
                    var nm =$(this).attr('province');//获得省份
                    var id=$(this).attr('provinceID');//获得省份ID
                    $('#province').append("<option value='"+id+"'>"+nm+"</option>");
                });
            }
        });
            //页面加载完毕给省份下拉设置onchange时间
            $('#province').bind('change',function(){
                //获取省份
                var pid=$("#province option:selected").val();
                var sf=$("#province option:selected").text();
                 $("input").remove(".sf");
                $('#shrxx').append("<input type='hidden' class='sf' name='province' value='"+sf+"' />");
                pid=pid.substr(0,2);
                
                //城市id和省id前2位一样
                 $('#city').empty(); //清空下拉列表
                  $('#city').append("<option value='0'>请选择</option>");
                $(xmldom).find("[CityID^="+pid+"]").each(function(){
                    var nm = $(this).attr('City');//城市名称
                    var id = $(this).attr('CityID');
                   
                    $('#city').append("<option value='"+id+"'>"+nm+"</option>");
                });
            });
             //页面加载完毕给市份下拉设置onchange时间
            $('#city').bind('change',function(){
                //获取省份
                var pid=$("#city option:selected").val();
                 var cs=$("#city option:selected").text();
                 $("input").remove(".cs");
                $('#shrxx').append("<input type='hidden' name='city' class='cs'  value='"+cs+"' />");
                pid=pid.substr(0,4);
              
                //console.log($(xmldom).find("[CityID^="+pid+"]"));
                //城市id和区id前2位一样
                 $('#Piecearea').empty(); //清空下拉列表
                 $('#Piecearea').append("<option value='0'>请选择</option>");
                $(xmldom).find("[PieceareaID^="+pid+"]").each(function(){
                    var nm = $(this).attr('Piecearea');//城市名称
                    var id = $(this).attr('PieceareaID');
                    
                    $('#Piecearea').append("<option value='"+id+"'>"+nm+"</option>");
                });
            });
            //
              $('#Piecearea').bind('change',function(){
                //获取地区
                var dq=$("#Piecearea option:selected").text();
                 $("input").remove(".dq");
                $('#shrxx').append("<input type='hidden' class='dq' name='piecearea' value='"+dq+"' />");
            });
    });

</script>
    <div id="content" class="right">
    	<h2>填写并核对订单信息</h2>
        <form action="<?php echo @__MODULE__;?>
/Orders/setOrder" method="post" name="address_form">
        <div class="fillin w990 bc mt15">
        

        <div class="fillin_bd">
            <!-- 收货人信息  start-->
            <div class="address">
                <h3>收货人信息</h3>
                

                <div class="address_select" id="shrxx">
                      
                    
                        <ul>
                            <li>
                                <label for=""><span>*</span>收货人：</label>
                                <input type="text" name="goods_user" class="txt" />
                            </li>
                            <li>
                                <label for=""><span>*</span>地区：</label>
                                <select name="" id="province">
                                    <option value="0">请选择</option>
                                    
                                </select>

                                <select name="" id="city">
                                    <option value="0">请选择</option>
                                   
                                </select>

                                <select name="" id="Piecearea">
                                    <option value="0">请选择</option>
                                    
                                </select>
                            </li>
                            <li>
                                <label for=""><span>*</span>地址：</label>
                                <input type="text" name="order_addr" class="txt address"  />
                            </li>
                            <li>
                                <label for=""><span>*</span>手机号：</label>
                                <input type="text" name="goods_user_tel" class="txt" />
                            </li>
                        </ul>
                   
                   
                </div>
            </div>
            <!-- 收货人信息  end-->

       


            

        
        </div>

      
    </div>
		<table width="700" border="0" cellpadding="5" cellspacing="0">
          	<tr bgcolor="#395015">
                <th width="58" align="left">商品图片</th> 
                <th width="88" align="left">商品名字</th> 
                <th width="90" align="center">购买数量</th> 
                <th width="80" align="right">市场价</th> 
                <th width="80" align="right">优惠价</th> 
                <th width="80" align="right">总价</th> 
                <th width="64"> </th>
          	</tr>
            
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <input type='hidden'  name='goods_id[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]' value='<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
' />
            <tr bgcolor="#41581B">
                <td><img src="<?php echo ltrim($_smarty_tpl->tpl_vars['v']->value['goods_small_img'],'.');?>
" alt="flower" width="30"/></td> 
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</td> 
                <td align="center">
               <?php echo $_smarty_tpl->tpl_vars['v']->value['goods_num'];?>

                    
                </td>
                <input type='hidden'  name='goods_num[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]' value='<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_num'];?>
' />
                <td align="right"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</td> 
                <td align="right" class="col3"><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_price'];?>
</td> 
                <td align="right" class="col5"><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_price']*$_smarty_tpl->tpl_vars['v']->value['goods_num'];?>
</td>
               
            </tr>
            
        <?php } ?>
<tr bgcolor="#41581B">
                <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td align="right"><h4>总价格:</h4></td>
                <td align="right" id="total"><h4><?php echo $_smarty_tpl->tpl_vars['tp']->value;?>
&nbsp;&nbsp;RMB</h4></td>
                <td> </td>
            </tr>
            <input type='hidden'  name='total' value='<?php echo $_smarty_tpl->tpl_vars['tp']->value;?>
' />
        </table>
		<div class="cleaner h20"></div>
        <div class="right">
         <input type="submit" class="button" name="" value="提交订单"/>
            </div>
        <div class="cleaner h20"></div>
        <div class="blank_box">
        	<a href="#"><img src="<?php echo @IMG_URL;?>
free_shipping.jpg" alt="Free Shipping" /></a>
        </div> 
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