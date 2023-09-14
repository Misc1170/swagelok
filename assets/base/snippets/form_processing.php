<?php

$emailPattern = '/^[A-Z0-9+_.-]+@[A-Z0-9.-]+$/i';
$phonePattern = '/^\+7\([0-9]{3}\)-[0-9]{3}-[0-9]{2}-[0-9]{2}$/';
$isNotValid = false;
$data = [];
$err = [];

if (isset($_POST)) {
    $index = 0;
    foreach ($_POST as $key => $item) {

        if ($item != "") {
            $data[$key] = clearData($item);
        }
    }
    if (!preg_match($emailPattern, $data['email'])) {
        $isNotValid = true;
    }
    if (preg_match($phonePattern, $data['phone'])) {
        $isNotValid = true;
        $err['phone'] = '<'
    }
    var_dump($data);
    echo json_encode($data);
}

function clearData($val)
{
    $val = trim($val);
    $val = stripslashes($val);
    $val = strip_tags($val);
    $val = htmlspecialchars($val);
    return $val;
}