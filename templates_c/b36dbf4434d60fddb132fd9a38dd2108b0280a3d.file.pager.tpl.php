<?php /* Smarty version Smarty 3.1.4, created on 2014-09-27 11:14:00
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/templates/include/common/pager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1161927678542663b8bd1917-46680413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b36dbf4434d60fddb132fd9a38dd2108b0280a3d' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/templates/include/common/pager.tpl',
      1 => 1411668489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1161927678542663b8bd1917-46680413',
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
  'unifunc' => 'content_542663b8c0611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542663b8c0611')) {function content_542663b8c0611($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['pager']->value['total_pages']>1){?>
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