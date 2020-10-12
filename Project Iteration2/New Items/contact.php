<?php
$servername = "localhost";
$username = "root";
$password = "271707";
$dbname = "sys";
if (isset($_POST['reg-submit']))
{
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO user (First, Last, username, password, Email)
      VALUES (:First, :Last, :User, :Password, :Email)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':First', $_POST['fname'], PDO::PARAM_STR);
        $stmt->bindParam(':Last', $_POST['lname'], PDO::PARAM_STR);
        $stmt->bindParam(':User', $_POST['usname'], PDO::PARAM_STR);
        $stmt->bindParam(':Password', $_POST['pass'], PDO::PARAM_STR);
        $stmt->bindParam(':Email', $_POST['email'], PDO::PARAM_STR);

        $stmt->execute();
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

$conn = null;

?>
    <!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>COOKLOVERS</title>
 </head>
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
     .slider .title .btn:hover{
         background-color: white;
         color: green;
     }

     .container .column1 li{
         font-family: 'Zhi Mang Xing', cursive;
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
         height: 650px;
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
     .reg-form{
         background: #000;
         z-index: 1;
         font-family:'Zhi Mang Xing', cursive;
         position: absolute;
         top: 75%;
         left: 50%;
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
                <li><a href="User.php">USER</a> </li>
			</ul>
		</nav>
	</div>
</div>
    <div class="slider">
        <div class="title">
            <h1>WELCOME, <span>FOODLOVERS!</span></h1>
            <p style="width: 300px; text-align: center;">“If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.” </p>
            <a href="Delete.php" class="btn"> DELETE</a>
            <a href="signin.php" class="btn"> Sign IN</a>


        </div>
    </div>







<form action="checker.php" class ='reg-form' method="post" class="auth" id="login">
        <h1 style="text-align: center; background-color: black; color: white; font-size: 50px; font-family: Gabriola; " id="sign">Registration form</h1>
    <span id="reg-status" class="reg"></span>
        <input name = 'fname'type="text" id="fname" placeholder="First Name" required>
        <input name="lname" type="text" id="lname" placeholder="Last Name" required>
        <input name="uname" type="text" id="uname" placeholder="User Name" required>
        <input name="pass" type="text" id="pass" placeholder="Password" required>
        <input name="email" id="email" id="email" type="text" placeholder="Email" required>
    <input type="text" name="reg-avatar" id="reg-avatar" class="sign" placeholder="avatar" required>
        <button type="submit" class="sign" id="reg-sub">Sign Up</button>
    </form>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $(document).ready(function () {


        $("#email").bind('input', function () {
            var email = $('#email').val();
            if(email != '') {
                $('#reg-status').show();
                $('#reg-status').text("loading...").css('color', 'red');
                $.ajax({
                    type: "POST",
                    url: "checkuser.php",
                    data: {email: $("#email").val()},
                    success: function (data) {
                        if (data == "available") {
                            $('#reg-status').show();
                            $('#reg-status').text("Email is available").css('color', 'blue');
                        }
                        if (data == "not-available") {
                            $('#reg-status').show();
                            $('#reg-status').text("Email is not available").css('color', 'red');
                        }
                    },
                    error: function (httpRequest, status, error) {
                        $('#reg-status').text('Error: ' + error + ', ' + httpRequest.status).css('color', 'red');
                    }
                });
            }
            if(email.length == 0){
                $('#reg-status').hide();
            }
        });
    })
</script>
</body>
</html>