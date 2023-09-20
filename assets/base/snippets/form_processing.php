<?php
global $modx;

$phonePattern = '/^\+7\([0-9]{3}\)-[0-9]{3}-[0-9]{2}-[0-9]{2}$/';
$emailPattern = '/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{1,}$/';
$countIndex = '/^count-[0-9]+$/';
$isValid = true;
$data = [];
$errors = [];
//function validation(string $regPattern, string $key, string $text, array $data)
//{
//    if (isset($data[$key])) {
//        if (!preg_match($regPattern, $data[$key])) {
//            $isValid = false;
//            return '<span class="error-message">' . $text . '</span>';
//        }
//    }
//    return false;
//}

function clearData($val)
{
    $val = trim($val);
    $val = stripslashes($val);
    $val = strip_tags($val);
    $val = htmlspecialchars($val);
    return $val;
}

if (isset($_POST)) {
    foreach ($_POST as $key => $item) {
        if (!empty($item)) {
//        if ($item != "") {
            $data[$key] = clearData($item);
            if (preg_match($countIndex, $key)) {
                if (!is_numeric($item)) {
                    $errors['count'][$key] = '<span class="error-message">Здесь должно быть число</span>';
                }
            }
        }
    }
//    $errors['phone'] = validation($phonePattern, 'phone', 'Телефон введён неправильно', $data);
//    $errors['email'] = validation($emailPattern, 'email', 'Email введён неправильно', $data);

    if (array_key_exists('phone', $data)) {
        if (!preg_match($phonePattern, $data['phone'])) {
            $errors['phone'] = '<span class="error-message">Телефон введён неправильно</span>';
        }
    }
    if (array_key_exists('email', $data)) {
        if (!preg_match($emailPattern, $data['email'])) {
            $errors['email'] = '<span class="error-message">Email введён неправильно</span>';
        }
    }
}
if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success';

//    $message = 'test mail';
//    $modx->getService('smarty','smarty.modSmarty');
//    $modx->mail->set(modMail::MAIL_BODY, $message);
//    $modx->mail->set(modMail::MAIL_FROM, 'alex.new.alex.new@gmail.com');
//    $modx->mail->set(modMail::MAIL_FROM_NAME, 'Johnny Tester');
//    $modx->mail->set(modMail::MAIL_SUBJECT, 'Check out my new email template!');
//    $modx->mail->address('to', 'sloopy1170@gmail.com');
//    $modx->mail->setHTML(true);
//    if (!$modx->mail->send()) {
//        $modx->log(modX::LOG_LEVEL_ERROR, 'An error occurred while trying to send the email: ' . $modx->mail->mailer->ErrorInfo);
//    }
//    $modx->mail->reset();
//    var_dump('В письме');
//    var_dump($modx->mail);
}
mail('tgk1170@yandex.ru', 'Тема письма', 'Текст письма', 'From: sender@example.com');

echo json_encode($data, JSON_UNESCAPED_UNICODE);
