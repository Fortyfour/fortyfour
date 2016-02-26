<?php /* Smarty version Smarty 3.1.4, created on 2014-05-13 10:49:48
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/main-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:537536475314609e4346c6-62235719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9ee014c1ef7055a160ed305c54ea0a97c2311cb' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/main-nav.tpl',
      1 => 1399962597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '537536475314609e4346c6-62235719',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5314609e473d1',
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5314609e473d1')) {function content_5314609e473d1($_smarty_tpl) {?><ul>
    <li class="phone"><span class="icon phone"><i class="phone"></i>+7 (926) 960-40-20</span></li>
    <li><a href="#" class="icon common-feedback-opener"><i class="mail"></i>&nbsp;</a></li>

    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/about/'){?>class="active"<?php }?>><a href="/about">О компании</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/portfolio/'){?>class="active"<?php }?>><a href="/portfolio">Портфолио</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/services/'){?>class="active"<?php }?>><a href="/services">Услуги</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/projects/'){?>class="active"<?php }?>><a href="/projects">Проекты</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/blog/'){?>class="active"<?php }?>><a href="/blog">Блог</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/contacts/'){?>class="active"<?php }?>><a href="/contacts">Контакты</a></li>
</ul><?php }} ?>