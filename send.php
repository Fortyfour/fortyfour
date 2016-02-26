<?php
date_default_timezone_set('Europe/Moscow');

function send($from_name, $from_mail, $to, $subject, $content) {
	$subj = "=?utf-8?b?" . base64_encode($subject) . "?=";
	$from = "=?utf-8?B?" . base64_encode($from_name) . "?= <" . $from_mail . ">";

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";

	// Additional headers
	$headers .= 'To: <' . $to . '>' . "\r\n";
	$headers .= 'From: ' . $from . "\r\n";

	$content = '<body style="font: 12px/20px Arial, Tahoma, Verdana, sans-serif;">
                        <html>
                            <h1 style=" color: #444444; font-family: Georgia, Times, serif; font-size: 24px; font-weight: normal; padding: 10px 15px; margin: 0; background: #eeeeee;">' . $subject . '</h1>
                            <div style="padding: 9px 14px; border: 1px solid #eeeeee;">' . $content . '</div>
                        </html>
                    </body>';

	return mail($to, $subj, $content, $headers);
}

if (
	isset($_POST['name']) && $_POST['name'] != '' &&
	isset($_POST['mess']) && $_POST['mess'] != '' &&
	isset($_POST['cont']) && $_POST['cont'] != ''
) {
	$message = "";

	$message .= '<p><b>Имя</b><br>' . strip_tags($_POST['name']) . '</p>';
	$message .= '<p><b>Контакты</b><br>' . strip_tags($_POST['cont']) . '</p>';
	$message .= '<p><b>Сообщение</b><br>' . strip_tags($_POST['mess']) . '</p>';

	send('Сайт Fortyfour (контакты)', 'contact@' . $_SERVER['HTTP_HOST'], 'mail@fortyfour.ru', 'Заполнена форма обратной связи на сайте «Fortyfour»', $message);

	printjson_encode(array(
		'status'  => true,
		'message' => 'Спасибо за обращение!',
	));
} else {
	printjson_encode(array(
		'status'  => false,
		'message' => 'Заполните пожалуйста все поля!',
	));
}