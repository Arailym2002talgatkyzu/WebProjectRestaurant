<?php
require "mainmenu.php";
$kurdak= new mainmenu();
$kurdak->name="Kuyrdak";
$kurdak->nationality="Kazakh";
$kurdak->price1="1000tg";
$kurdak->price2="500tg";
$kurdak->sale="5%";
$kurdak->bonus="1point";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lagman</title>
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
        <img src="../SpecialOrder/lagman.jpg" width="400px" height="300px">
    </div>
    <div class="desc"> <?php $kurdak->printAll(); ?></div>
</div>

</body>
</html>
