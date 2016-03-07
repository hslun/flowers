<?php /* Smarty version Smarty-3.1.6, created on 2015-06-28 19:37:59
         compiled from "E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\Order\add.html" */ ?>
<?php /*%%SmartyHeaderCode:7587558a9f4c839d04-33336712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6361dd62d32ba9f4bc1b2500d1588bc2dcfb9d7' => 
    array (
      0 => 'E:/www/PHP1/ljl/2015-05-28/shop/Admin/View\\Order\\add.html',
      1 => 1435491433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7587558a9f4c839d04-33336712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_558a9f4c90a37',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558a9f4c90a37')) {function content_558a9f4c90a37($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>订单列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo @ADMIN_CSS_URL;?>
jquery.min.js"></script>
    </head>
    <body>
        <style>
            .tr_color{
                background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：订单管理-》订单列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回订单详情】</a>
                </span>
            </span>
        </div>
        <div></div>
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
        <div style="font-size: 13px; margin: 10px 5px;">
            <form action="<?php echo @__SELF__;?>
" method="post">
            <table class="table_a" border="1" width="100%">
              <tr style="font-weight: bold;">
                       
                        <td width="12%">收货人姓名</td>
                        <td width="13%">收货人电话</td>
                        <td width="13%">省份</td>
                        <td width="13%">城市</td>
                        <td width="13%">地区</td>
                        <td width="17%">详细地址</td>
                        <td width="12%">会员ID</td>
                      
                    </tr>
                    <script type="text/javascript">
    function checkuser(){
        var nm=document.getElementById('user_id').value;
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange=function(){
            if (xhr.readyState==4 && xhr.status==200) {
            
                document.getElementById('user_result').innerHTML=xhr.responseText;
            }
        }
        xhr.open('get','/index.php/Admin/order/checkuser/user_id/'+nm);
        xhr.send(null);
    };
    </script>  
                    <tr id="shrxx">
                       
                        <td><input type="text" name="goods_user"/></td>
                        <td><input type="text" name="goods_user_tel"/></td>



                                
                        <td><select name="" id="province">
                                    <option value="0">请选择</option>
                                    
                                </select></td>
                        <td>
                                <select name="" id="city">
                                    <option value="0">请选择</option>
                                   
                                </select></td>
                        <td><select name="" id="Piecearea">
                                    <option value="0">请选择</option>
                                    
                                </select></td>
                        <td><input type="text" name="order_addr"/></td>
                        <td><input type="text" name="user_id" id='user_id'  onblur="checkuser()"/>
                        <span style='color:red;' id='user_result'></span>
                        </td>
                      
                    </tr>
                    
                
            </table>
             
    <script type="text/javascript">
             function tj(){
                $('#table_b').append("<tr><td><input type='text' name='goods_id[]'/></td><td><input type='text' name='goods_num[]'/></td><td><a href='#' onclick='$(this).parent().parent().remove()'><input type='button' value='移除' /></a></td></tr>");
             };
             
                 </script>  
             <table width="700" class="table_a" id="table_b" border="1" >


                        <tr>
                            
                       
                        <th >商品ID</th> 
                        <th >购买数量</th> 
                        <th ><input type="button" value="添加" onclick="tj()"/></th> 
                       
                           
                        </tr>
                   
                        <tr>
                           
                            
                            <td><input type="text" name="goods_id[]" />
                             <span style="color:red;" id="goods_result"></span>
                            </td>
                            <td><input type="text" name="goods_num[]"/></td>
                            <td></td>
                           
                        </tr>
                        
            </table>
            <input type="submit" value="提交"/>
        </form>
        </div>
    </body>
</html><?php }} ?>