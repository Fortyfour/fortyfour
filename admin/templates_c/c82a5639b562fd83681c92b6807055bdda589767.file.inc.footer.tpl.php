<?php /* Smarty version Smarty 3.1.4, created on 2014-10-22 19:32:48
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/inc.footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2278171945447ce2009bfd1-84509822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c82a5639b562fd83681c92b6807055bdda589767' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/inc.footer.tpl',
      1 => 1411668633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2278171945447ce2009bfd1-84509822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5447ce200afb5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447ce200afb5')) {function content_5447ce200afb5($_smarty_tpl) {?><div class="copy">
    <div class="left">
        &copy; 2008&ndash;<?php echo $_smarty_tpl->tpl_vars['main']->value->config['current_year'];?>
. <?php echo $_smarty_tpl->tpl_vars['main']->value->getText('footer','copyright_text');?>
.
    </div>
    <div class="right">
        <?php echo $_smarty_tpl->tpl_vars['main']->value->getText('footer','version');?>
 <a href="#"><?php echo $_smarty_tpl->tpl_vars['main']->value->config['current_version'];?>
</a>
    </div>
</div><?php }} ?>