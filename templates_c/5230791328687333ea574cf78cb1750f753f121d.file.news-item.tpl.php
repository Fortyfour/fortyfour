<?php /* Smarty version Smarty 3.1.4, created on 2014-01-24 18:19:45
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/modules/news-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106275578852e27681690e90-52638171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5230791328687333ea574cf78cb1750f753f121d' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/modules/news-item.tpl',
      1 => 1389258878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106275578852e27681690e90-52638171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52e27681802af',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e27681802af')) {function content_52e27681802af($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/Volumes/Black/Users/Ruslan/Sites/fortyfour/smarty/plugins/modifier.date.php';
?><div class="plain-content">
    <div class="tags">
        <span class="date color-gray"><i class="icon-clock"></i><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['core']->value->page['item']['date'],"date");?>
</span>

        <?php $_smarty_tpl->tpl_vars['tags'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['core']->value->page['item']['tags']), null, 0);?>

        <?php if (count($_smarty_tpl->tpl_vars['tags']->value)>0){?>
            <i class="icon-tags color-gray-light" title="Теги"></i>
            <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                <a href="/blog?mode=tags&tag=<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" class="tag color-gray-light"><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</a>
            <?php } ?>
        <?php }?>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['text'];?>

</div><?php }} ?>