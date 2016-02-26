<?php /* Smarty version Smarty 3.1.4, created on 2014-09-27 15:03:00
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/templates/modules/sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163860570954269964026e72-25476470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0dafdbdb6114a56a8ef7c5b9d60a0a51f3adbbd' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/templates/modules/sitemap.tpl',
      1 => 1411668491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163860570954269964026e72-25476470',
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
  'unifunc' => 'content_542699640d5fa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542699640d5fa')) {function content_542699640d5fa($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_sitemap')) {
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