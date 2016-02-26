<?php /* Smarty version Smarty 3.1.4, created on 2014-03-01 16:23:25
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/include/common/main-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49014247952ce68edd194d1-42049228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1e4b23d7adbbff4a728681a1fcd17fb8104254f' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/include/common/main-nav.tpl',
      1 => 1393676568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49014247952ce68edd194d1-42049228',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce68edd8e4d',
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce68edd8e4d')) {function content_52ce68edd8e4d($_smarty_tpl) {?><ul>
    <li class="phone"><span class="icon phone"><i class="phone"></i>+7 (926) 960-40-20</span></li>
    <li><a href="#" class="icon common-feedback-opener"><i class="mail"></i>&nbsp;</a></li>

    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/about/'){?>class="active"<?php }?>><a href="/about">О компании</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/portfolio/'){?>class="active"<?php }?>><a href="/portfolio">Портфолио</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/services/'){?>class="active"<?php }?>><a href="/services">Услуги</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/projects/'){?>class="active"<?php }?>><a href="/projects">Проекты</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/blog/'){?>class="active"<?php }?>><a href="/blog">Блог</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/contacts/'){?>class="active"<?php }?>><a href="/contacts">Контакты</a></li>
</ul><?php }} ?>