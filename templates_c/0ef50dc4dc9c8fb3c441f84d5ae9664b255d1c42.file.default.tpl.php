<?php /* Smarty version Smarty 3.1.4, created on 2014-02-26 23:54:32
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/modules/portfolio/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198239504852ce6fd075d639-91438197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ef50dc4dc9c8fb3c441f84d5ae9664b255d1c42' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/modules/portfolio/default.tpl',
      1 => 1393444471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198239504852ce6fd075d639-91438197',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce6fd0a1bff',
  'variables' => 
  array (
    'core' => 0,
    'screenshots' => 0,
    'screenshot' => 0,
    'favicon' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce6fd0a1bff')) {function content_52ce6fd0a1bff($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/Volumes/Black/Users/Ruslan/Sites/fortyfour/smarty/plugins/modifier.date.php';
?><?php $_smarty_tpl->tpl_vars['favicon'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getItemSingleImage('section_20',$_smarty_tpl->tpl_vars['core']->value->page['item']['id'],'col_179'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['screenshots'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getItemImageGallery('section_20',$_smarty_tpl->tpl_vars['core']->value->page['item']['id'],'col_187'), null, 0);?>

<div class="content-inner">
    <div class="horizontal-limiter">
        <div class="inner-block">
            <?php echo $_smarty_tpl->getSubTemplate ("include/common/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <h1><?php echo $_smarty_tpl->tpl_vars['core']->value->page['h1'];?>
</h1>

            <hr>

            <p>
                <span class="color-gray">Задача:</span> <?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['taskname'];?>

                <br/>

                <span class="color-gray">Дата выпуска:</span> <?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['core']->value->page['item']['date'],"date");?>


                <?php if ($_smarty_tpl->tpl_vars['core']->value->page['item']['site']){?>
                    <br>
                    <span class="color-gray">Адрес:</span> <a href="http://<?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['site'];?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['site'];?>
</a>
                <?php }?>
                <br>
                <br>
            </p>

            <?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['text_short'];?>


            <h1><?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['text'];?>
</h1>

            <?php  $_smarty_tpl->tpl_vars['screenshot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['screenshot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['screenshots']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['screenshot']->key => $_smarty_tpl->tpl_vars['screenshot']->value){
$_smarty_tpl->tpl_vars['screenshot']->_loop = true;
?>
                <div class="work-site-screenshot">
                    <i class="bar-l"></i>
                    <i class="bar-r"></i>
                    <span class="bar-title"><?php echo $_smarty_tpl->tpl_vars['screenshot']->value['metaname'];?>
</span>

                    <?php if ($_smarty_tpl->tpl_vars['core']->value->page['item']['site']){?>
                        <span class="bar-favicon"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['favicon']->value['path'], ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['favicon']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['favicon']->value['extension'], ENT_QUOTES, 'UTF-8', true);?>
"></span>
                        <span class="bar-address"><a href="http://<?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['site'];?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->page['item']['site'];?>
</a></span>
                    <?php }?>

                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['path'], ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['extension'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['metaname'], ENT_QUOTES, 'UTF-8', true);?>
">
                </div>

                <em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['metadesc'], ENT_QUOTES, 'UTF-8', true);?>
</em>
            <?php } ?>
        </div>
    </div>
</div><?php }} ?>