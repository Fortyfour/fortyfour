<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 13:19:12
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/include/common/pager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86198460052ce699086bc24-72250852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49780a44f8420f7d7eddf4e9b3765998d091aee5' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/include/common/pager.tpl',
      1 => 1389258878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86198460052ce699086bc24-72250852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce69909ac6d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce69909ac6d')) {function content_52ce69909ac6d($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['pager']->value['total_pages']>1){?>
<nav class="nav-pager">
    <?php if ($_smarty_tpl->tpl_vars['pager']->value['prev_page']){?><a href="<?php echo Utilities::getParamstring('page');?>
page=<?php echo $_smarty_tpl->tpl_vars['pager']->value['prev_page'];?>
">Предыдущая</a><?php }?>

    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pager']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['current']&&$_smarty_tpl->tpl_vars['item']->value['page']){?>
            <b><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</b>
        <?php }elseif($_smarty_tpl->tpl_vars['item']->value['page']){?>
            <a href="<?php echo Utilities::getParamstring('page');?>
page=<?php echo $_smarty_tpl->tpl_vars['item']->value['page'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
        <?php }else{ ?>
            <span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
        <?php }?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['pager']->value['next_page']){?><a href="<?php echo Utilities::getParamstring('page');?>
page=<?php echo $_smarty_tpl->tpl_vars['pager']->value['next_page'];?>
">Следующая</a><?php }?>

    <div class="clear"></div>
</nav>
<?php }?><?php }} ?>