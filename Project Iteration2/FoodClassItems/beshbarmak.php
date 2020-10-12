<?php
require "mainmenu.php";
$food= new mainmenu();
$food->name="Beshbarmak";
$food->nationality="Kazakh";
$food->price1="5000tg";
$food->price2="2500tg";
$food->sale="20%";
$food->bonus="30 point";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beshbarmak</title>
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
        <img src="../SpecialOrder/beshbarmak.jpg" width="400px" height="300px">
    </div>
    <div class="desc"> <?php $food->printAll(); ?></div>
</div>

</body>
</html>