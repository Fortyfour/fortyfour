<?php /* Smarty version Smarty 3.1.4, created on 2014-10-30 21:04:37
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/system/form_fields/template_file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198085752554526fa5380cb7-47082012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ecd7d6755a0b72b4c542d1b39759a4e4f1f060a' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/system/form_fields/template_file.tpl',
      1 => 1411668644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198085752554526fa5380cb7-47082012',
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
  'unifunc' => 'content_54526fa53e3a8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54526fa53e3a8')) {function content_54526fa53e3a8($_smarty_tpl) {?><div class="item_block">
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