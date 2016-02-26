<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 16:02:17
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/pager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79038577953146f49928e56-70526872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ddc1ce89764e936b5fa482fbd595d2b8cf9121c' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/pager.tpl',
      1 => 1393844130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79038577953146f49928e56-70526872',
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
  'unifunc' => 'content_53146f49b5219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53146f49b5219')) {function content_53146f49b5219($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['pager']->value['total_pages']>1){?>
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