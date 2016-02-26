<?php /* Smarty version Smarty 3.1.4, created on 2014-10-30 21:04:37
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/modules/templates.templates.edit.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200312041054526fa53eb2b4-63422741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a96ed0c1c3d64a0830564fec02abce3a897c3383' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/modules/templates.templates.edit.tools.tpl',
      1 => 1411668637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200312041054526fa53eb2b4-63422741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54526fa542163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54526fa542163')) {function content_54526fa542163($_smarty_tpl) {?><div class="right_block">
    <h2><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','actions');?>
</h2>
    <div class="inner">
        <ul class="rb_menu">
            <li>
                <a class="red_link" onclick="confirmMessage('<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','delete_oject_confirm');?>
', '<?php echo $_smarty_tpl->tpl_vars['main']->value->content_list_delete_link;?>
<?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['id'];?>
')" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','delete_oject');?>
</a>
            </li>
        </ul>
    </div>
</div><?php }} ?>