<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:02:17
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/main-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124957965653146139888013-29461397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9ee014c1ef7055a160ed305c54ea0a97c2311cb' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/main-nav.tpl',
      1 => 1393844130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124957965653146139888013-29461397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_531461398cae3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531461398cae3')) {function content_531461398cae3($_smarty_tpl) {?><ul>
    <li class="phone"><span class="icon phone"><i class="phone"></i>+7 (926) 960-40-20</span></li>
    <li><a href="#" class="icon common-feedback-opener"><i class="mail"></i>&nbsp;</a></li>

    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/about/'){?>class="active"<?php }?>><a href="/about">О компании</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/portfolio/'){?>class="active"<?php }?>><a href="/portfolio">Портфолио</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/services/'){?>class="active"<?php }?>><a href="/services">Услуги</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/projects/'){?>class="active"<?php }?>><a href="/projects">Проекты</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/blog/'){?>class="active"<?php }?>><a href="/blog">Блог</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['core']->value->uri=='/contacts/'){?>class="active"<?php }?>><a href="/contacts">Контакты</a></li>
</ul><?php }} ?>