<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 13:20:04
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/modules/portfolio/default-plain-images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132450610052ce69c4c62c13-32026808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1734c7b8364ce8369ca653ac24aa4ceea8504ee4' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/modules/portfolio/default-plain-images.tpl',
      1 => 1389258878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132450610052ce69c4c62c13-32026808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'screenshots' => 0,
    'screenshot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce69c4ea232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce69c4ea232')) {function content_52ce69c4ea232($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/Volumes/Black/Users/Ruslan/Sites/fortyfour/smarty/plugins/modifier.date.php';
?><?php $_smarty_tpl->tpl_vars['favicon'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getItemSingleImage('section_20',$_smarty_tpl->tpl_vars['core']->value->page['item']['id'],'col_179'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['screenshots'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getItemImageGallery('section_20',$_smarty_tpl->tpl_vars['core']->value->page['item']['id'],'col_187'), null, 0);?>

<div class="content-inner">
    <div class="horizontal-limiter">
        <div class="inner-block">
            <?php echo $_smarty_tpl->getSubTemplate ("include/common/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <h1><?php echo $_smarty_tpl->tpl_vars['core']->value->page['h1'];?>
</h1>

            <hr>

            <div class="content-prefix">
                <div class="content-prefix-params">
                    <div class="units-row-end">
                        <div class="unit-40 text-right">
                            <span class="color-gray">Задача:</span>&nbsp;
                        </div>

                        <div class="init-60">
                            <?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['taskname'];?>

                        </div>
                    </div>

                    <div class="units-row-end">
                        <div class="unit-40 text-right">
                            <span class="color-gray">Выпуск:</span>&nbsp;
                        </div>

                        <div class="init-60">
                            <?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['core']->value->page['item']['date'],"date");?>

                        </div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['core']->value->page['item']['site']){?>
                        <div class="units-row-end">
                            <div class="unit-40 text-right">
                                <span class="color-gray">Адрес:</span>&nbsp;
                            </div>

                            <div class="init-60">
                                <a href="http://<?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['site'];?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['site'];?>
</a>
                            </div>
                        </div>
                    <?php }?>
                </div>

                <?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['text_short'];?>


                <div class="clear"></div>
            </div>

            <?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['text'];?>


            <?php  $_smarty_tpl->tpl_vars['screenshot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['screenshot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['screenshots']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['screenshot']->key => $_smarty_tpl->tpl_vars['screenshot']->value){
$_smarty_tpl->tpl_vars['screenshot']->_loop = true;
?>
                <img class="rounded" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['path'], ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['extension'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['metaname'], ENT_QUOTES, 'UTF-8', true);?>
">

                <em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['metadesc'], ENT_QUOTES, 'UTF-8', true);?>
</em>
            <?php } ?>
        </div>
    </div>
</div><?php }} ?>