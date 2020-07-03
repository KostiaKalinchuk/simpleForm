<?php


require_once 'classes/Db.php';
require_once 'classes/SaveForm.php';

$errors = [];

foreach ($_POST as $key => $value) {
    if (empty($_POST[$key])) {
        $message = ucwords($key) . " field is required";
        $errors[] = $message;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = validate_input($_POST["name"]);
    $email = validate_input($_POST["email"]);
    $phone = validate_input($_POST["phonenumber"]);
    $msg = validate_input($_POST["message"]);
}

function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (!preg_match('/[\.a-z0-9_\-]+[@][a-z0-9_\-]+([.][a-z0-9_\-]+)+[a-z]{1,4}/i', $email)) {
    $errors[] = 'Invalid email';
}

if (!preg_match('/^\+380\d{9}$/', $phone)) {
    $errors[] = 'Invalid phone';
}

echo json_encode($errors);

if (!empty($name) && !empty($email) && !empty($phone) && !empty($msg)) {

    $params = [
        'username' => $name,
        'email' => $email,
        'phonenumber' => $phone,
        'message' => $msg
    ];

    $save = new SaveForm();

    $save->save($params);

    $filename = date("Y-m-d-H-i") . '.txt';
    $cont = implode(",", $params);
    $save->saveToFile($filename, $cont);

}