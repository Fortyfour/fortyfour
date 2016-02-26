<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 13:32:54
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/modules/sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160743564252ce6cc65ea576-48187292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b08cd2128112bcbc0eda3fc0245545e72172c4ed' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/modules/sitemap.tpl',
      1 => 1389258878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160743564252ce6cc65ea576-48187292',
  'function' => 
  array (
    'sitemap' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'level' => 0,
    'data' => 0,
    'item' => 0,
    'core' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce6cc675417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce6cc675417')) {function content_52ce6cc675417($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_sitemap')) {
    function smarty_template_function_sitemap($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['sitemap']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <ul data-level="<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
        <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["i"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
            <?php if (is_array($_smarty_tpl->tpl_vars['item']->value)){?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>

                    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['childrens'])){?>
                        <?php smarty_template_function_sitemap($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['item']->value['childrens'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                    <?php }?>
                </li>
            <?php }else{ ?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                </li>
            <?php }?>
        <?php } ?>
    </ul><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<?php smarty_template_function_sitemap($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['core']->value->page['data']));?>
<?php }} ?>