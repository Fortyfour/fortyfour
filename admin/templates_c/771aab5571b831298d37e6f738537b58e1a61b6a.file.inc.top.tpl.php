<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 13:27:56
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/admin/templates/inc.top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154562548752ce6b9c116fa1-46152868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '771aab5571b831298d37e6f738537b58e1a61b6a' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/admin/templates/inc.top.tpl',
      1 => 1389258876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154562548752ce6b9c116fa1-46152868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce6b9c2d564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce6b9c2d564')) {function content_52ce6b9c2d564($_smarty_tpl) {?><div class="top overall_padding">
    <a href="/admin/" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','logo_title');?>
" class="logo"></a>
    <div class="arrow a1"></div>
    <div class="options">
        <a class="site" href="/" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','top_domain');?>
"><?php echo $_smarty_tpl->tpl_vars['main']->value->domain;?>
</a>
        
        <div class="arrow a2"></div>

        <?php if ($_smarty_tpl->tpl_vars['login']->value->userdata['ip']!='0'){?>
            <span class="secure" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','ip_attached');?>
: <?php echo $_smarty_tpl->tpl_vars['login']->value->userdata['ip_conv'];?>
"></span>
        <?php }?>

        <span class="item">
            <?php if ($_smarty_tpl->tpl_vars['main']->value->module_name=='personal'&&$_smarty_tpl->tpl_vars['main']->value->module_mode=='settings'){?>
                <b><?php echo $_smarty_tpl->tpl_vars['login']->value->userdata['name'];?>
</b> (<?php echo $_smarty_tpl->tpl_vars['login']->value->userdata['login'];?>
)
            <?php }else{ ?>
                <a href="/admin/?option=personal&suboption=settings" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','profile_config');?>
"><?php echo $_smarty_tpl->tpl_vars['login']->value->userdata['name'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['login']->value->userdata['login'];?>
)
            <?php }?>
        </span>

        <span class="item">
            <?php if ($_smarty_tpl->tpl_vars['main']->value->module_name=='personal'&&$_smarty_tpl->tpl_vars['main']->value->module_mode=='password_change'){?>
                <b><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','password_change_text');?>
</b>
            <?php }else{ ?>
                <a href="/admin/?option=personal&suboption=password_change" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','password_change_title');?>
"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','password_change_text');?>
</a>
            <?php }?>
        </span>
    </div>
    <div class="options_r">
        <span class="item">
            <a class="exit" href="javascript:void(0)" onclick="confirmMessage('<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','exit_confirm_text');?>
', '/admin/?action=exit')"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','exit_text');?>
</a>
        </span>
    </div>
</div><?php }} ?>