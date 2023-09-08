<?php
global $modx;
/*Активируем почтовый сервис MODX*/
$modx->getService('mail', 'mail.modPHPMailer');
$modx->mail->set(modMail::MAIL_FROM, $modx->getOption('emailsender'));
$modx->mail->set(modMail::MAIL_FROM_NAME, $modx->getOption('site_name'));

/*Адрес получателя нашего письма*/
$modx->mail->address('to', $_POST['email']);

/*Заголовок сообщения*/
$modx->mail->set(modMail::MAIL_SUBJECT, 'test note');

/*Подставляем чанк с телом письма (предварительно его нужно создать)*/
$modx->mail->set(modMail::MAIL_BODY, $modx->getChunk('email_body'));

/*Отправляем*/
$modx->mail->setHTML(true);
if (!$modx->mail->send()) {
    $modx->log(modX::LOG_LEVEL_ERROR,'An error occurred while trying to send the email: '.$modx->mail->mailer->ErrorInfo);
}
$modx->mail->reset();
var_dump($_POST);

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']: '/katalogi';
header("Location: $redirect");
exit();