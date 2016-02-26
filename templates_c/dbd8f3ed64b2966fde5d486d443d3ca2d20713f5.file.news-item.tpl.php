<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:27:30
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/modules/news-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131144098753146722bbf0b4-70745480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbd8f3ed64b2966fde5d486d443d3ca2d20713f5' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/modules/news-item.tpl',
      1 => 1393844131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131144098753146722bbf0b4-70745480',
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
  'unifunc' => 'content_53146722cac23',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53146722cac23')) {function content_53146722cac23($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/var/www/fortyfour/data/www/fortyfour.ru/smarty/plugins/modifier.date.php';
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


    <hr/>

    <div class="social-likes">
        <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
        <div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
        <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
        <div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
    </div>
</div><?php }} ?>