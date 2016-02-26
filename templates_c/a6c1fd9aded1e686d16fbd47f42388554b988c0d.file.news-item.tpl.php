<?php /* Smarty version Smarty 3.1.4, created on 2014-09-27 15:02:59
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/templates/modules/news-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57831198054269963c340d2-37025280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6c1fd9aded1e686d16fbd47f42388554b988c0d' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/templates/modules/news-item.tpl',
      1 => 1411668490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57831198054269963c340d2-37025280',
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
  'unifunc' => 'content_54269963ce28e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54269963ce28e')) {function content_54269963ce28e($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/home/fortyfour/web/fortyfour.ru/public_html/smarty/plugins/modifier.date.php';
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