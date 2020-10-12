<?php
require_once "repositories/Authorization.php";
header('Content-Type: application/json');
$login=$_POST["login"];
    $password=$_POST["password"];
    $avatar=$_POST["avatar"];
    $admin=new Authorization();
    $admin->update($avatar, $password, $login);
$return=array('message'=>"success");
echo json_encode($return);