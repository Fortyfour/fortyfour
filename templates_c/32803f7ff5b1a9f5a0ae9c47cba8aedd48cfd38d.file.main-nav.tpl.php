<?php /* Smarty version Smarty 3.1.4, created on 2014-09-27 10:33:11
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/templates/include/common/main-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48972223154265a270aadc2-75596524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32803f7ff5b1a9f5a0ae9c47cba8aedd48cfd38d' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/templates/include/common/main-nav.tpl',
      1 => 1411668489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48972223154265a270aadc2-75596524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54265a270cc88',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54265a270cc88')) {function content_54265a270cc88($_smarty_tpl) {?><ul>
    <li class="phone"><span class="icon phone"><i class="phone"></i>+7 (926) 960-40-20</span></li>
    <li><a href="#" class="icon common-feedback-opener"><i class="mail"></i>&nbsp;</a></li>

    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/about/'){?>class="active"<?php }?>><a href="/about">О компании</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/portfolio/'){?>class="active"<?php }?>><a href="/portfolio">Портфолио</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/services/'){?>class="active"<?php }?>><a href="/services">Услуги</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/projects/'){?>class="active"<?php }?>><a href="/projects">Проекты</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/blog/'){?>class="active"<?php }?>><a href="/blog">Блог</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/contacts/'){?>class="active"<?php }?>><a href="/contacts">Контакты</a></li>
</ul><?php }} ?>