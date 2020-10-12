
<?php
$db_host = "localhost";
$db_name="cooklovers";
$db_user="root";
$db_pass="650464";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


session_start();

if (isset($_SESSION['admin'])) {
    header("Location: AdminProfile.php");
    return;
}


?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>SIGN In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <style>
        .container{
            width: 100%;
            height: auto;
            background-color: #fff;
        }
        .main{
            max-width: 1200px;
            height: auto;
            margin: 0 auto;
        }
        nav{
            width: 100%;
            height: 100px;
            background-color: #fff;
        }
        nav ul{
            float: right;
        }
        nav ul li{
            display: inline-block;
            list-style-type: none;
        }
        nav ul li a{
            text-decoration: none;
            color: black;
            line-height: 100px;
            padding: 35px 10px;
            font-size: 18px;
            font-weight: normal;
            letter-spacing: 0.5px;
        }
        .logo{
            float: left;
            line-height: 100px;
        }



        .container .column1 li{
            font-family: monospace;
            font-size: 20px;
            letter-spacing: 2px;
            line-height: 20px;
        }
        a:hover {
            background-color: green;
            color: white;
        }

        .slider{
            width: 100%;
            height: 500px;
            background-image: url(https://mediabank.valkenhorst.nl/imagebank/images/263/image83500/c500x1400.jpg);
            background-position: center;
            display: flex;
            align-items: center;
        }
        .slider .title{
            width: 40%;
            margin-left: 5%;
            height: auto;
            left: 9%;
        }
        .slider .title h1{
            font-size:50px;
            color: white;
            line-height: 75px;
        }
        .slider .title h1 span{
            color: orange !important;
            font-size: 50px;
        }
        .slider .title p{
            font-size: 15px;
            color: white;
            line-height: 1.5;
            margin-top: 15px;
            padding-right: 20px;
        }
        .slider .title .btn{
            color: white;
            background-color: green;
            border-radius: 3px;
            border-color: orange;
            padding: 16px 30px;
            text-align: center;
            letter-spacing: 0.5px;
            text-decoration: none;
            margin-right: 10px;
            line-height: 26px;
            display: inline-block;
            font-size: 25px;
            font-family: Arial;
            margin-top: 45px;
            transition: 1s all;
        }
        .slider .title .btn:hover{
            background-color: white;
            color: green;
        }
        .reg-form{
            background: #000;
            z-index: 1;
            font-family: Candara, sans-serif;
            position: absolute;
            top: 65%;
            left: 65%;
            transform: translate(-50%, -50%);
            width: 300px;
            padding: 0 45px 30px 45px;
            text-align: center;
            border-radius: 10px;
            opasity: 0.9;
        }
        .reg-form input{
            outline: 0;
            background: none;
            font-size: 15px;
            color:#fff;
            text-align: center;
            width: 265px;
            margin-bottom: 30px;
            padding: 15px;
            box-sizing: border-box;
            border: 2px solid green;
            border-radius: 25px;
            transition: 0.5s;
            transition-property: width;
        }
        .reg-form input:hover{
            width: 300px;
        }
        .reg-form input:focus{
            width: 300px;
        }
        .reg-form button{
            outline: 0;
            background: none;
            color: #fff;
            font-size: 14px;
            text-transform: uppercase;
            width: 150px;
            padding: 15px;
            border: 2.5px solid green;
            border-radius: 25px;
            cursor: pointer;
            transition:0.5s;
            transition-property: background, transform;
        }
        .reg-form button: hover, .reg-form button:active, .reg-form button:focus{
            background: green;
            transform: scale(1.1);
        }


    </style>
    <script>
    $(document).ready(function () {
     $("#submbtn").click(function () {
         event.preventDefault();
         $.ajax('Authcontroll.php',{
             type:"POST",
             data:{
                 login:$("#uname").val(),
                 password:$("#pass").val()
             },
             accepts: "application/json; charset=utf-8",
             success:function (data) {
                 if(data.message=="success"){
                     window.location.href="AdminProfile.php";
                 }
             },
             error:function (errorData, textStatus, errorMessage) {
              var mess=(errorData.responseJSON!=null)? errorData.responseJSON.errorMessage : '';
                 $("#error").text('Error: ' + mess + ', ' + errorData.status);

                 $("#error").show();
             }
         })
     })
    })
    </script>
</head>

<body>
<div class="container">
    <div class="main">
        <nav>
            <div class="logo">
                <h1>Food&CookLovers</h1>
            </div>
            <ul>
                <li><a href="indexx.php">HOME</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="signin.php">SIGN IN</a></li>
            </ul>
        </nav>
    </div>
    <div class="slider">
        <div class="title">
            <h1>WELCOME, <span>FOODLOVERS!</span></h1>
            <p style="width: 300px; text-align: center;">“If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.” </p>
            <a href="contact.php" class="btn">SIGN UP</a>
        </div>
    </div>

    <form class = 'reg-form' >">
        <span  id="error" style="font-size: 30px; font-family: Gabriola; color:orange"></span>
        <h1 style="text-align: center; background-color: black; color: white; font-size: 50px; font-family: Gabriola; ">Sign In </h1>

        <input name="uname" type="text" placeholder="User Name" id="uname" required>
        <input name="pass" type="password" placeholder="Password" id="pass" required>
        <button type="submit" id="submbtn">Sign IN</button>
    </form>
</div>
</body>
</html>

