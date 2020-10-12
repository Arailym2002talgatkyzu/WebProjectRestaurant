<?php
require "mainmenu.php";
$food= new mainmenu();
$food->name="Samsa";
$food->nationality="Uzbek";
$food->price1="800tg";
$food->price2="400tg";
$food->sale="0%";
$food->bonus="0 point";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Samsa</title>
    <style>
        a p{
            width: 100px;
            height: 50px;
            padding: 10px 10px;
        }
        .btn:hover{
            background-color: green;
            color: white;
        }
        .flex{
            display: flex;
            width: 100%;
            margin-left: 30px;
        }
        .desc{
            font-size: 30px;
            font-family: Gabriola;
            color: #004C03;
            margin-left: 30px;
        }
    </style>
</head>
<body>
<a href="../menu.php"><p class="btn">Back to Menu</p></a>
<div class="flex">
    <div>
        <img src="../SpecialOrder/samsa.jpg" width="400px" height="300px">
    </div>
    <div class="desc"> <?php $food->printAll(); ?></div>
</div>

</body>
</html>