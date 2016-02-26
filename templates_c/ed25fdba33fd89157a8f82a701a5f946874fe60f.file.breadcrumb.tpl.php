<?php /* Smarty version Smarty 3.1.4, created on 2014-09-27 10:57:58
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/templates/include/common/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111488662554265ff6d35c67-54225966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed25fdba33fd89157a8f82a701a5f946874fe60f' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/templates/include/common/breadcrumb.tpl',
      1 => 1411668489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111488662554265ff6d35c67-54225966',
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
  'unifunc' => 'content_54265ff6d4dde',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54265ff6d4dde')) {function content_54265ff6d4dde($_smarty_tpl) {?><div class="breadcrumb">
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