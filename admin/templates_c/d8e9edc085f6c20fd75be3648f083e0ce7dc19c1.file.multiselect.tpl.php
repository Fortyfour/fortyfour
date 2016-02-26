<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:16:36
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/system/form_fields/multiselect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213822456953146494d37073-44821189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8e9edc085f6c20fd75be3648f083e0ce7dc19c1' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/system/form_fields/multiselect.tpl',
      1 => 1393844289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213822456953146494d37073-44821189',
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
  'unifunc' => 'content_53146494dc901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53146494dc901')) {function content_53146494dc901($_smarty_tpl) {?><div class="item_block">
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