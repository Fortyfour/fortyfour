<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 13:19:00
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/include/common/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169279624152ce6984199271-16737102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf5867b14a92a12ba25ffd1a5e5a0309f10d78d' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/include/common/breadcrumb.tpl',
      1 => 1389258878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169279624152ce6984199271-16737102',
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
  'unifunc' => 'content_52ce698421290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce698421290')) {function content_52ce698421290($_smarty_tpl) {?><div class="breadcrumb">
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