<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:01:41
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/portfolio-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88604083253146115adea12-33633279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92cde3ddd1cb7de502de828b8cffc1649b9c8cae' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/portfolio-list.tpl',
      1 => 1393844131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88604083253146115adea12-33633279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'i' => 0,
    'portfolio' => 0,
    'core' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_53146115b9a67',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53146115b9a67')) {function content_53146115b9a67($_smarty_tpl) {?><div class="units-row">
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['portfolio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['portfolio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['portfolio']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['portfolio']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['portfolio']->key => $_smarty_tpl->tpl_vars['portfolio']->value){
$_smarty_tpl->tpl_vars['portfolio']->_loop = true;
 $_smarty_tpl->tpl_vars['portfolio']->iteration++;
 $_smarty_tpl->tpl_vars['portfolio']->last = $_smarty_tpl->tpl_vars['portfolio']->iteration === $_smarty_tpl->tpl_vars['portfolio']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['portfolio_loop']['last'] = $_smarty_tpl->tpl_vars['portfolio']->last;
?>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>

    <div class="unit-25">
        <a href="<?php echo $_smarty_tpl->tpl_vars['portfolio']->value['path'];?>
" class="item browser">
            <span class="item-container">
                <i class="buttons"></i>

                <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getItemSingleImage('section_20',$_smarty_tpl->tpl_vars['portfolio']->value['id'],'col_168'), null, 0);?>

                <span class="viewport">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['path'], ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
_pic.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['extension'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['portfolio']->value['structure_name'], ENT_QUOTES, 'UTF-8', true);?>
" />
                </span>
            </span>

            <span class="name"><?php echo $_smarty_tpl->tpl_vars['portfolio']->value['structure_name'];?>
</span>
        </a>

        <span class="desc"><?php echo $_smarty_tpl->tpl_vars['portfolio']->value['subname'];?>
</span>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['i']->value==4&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['portfolio_loop']['last']){?>
</div>
<div class="units-row">

    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
    <?php }?>
    <?php } ?>
</div><?php }} ?>