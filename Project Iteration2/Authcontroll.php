<?php
require_once('repositories/Authorization.php');
header('Content-Type: application/json');

if(!empty($_POST["login"]) && !empty($_POST["password"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];

    $auth = new Authorization();

    $admin = null;
    try {
        $admin = $auth->signin($login, $password);
    } catch (Exception $e) {
        $return = array(
            'errorMessage' => $e->getMessage()
        );
        http_response_code(500);
        echo (json_encode($return));
        return;
    }

    $time=time();
    $timeout=time()+60*30;


    if ($admin != null && $admin->getLogin() != null) {
        session_start();
        $_SESSION['admin'] = array(
            'name' => $admin->getName(),
            'surname' => $admin->getSurname(),
            'login' => $admin->getLogin(),
            'time' => $time,
            'timeout' => $timeout

        );

        $return = array(
            'message' => "success"
        );
    } else {
        $return = array(
            'errorMessage' => "Incorrect login or/and password!"
        );
        http_response_code(401);
    }
}
else{
    $return = array(
        'errorMessage' => "Login attempt denied."
    );
    http_response_code(403);
}
echo (json_encode($return));