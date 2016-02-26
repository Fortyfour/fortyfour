<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 14:59:50
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:965699284531460a6992ed8-04045304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a1d16c14a275960c56ccddca880490363faa24f' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/breadcrumb.tpl',
      1 => 1393844129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '965699284531460a6992ed8-04045304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'crumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_531460a69dc55',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531460a69dc55')) {function content_531460a69dc55($_smarty_tpl) {?><div class="breadcrumb">
    <?php  $_smarty_tpl->tpl_vars["crumb"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["crumb"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value->page['breadcrumbs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["crumb"]->key => $_smarty_tpl->tpl_vars["crumb"]->value){
$_smarty_tpl->tpl_vars["crumb"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['crumb']->value['current']){?>
            <?php echo $_smarty_tpl->tpl_vars['crumb']->value['name'];?>

        <?php }else{ ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['crumb']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['crumb']->value['name'];?>
</a> &rarr;
        <?php }?>
    <?php } ?>
</div><?php }} ?>