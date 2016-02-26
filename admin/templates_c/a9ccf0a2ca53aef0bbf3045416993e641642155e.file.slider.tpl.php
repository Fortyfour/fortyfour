<?php /* Smarty version Smarty 3.1.4, created on 2014-10-30 21:03:37
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/system/form_fields/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103073427654526f69e85af8-19989079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9ccf0a2ca53aef0bbf3045416993e641642155e' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/system/form_fields/slider.tpl',
      1 => 1411668644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103073427654526f69e85af8-19989079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54526f69ebb39',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54526f69ebb39')) {function content_54526f69ebb39($_smarty_tpl) {?><div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
 &mdash; <strong id="amount_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</strong></label>
    <input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" />
    <div class="slider_container">
        <div id="slider_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"></div>
    </div>
    <script type="text/javascript">initSlider('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
', <?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['min'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['max'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['interval'];?>
)</script>
</div><?php }} ?>