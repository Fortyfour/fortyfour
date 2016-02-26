<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:25:23
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/modules/structure.edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:914431789531466a35997d6-28766699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e71ffbb24fb70191eb6b80c4e86dfee9d728143b' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/modules/structure.edit.tpl',
      1 => 1393844283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '914431789531466a35997d6-28766699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_531466a360f54',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531466a360f54')) {function content_531466a360f54($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("system/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['main']->value->item_data['just_created']=='1'){?>
<script>
    $('input#name').on('blur focus change keyup keydown', function(){
        $('input#part').val(escapeUrl($(this).val()));

        $('input#title').val($(this).val());
    });
</script>
<?php }?><?php }} ?>