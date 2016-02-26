<?php /* Smarty version Smarty 3.1.4, created on 2014-02-27 01:53:31
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/admin/templates/system/form_fields/multiselect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1671286161530e625b72f7f7-47953742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0490f841d17e19de13f34f70e954ecef707d5193' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/admin/templates/system/form_fields/multiselect.tpl',
      1 => 1389258877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1671286161530e625b72f7f7-47953742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'index' => 0,
    'options' => 0,
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_530e625b89ddb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e625b89ddb')) {function content_530e625b89ddb($_smarty_tpl) {?><div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
    <div class="cl"></div>

    <select id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
" multiple="multiple" class="multiselect" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
[]">
        <?php  $_smarty_tpl->tpl_vars['options'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['options']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['options']->key => $_smarty_tpl->tpl_vars['options']->value){
$_smarty_tpl->tpl_vars['options']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['options']->value['key'];?>
" <?php if ($_smarty_tpl->tpl_vars['main']->value->compareMultiSelectValues($_smarty_tpl->tpl_vars['item']->value['value'],$_smarty_tpl->tpl_vars['options']->value['key'])){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['options']->value['key'];?>
. <?php echo $_smarty_tpl->tpl_vars['options']->value['value'];?>
</option>
        <?php } ?>
    </select>
</div><?php }} ?>