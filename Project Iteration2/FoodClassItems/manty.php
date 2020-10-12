<?php
require "mainmenu.php";
$manty= new mainmenu();
$manty->name="Manty";
$manty->nationality="Turkish";
$manty->price1="1500tg";
$manty->price2="700tg";
$manty->sale="5%";
$manty->bonus="0 point";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manty</title>
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
        <img src="../SpecialOrder/manty.jpg" width="400px" height="300px">
    </div>
    <div class="desc"> <?php $manty->printAll(); ?></div>
</div>

</body>
</html>
