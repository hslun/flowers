<?php /* Smarty version Smarty-3.1.6, created on 2015-08-03 15:17:51
         compiled from "D:/PHP/amp/project/shop/Admin/View\Goods\category.html" */ ?>
<?php /*%%SmartyHeaderCode:2166755bf159f07cdd0-28094423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afc766401a4a0b16ad25c020127202e1f07a0453' => 
    array (
      0 => 'D:/PHP/amp/project/shop/Admin/View\\Goods\\category.html',
      1 => 1434091066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2166755bf159f07cdd0-28094423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'k' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55bf159f2b5e0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf159f2b5e0')) {function content_55bf159f2b5e0($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>分类列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{
                background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：分类管理-》分类列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/catadd">【添加分类】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
         
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%" id="list-table">
                <tbody><tr style="font-weight: bold;">
                        
                        <th>分类名称</th>
                       
                        <th>是否显示</th>
                        
                        <th colspan="2" align="center">操作</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr align="center" class="<?php echo $_smarty_tpl->tpl_vars['v']->value['level'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['level'];?>
_<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
">
                       
                        <td>
                        <?php echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['v']->value['level']);?>

    <img src="<?php echo @ADMIN_IMG_URL;?>
menu_minus.gif" id="icon_<?php echo $_smarty_tpl->tpl_vars['v']->value['level'];?>
_<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
" width="9" height="9" border="0" style="margin-left:0em" onclick="rowClicked(this)">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</td>
                       
                        <td><?php if ($_smarty_tpl->tpl_vars['v']->value['is_show']==1){?>是
                            <?php }else{ ?>否
                        <?php }?>
                        </td>
                         
                        <td><a href="<?php echo @__CONTROLLER__;?>
/catupdate/cat_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
">修改</a></td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/catdel/cat_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" onclick="javascript:return confirm('您确认要删除这条记录吗?')">删除</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
<script>
    /**
 * 折叠分类列表
 */
var imgPlus = new Image();
imgPlus.src = "<?php echo @ADMIN_IMG_URL;?>
menu_plus.gif";

function rowClicked(obj)
{
  // 当前图像
  img = obj;
  // 取得上二级tr>td>img对象
  obj = obj.parentNode.parentNode;
  // 整个分类列表表格
  var tbl = document.getElementById("list-table");
  // 当前分类级别
  var lvl = parseInt(obj.className);
  // 是否找到元素
  var fnd = false;
  var sub_display = img.src.indexOf('menu_minus.gif') > 0 ? 'none' : 'table-row' ;
  // 遍历所有的分类
  for (i = 0; i < tbl.rows.length; i++)
  {
      var row = tbl.rows[i];
      if (row == obj)
      {
          // 找到当前行
          fnd = true;
          //document.getElementById('result').innerHTML += 'Find row at ' + i +"<br/>";
      }
      else
      {
          if (fnd == true)
          {
              var cur = parseInt(row.className);
              var icon = 'icon_' + row.id;
              if (cur > lvl)
              {
                  row.style.display = sub_display;
                  if (sub_display != 'none')
                  {
                      var iconimg = document.getElementById(icon);
                      iconimg.src = iconimg.src.replace('plus.gif', 'minus.gif');
                  }
              }
              else
              {
                  fnd = false;
                  break;
              }
          }
      }
  }

  for (i = 0; i < obj.cells[0].childNodes.length; i++)
  {
      var imgObj = obj.cells[0].childNodes[i];
      if (imgObj.tagName == "IMG" && imgObj.src != '<?php echo @ADMIN_IMG_URL;?>
menu_arrow.gif')
      {
          imgObj.src = (imgObj.src == imgPlus.src) ? '<?php echo @ADMIN_IMG_URL;?>
menu_minus.gif' : imgPlus.src;
      }
  }
}
</script>
    </body>
</html><?php }} ?>