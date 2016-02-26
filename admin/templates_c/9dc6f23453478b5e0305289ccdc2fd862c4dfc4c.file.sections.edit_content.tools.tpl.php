<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 13:40:46
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/admin/templates/modules/sections.edit_content.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66460335952ce6e9e8c1f96-32400260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dc6f23453478b5e0305289ccdc2fd862c4dfc4c' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/admin/templates/modules/sections.edit_content.tools.tpl',
      1 => 1389258876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66460335952ce6e9e8c1f96-32400260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
    'sections' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce6e9eac8e5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce6e9eac8e5')) {function content_52ce6e9eac8e5($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/Volumes/Black/Users/Ruslan/Sites/fortyfour/smarty/plugins/modifier.date.php';
?><div class="right_block">
    <h2><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','actions');?>
</h2>
    <div class="inner">
        <ul class="rb_menu">
            <li>
                <a class="red_link" onclick="confirmMessage('<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','delete_oject_confirm');?>
', '/admin/?option=sections&suboption=content&id=<?php echo $_GET['id'];?>
&action=delete&item_id=<?php echo $_GET['item'];?>
')" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('sections_content','delete_item_label');?>
</a>
            </li>
        </ul>
    </div>
</div>

<div class="right_block">
    <h2><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('sections','content_item_tools_info_header');?>
</h2>
    <div class="inner">
        <h3><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','code_id');?>
</h3>
        <p>
            <?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['id'];?>

        </p>

        <h3><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','creator');?>
</h3>
        <p>
            <?php echo $_smarty_tpl->tpl_vars['sections']->value->getUserStamp($_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['creator_id']);?>
<br>
            <span class="small"><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['creation_date'],'datetimefull');?>
</span>
        </p>

        <?php if ($_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['creation_date']!=$_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['change_date']){?>
            <h3><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','cahnger');?>
</h3>
            <p>
                <?php echo $_smarty_tpl->tpl_vars['sections']->value->getUserStamp($_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['changer_id']);?>
<br>
                <span class="small"><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['change_date'],'datetimefull');?>
</span>
            </p>
        <?php }?>
    </div>
</div><?php }} ?>