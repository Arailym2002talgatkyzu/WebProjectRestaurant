<?php
$link = mysqli_connect("localhost", "root", "271707", "sys") OR DIE ("Error. ");
session_start();
if($_POST['email']){
    if($_POST['email']==''){
        echo "empty";
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo "Invalid email";
    }
    $query = mysqli_query($link, "SELECT * FROM users WHERE email = '".$_POST['email']."'");
    if(mysqli_num_rows($query)>0){
        echo "not-available";
    }
    if(mysqli_num_rows($query)==0){
        echo "available";
    }
}

if (isset($_POST['reg-sub'])){
    $email = $_POST['email'];
    $f_name = $_POST['fname'];
    $l_name = $_POST['lname'];
    $pass = $_POST['password'];
    $uname = $_POST['username'];
    $avatar = $_POST['reg-avatar'];

    $sql = "INSERT INTO users  (email,fname ,lname,password,username,avatar) VALUES (?,?,?,?,?,?)";

    $stmt = $link->prepare($sql);
    $stmt->bind_param("ssssss", $email, $f_name, $l_name, $pass, $uname,$avatar);
    $result=$stmt->execute();

    $stmt->close();

    header("Location: contact.php?registered");
}
if (isset($_POST['but-sub'])){
    $uname = $_POST['txt_uname'];
    $pass = $_POST['txt_pwd'];

    $query = mysqli_query($link, "SELECT * FROM users WHERE username = '".$uname."' and password = '".$pass."'");

    if(mysqli_num_rows($query)==0){
        header("Location: contact.php?wrong");
    }
    if(mysqli_num_rows($query)==1){
        $row = mysqli_fetch_assoc($query);
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['username'] = $row['username'];
        $cookie_value = $row['avatar'];
        setcookie('avatar', $cookie_value, time() + (86400 * 30));
        header("Location: profile.php");
    }
}




session_destroy();

$cookie_name = "username";
$cookie_value = "user";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>


<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>





