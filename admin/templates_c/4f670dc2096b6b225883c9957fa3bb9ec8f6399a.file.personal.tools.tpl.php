<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:03:02
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/modules/personal.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209906973953146166ab4792-48926373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f670dc2096b6b225883c9957fa3bb9ec8f6399a' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/modules/personal.tools.tpl',
      1 => 1393844281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209906973953146166ab4792-48926373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
    'personal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_53146166b63e8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53146166b63e8')) {function content_53146166b63e8($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/var/www/fortyfour/data/www/fortyfour.ru/smarty/plugins/modifier.date.php';
?><div class="right_block">
    <h2><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('personal','user_status_header');?>
</h2>
    <div class="inner">
        <h3><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('personal','user_status_param_last_login');?>
</span></h3>
        <p>
            <span class="nowrap"><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['main']->value->item_data['last'],'datetimefull');?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['main']->value->item_data['ip']!='0'){?>(<?php echo $_smarty_tpl->tpl_vars['personal']->value->encodeIp($_smarty_tpl->tpl_vars['main']->value->item_data['ip']);?>
)<?php }?>
        </p>
    </div>
</div><?php }} ?>