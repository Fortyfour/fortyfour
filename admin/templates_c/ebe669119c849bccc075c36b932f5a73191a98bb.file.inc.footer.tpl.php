<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:02:58
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/inc.footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126828019253146162138109-28887000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebe669119c849bccc075c36b932f5a73191a98bb' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/inc.footer.tpl',
      1 => 1393844280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126828019253146162138109-28887000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5314616219143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5314616219143')) {function content_5314616219143($_smarty_tpl) {?><div class="copy">
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