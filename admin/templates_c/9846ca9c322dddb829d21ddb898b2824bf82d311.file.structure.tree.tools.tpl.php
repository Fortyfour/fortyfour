<?php /* Smarty version Smarty 3.1.4, created on 2014-10-22 19:32:48
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/modules/structure.tree.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178556025447ce20086ab6-43171025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9846ca9c322dddb829d21ddb898b2824bf82d311' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/modules/structure.tree.tools.tpl',
      1 => 1411668637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178556025447ce20086ab6-43171025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
    'structure' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5447ce20097c3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447ce20097c3')) {function content_5447ce20097c3($_smarty_tpl) {?><div class="right_block">
    <h2><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','tree_status_header');?>
</h2>
    <div class="inner">
        <h3><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','tree_status_param_item_count');?>
</h3>
        <p>
            <?php echo $_smarty_tpl->tpl_vars['structure']->value->getTreeCount();?>

        </p>
    </div>
</div><?php }} ?>