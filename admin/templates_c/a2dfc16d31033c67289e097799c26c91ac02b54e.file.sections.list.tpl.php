<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:14:07
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/modules/sections.list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:517720419531463ffae9056-91109483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2dfc16d31033c67289e097799c26c91ac02b54e' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/modules/sections.list.tpl',
      1 => 1393844282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '517720419531463ffae9056-91109483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
    'sections' => 0,
    'sl_i' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_531463ffc102f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531463ffc102f')) {function content_531463ffc102f($_smarty_tpl) {?><div class="sections_list_tools list_menu_buttons">
    <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['main']->value->new_item_link;?>
" tabindex="1">
        <span>
            <img class="button_icon icon_action icon_add_instance" src="/admin/img/frames/e.gif" />
            <b><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('sections','create_new_section');?>
</b>
        </span>
    </a>
    <div class="cl"></div>
</div>

<div class="sections_list">
    <?php $_smarty_tpl->tpl_vars["sl_i"] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sections']->value->getList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sections_list"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sections_list"]['iteration']++;
?>
        <?php $_smarty_tpl->tpl_vars['sl_i'] = new Smarty_variable($_smarty_tpl->tpl_vars['sl_i']->value+1, null, 0);?>
        <div class="item<?php if ($_smarty_tpl->tpl_vars['sl_i']->value==3){?> r<?php }elseif($_smarty_tpl->tpl_vars['sl_i']->value==2){?> c<?php }else{ ?> l<?php }?>">
            <div class="colorer" style="background-color: #<?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
;"></div>
            <div class="inner">
                <h2><a href="/admin/?option=<?php echo $_smarty_tpl->tpl_vars['main']->value->module_name;?>
&suboption=content&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
                <span class="count right"><?php echo $_smarty_tpl->tpl_vars['sections']->value->getSectionItemsCount($_smarty_tpl->tpl_vars['item']->value['id']);?>
</span>
                <a class="left" href="/admin/?option=<?php echo $_smarty_tpl->tpl_vars['main']->value->module_name;?>
&suboption=edit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('sections','edit');?>
</a>
                <a class="left" href="javascript:void(0)" onclick="confirmMessage('<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('sections','confirm_delete_message');?>
', '/admin/?option=<?php echo $_smarty_tpl->tpl_vars['main']->value->module_name;?>
&suboption=list&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('sections','delete');?>
</a>
                <div class="cl"></div>
            </div>
        </div>
        <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['sections_list']['iteration'] % 3)){?>
        <div class="cl"></div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sl_i']->value==3){?><?php $_smarty_tpl->tpl_vars['sl_i'] = new Smarty_variable(0, null, 0);?><?php }?>
    <?php } ?>
    <div class="cl"></div>
</div>
<?php }} ?>