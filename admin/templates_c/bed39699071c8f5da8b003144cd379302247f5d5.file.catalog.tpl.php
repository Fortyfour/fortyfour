<?php /* Smarty version Smarty 3.1.4, created on 2014-10-30 21:04:13
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/system/form_fields/catalog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31883326954526f8da395a3-46789579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bed39699071c8f5da8b003144cd379302247f5d5' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/system/form_fields/catalog.tpl',
      1 => 1411668641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31883326954526f8da395a3-46789579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54526f8dac3f8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54526f8dac3f8')) {function content_54526f8dac3f8($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_urlencode_my')) include '/home/fortyfour/web/fortyfour.ru/public_html/smarty/plugins/modifier.urlencode_my.php';
?><div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
    <input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" value="<?php echo smarty_modifier_urlencode_my($_smarty_tpl->tpl_vars['item']->value['value']);?>
" />

    <div>
        <a class="paste_params_button" href="javascript:void(0)" onclick="catalog.pasteParams('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')">Экспорт</a>
        <a class="copy_params_button" href="javascript:void(0)" onclick="catalog.copyParams('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')">Импорт</a>
        <a class="add_param_button" href="javascript:void(0)" onclick="catalog.addParam('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')">Добавить +</a>
    </div>

    <div class="form_items_list_container white_holder related_list" id="catalog_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
        <table cellpadding="0" cellspacing="0" border="0">
            <tr class="thead">
                <th width="1%">№</th>
                <th width="39%">Параметр</th>
                <th width="60%">Значение</th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>

    <script type="text/javascript">
        catalog.init('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
');
    </script>
</div><?php }} ?>