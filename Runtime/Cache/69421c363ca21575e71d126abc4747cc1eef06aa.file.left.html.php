<?php /* Smarty version Smarty-3.1.6, created on 2015-06-30 13:03:03
         compiled from "D:\PHP\amp\project\shop\Home\View\left.html" */ ?>
<?php /*%%SmartyHeaderCode:31593559223078b4024-87307801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69421c363ca21575e71d126abc4747cc1eef06aa' => 
    array (
      0 => 'D:\\PHP\\amp\\project\\shop\\Home\\View\\left.html',
      1 => 1434349763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31593559223078b4024-87307801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cats' => 0,
    'v' => 0,
    'v1' => 0,
    'goods_info1' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5592230791bdb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5592230791bdb')) {function content_5592230791bdb($_smarty_tpl) {?><div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>鲜花导购</h3>   
            <div class="content"> 
                <ul class="sidebar_list">
                        <!-- 单个菜单项 -->
                       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                       
                        <li >
                            <div class="yjfl"><a>按<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
选花</a></div>
                            <div class="ejfl">
                                <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
                                <span><a  href="<?php echo @__MODULE__;?>
/list/index/category_id/<?php echo $_smarty_tpl->tpl_vars['v1']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value['cat_name'];?>
</a></span>&nbsp;&nbsp;|                                                         
                               <?php } ?>     
                            </div>
                        </li>
                    
                        <!-- 单个菜单项 End -->
                        <?php } ?>         
                       
                    </ul>
                <!-- <ul class="sidebar_list">
                	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <li><a href="<?php echo @__MODULE__;?>
/List/index/category_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a></li>
                   
                    <?php } ?>
                </ul> -->
            </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span>
            <h3>本周推荐花卉</h3> 
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_info1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['k']->value<1){?>  
            <div class="content special"> 
                <img src="<?php echo @__ROOT__;?>
<?php echo ltrim($_smarty_tpl->tpl_vars['v']->value['goods_small_img'],'.');?>
" width="220" alt="Flowers" />
                <a href="<?php echo @__MODULE__;?>
/goods/index/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a>
                <p>
                	Price:
                    <span class="price normal_price"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</span>&nbsp;&nbsp;
                    <span class="price special_price"><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_price'];?>
</span>
                </p>
            </div>
            <?php }?>         
       <?php } ?>
        </div>
    </div><?php }} ?>