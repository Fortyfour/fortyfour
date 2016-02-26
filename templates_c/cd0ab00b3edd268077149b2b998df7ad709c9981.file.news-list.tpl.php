<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 13:19:12
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/modules/news-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61044070552ce69906cd217-23744251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd0ab00b3edd268077149b2b998df7ad709c9981' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/modules/news-list.tpl',
      1 => 1389258878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61044070552ce69906cd217-23744251',
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
  'unifunc' => 'content_52ce699086022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce699086022')) {function content_52ce699086022($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/Volumes/Black/Users/Ruslan/Sites/fortyfour/smarty/plugins/modifier.date.php';
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