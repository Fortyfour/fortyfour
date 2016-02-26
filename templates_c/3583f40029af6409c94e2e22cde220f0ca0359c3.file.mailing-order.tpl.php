<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 14:40:26
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/mailing-order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:376356421531450b2c0c143-26708357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3583f40029af6409c94e2e22cde220f0ca0359c3' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/mailing-order.tpl',
      1 => 1393843157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '376356421531450b2c0c143-26708357',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_531450b2cb37c',
  'variables' => 
  array (
    'core' => 0,
    'i' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531450b2cb37c')) {function content_531450b2cb37c($_smarty_tpl) {?><html>
<body style="font: 12px/20px Arial, Tahoma, Verdana, sans-serif;">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
    <tr>
        <td align="left" valign="top" style="padding: 9px 14px; background-color: #eeeeee;">
            <h1 style="color: #444444; font-family: Georgia, Times, serif; font-size: 1.6em; font-weight: normal; padding: 0; margin: 0;">
                <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->subject;?>

            </h1>
        </td>
    </tr>
    <tr>
        <td align="left" valign="top" style="padding: 9px 14px; border: 1px solid #eeeeee; font: 12px/20px Arial, Tahoma, Verdana, sans-serif;">
            <p>Вы оформили заказ на разработку проекта в студии Fortyfour.ru. Ниже вы найдете данные, вашего заказа. Мы с вами свяжемся в ближайшее время.</p>

            <h2>Тип проекта</h2>
            <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->type_name;?>


            <h2>Контактные данные</h2>

            <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->form_contacts->username){?>
                <p>
                    <strong>Имя</strong>
                    <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->form_contacts->username;?>

                </p>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->form_contacts->email){?>
                <p>
                    <strong>Электронная почта</strong>
                    <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->form_contacts->email;?>

                </p>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->form_contacts->phone){?>
                <p>
                    <strong>Телефон</strong>
                    <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->form_contacts->phone;?>

                </p>
            <?php }?>

            <h2>Информация о проекте</h2>

            <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->date_month||$_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->date_year){?>
                <p>
                    <strong>Желаемая дата реализации</strong>
                    <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->date_month){?>
                        <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->date_month;?>

                    <?php }?>&nbsp;

                    <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->date_year){?>
                        <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->date_year;?>

                    <?php }?>
                </p>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->domain){?>
            <p>
                <strong>Доменное имя</strong>
                <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->domain;?>

            </p>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->oldsite){?>
                <p>
                    <strong>Доменное имя</strong>
                    <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->oldsite;?>

                </p>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->sphere){?>
                <p>
                    <strong>Сфера деятельности</strong>
                    <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->sphere;?>

                </p>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->concurents){?>
                <p>
                    <strong>Ваши конкуренты</strong>
                    <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->concurents;?>

                </p>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->like){?>
                <p>
                    <strong>Сайты, которые вам нравятся</strong>
                    <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->like;?>

                </p>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->user_message){?>
                <p>
                    <strong>Комментарии к проекту</strong>
                    <?php echo $_smarty_tpl->tpl_vars['core']->value->mail_vars->form_details->user_message;?>

                </p>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['core']->value->mail_vars->options){?>
            <h2>Набор необходимых опций</h2>

            <table>
                <tr>
                    <th>№</th>
                    <th>Опция</th>
                    <th>Стоимость</th>
                </tr>

                <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value->mail_vars->options; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['option']->value['price'];?>
</td>
                    </tr>
                <?php } ?>
            </table>
            <?php }?>
        </td>
    </tr>
</table>
</body>
</html><?php }} ?>