<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body{
        margin-top: 0;
    }
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
        font-family: sans-serif;
    }
    nav{
        margin-top: 0;
        width: 100%;
        height: 100px;
        background-color: white;
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
    a:hover {
        background-color: green;
        color: white;
    }

</style>
<body>
    <div class="main">
        <nav>
            <div class="logo">
                <h1>Food&CookLovers</h1>
            </div>
            <ul>
                <li><a href="indexx.php">HOME</a></li>
                <li><a href="menuBook.php">MENU</a></li>
                <li><a href="signin.php">SIGN IN</a></li>
            </ul>
        </nav>
    </div>


</body>
</html>