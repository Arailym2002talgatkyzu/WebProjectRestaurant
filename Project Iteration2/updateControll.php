<?php
require_once 'MenuItems/hotMenu.php';
require_once 'MenuItems/saladMenu.php';
require_once 'MenuItems/drinkMenu.php';
require_once 'MenuItems/sushiMenu.php';
require_once 'MenuItems/desertMenu.php';
header('Content-Type: application/json');

    $menu=new Menu();
    $menuType=$_POST["type"];
    $id=$_POST["id"];
    $price=$_POST["price"];
    if($menuType=="hotfood"){
        $changeFood=new hotMenu();
        $changeFood->updateHot($id, $price);
        $return=array('message'=>"success");
    }
    else if($menuType=="deserts"){
        $changeDesert=new desertMenu();
        $changeDesert->updateDesert($id, $price);
        $return=array('message'=>"success");
    }
    else if($menuType=="drinks"){
        $changeDrink=new drinkMenu();
        $changeDrink->updateDrink($id, $price);
        $return=array('message'=>"success");
    }
    else if($menuType=="sushi"){
        $changeSushi=new sushiMenu();
        $changeSushi->updateSushi($id, $price);
        $return=array('message'=>"success");
    }
    else if($menuType=="salads"){
        $changeSalad = new saladMenu();
        $changeSalad->updateSalad($id, $price);
        $return=array('message'=>"success");
    }

echo json_encode($return);
