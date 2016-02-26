<html>
<body style="font: 12px/20px Arial, Tahoma, Verdana, sans-serif;">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
    <tr>
        <td align="left" valign="top" style="padding: 9px 14px; background-color: #eeeeee;">
            <h1 style="color: #444444; font-family: Georgia, Times, serif; font-size: 1.6em; font-weight: normal; padding: 0; margin: 0;">
                {$core->mail_vars->subject}
            </h1>
        </td>
    </tr>
    <tr>
        <td align="left" valign="top" style="padding: 9px 14px; border: 1px solid #eeeeee; font: 12px/20px Arial, Tahoma, Verdana, sans-serif;">
            <p>Вы оформили заказ на разработку проекта в студии Fortyfour.ru. Ниже вы найдете данные, вашего заказа. Мы с вами свяжемся в ближайшее время.</p>

            <h2>Тип проекта</h2>
            {$core->mail_vars->type_name}

            <h2>Контактные данные</h2>

            {if $core->mail_vars->form_contacts->username}
                <p>
                    <strong>Имя</strong>
                    {$core->mail_vars->form_contacts->username}
                </p>
            {/if}

            {if $core->mail_vars->form_contacts->email}
                <p>
                    <strong>Электронная почта</strong>
                    {$core->mail_vars->form_contacts->email}
                </p>
            {/if}

            {if $core->mail_vars->form_contacts->phone}
                <p>
                    <strong>Телефон</strong>
                    {$core->mail_vars->form_contacts->phone}
                </p>
            {/if}

            <h2>Информация о проекте</h2>

            {if $core->mail_vars->form_details->date_month || $core->mail_vars->form_details->date_year}
                <p>
                    <strong>Желаемая дата реализации</strong>
                    {if $core->mail_vars->form_details->date_month}
                        {$core->mail_vars->form_details->date_month}
                    {/if}&nbsp;

                    {if $core->mail_vars->form_details->date_year}
                        {$core->mail_vars->form_details->date_year}
                    {/if}
                </p>
            {/if}

            {if $core->mail_vars->form_details->domain}
            <p>
                <strong>Доменное имя</strong>
                {$core->mail_vars->form_details->domain}
            </p>
            {/if}

            {if $core->mail_vars->form_details->oldsite}
                <p>
                    <strong>Доменное имя</strong>
                    {$core->mail_vars->form_details->oldsite}
                </p>
            {/if}

            {if $core->mail_vars->form_details->sphere}
                <p>
                    <strong>Сфера деятельности</strong>
                    {$core->mail_vars->form_details->sphere}
                </p>
            {/if}

            {if $core->mail_vars->form_details->concurents}
                <p>
                    <strong>Ваши конкуренты</strong>
                    {$core->mail_vars->form_details->concurents}
                </p>
            {/if}

            {if $core->mail_vars->form_details->like}
                <p>
                    <strong>Сайты, которые вам нравятся</strong>
                    {$core->mail_vars->form_details->like}
                </p>
            {/if}

            {if $core->mail_vars->form_details->user_message}
                <p>
                    <strong>Комментарии к проекту</strong>
                    {$core->mail_vars->form_details->user_message}
                </p>
            {/if}

            {if $core->mail_vars->options}
            <h2>Набор необходимых опций</h2>

            <table>
                <tr>
                    <th>№</th>
                    <th>Опция</th>
                    <th>Стоимость</th>
                </tr>

                {foreach from=$core->mail_vars->options item=option key=i}
                    <tr>
                        <td>{$i+1}</td>
                        <td>{$option.name}</td>
                        <td>{$option.price}</td>
                    </tr>
                {/foreach}
            </table>
            {/if}
        </td>
    </tr>
</table>
</body>
</html>