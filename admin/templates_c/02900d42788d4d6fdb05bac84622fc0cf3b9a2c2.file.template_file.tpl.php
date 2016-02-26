<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 16:52:26
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/admin/templates/system/form_fields/template_file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35828846252ce9b8aefa221-57328456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02900d42788d4d6fdb05bac84622fc0cf3b9a2c2' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/admin/templates/system/form_fields/template_file.tpl',
      1 => 1389258877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35828846252ce9b8aefa221-57328456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce9b8b0f6ba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce9b8b0f6ba')) {function content_52ce9b8b0f6ba($_smarty_tpl) {?><div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
    <input class="text" type="text" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
" />
</div><?php }} ?>