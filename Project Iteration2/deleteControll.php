<?php
require_once 'MenuItems/hotMenu.php';
require_once 'MenuItems/saladMenu.php';
require_once 'MenuItems/drinkMenu.php';
require_once 'MenuItems/sushiMenu.php';
require_once 'MenuItems/desertMenu.php';
header('Content-Type: application/json');
$menuType=$_POST["type"];
$id=$_POST["id"];

    if($menuType=="hotfood"){
        $change=new hotMenu();
        $change->deleteHot($id);
        $return=array('message'=>"success");
    }
    else if($menuType=="deserts"){
        $change=new desertMenu();
        $change->deleteDesert($id);
        $return=array('message'=>"success");
    }
    else if($menuType=="drinks"){
        $change=new drinkMenu();
        $change->deleteDrink($id);
        $return=array('message'=>"success");
    }
    else if($menuType=="sushi"){
        $change=new sushiMenu();
        $change->deleteSushi($id);
        $return=array('message'=>"success");
    }
    else if($menuType=="salads"){
        $change = new saladMenu();
        $change->deleteSalad($id);
        $return=array('message'=>"success");
    }


echo json_encode($return);