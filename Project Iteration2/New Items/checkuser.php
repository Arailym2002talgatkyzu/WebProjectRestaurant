<?php
$host = "localhost";
$user = "root";
$password = "271707";
$dbname = "sys";

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$uname = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);

if ($uname != "" && $password != ""){

    $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['uname'] = $uname;
        echo 1;
    }else{
        echo 0;
    }

}
