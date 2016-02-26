<?php /* Smarty version Smarty 3.1.4, created on 2013-10-17 05:00:33
         compiled from "/Users/ruslan/Sites/redactorcms2/templates/modules/news-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:348695086525f36b1a46ea3-52948445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ead0a1094aa9a26f5b100a9bc50743e5a6a2baf' => 
    array (
      0 => '/Users/ruslan/Sites/redactorcms2/templates/modules/news-item.tpl',
      1 => 1381968996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '348695086525f36b1a46ea3-52948445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_525f36b1c2a3b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525f36b1c2a3b')) {function content_525f36b1c2a3b($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/Users/ruslan/Sites/redactorcms2/smarty/plugins/modifier.date.php';
?><span class="date color-gray"><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['core']->value->page['item']['date'],"date");?>
 года</span><br>

<h1><?php echo $_smarty_tpl->tpl_vars['core']->value->page['h1'];?>
</h1>

<?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['text'];?>
<?php }} ?>