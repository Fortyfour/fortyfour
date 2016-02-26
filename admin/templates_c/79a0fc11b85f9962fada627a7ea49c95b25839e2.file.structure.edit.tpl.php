<?php /* Smarty version Smarty 3.1.4, created on 2014-10-30 21:01:03
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/modules/structure.edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82547966054526ecf4dcaa0-02051614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79a0fc11b85f9962fada627a7ea49c95b25839e2' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/modules/structure.edit.tpl',
      1 => 1411668636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82547966054526ecf4dcaa0-02051614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54526ecf68976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54526ecf68976')) {function content_54526ecf68976($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("system/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['main']->value->item_data['just_created']=='1'){?>
<script>
    $('input#name').on('blur focus change keyup keydown', function(){
        $('input#part').val(escapeUrl($(this).val()));

        $('input#title').val($(this).val());
    });
</script>
<?php }?><?php }} ?>