<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 16:02:17
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/modules/news-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113976141653146f49792426-93504124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2afe238ad6572118e8e722d51d213b4b9f94d0c' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/modules/news-list.tpl',
      1 => 1393844132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113976141653146f49792426-93504124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'item' => 0,
    'tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_53146f4991bae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53146f4991bae')) {function content_53146f4991bae($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/var/www/fortyfour/data/www/fortyfour.ru/smarty/plugins/modifier.date.php';
?><div class="blog">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value->page['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="item">
            <h2><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['path'], ENT_QUOTES, 'UTF-8', true);?>
" class="no-link black-link"><?php echo $_smarty_tpl->tpl_vars['item']->value['structure_name'];?>
</a></h2>

            <div class="tags">
                <span class="date color-gray"><i class="icon-clock"></i><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['item']->value['date'],"date");?>
</span>

                <?php $_smarty_tpl->tpl_vars['tags'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['item']->value['tags']), null, 0);?>

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

            <?php echo $_smarty_tpl->tpl_vars['item']->value['announce'];?>

        </div>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
        <p class="color-gray">Нет активных записей</p>
    <?php } ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("include/common/pager.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('pager'=>$_smarty_tpl->tpl_vars['core']->value->page['pager']), 0);?>
<?php }} ?>