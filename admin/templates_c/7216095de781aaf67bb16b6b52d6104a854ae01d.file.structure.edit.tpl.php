<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 13:28:05
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/admin/templates/modules/structure.edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42925432252ce6ba5d45375-52254684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7216095de781aaf67bb16b6b52d6104a854ae01d' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/admin/templates/modules/structure.edit.tpl',
      1 => 1389258876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42925432252ce6ba5d45375-52254684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce6ba5de2fb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce6ba5de2fb')) {function content_52ce6ba5de2fb($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("system/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['main']->value->item_data['just_created']=='1'){?>
<script>
    $('input#name').on('blur focus change keyup keydown', function(){
        $('input#part').val(escapeUrl($(this).val()));

        $('input#title').val($(this).val());
    });
</script>
<?php }?><?php }} ?>