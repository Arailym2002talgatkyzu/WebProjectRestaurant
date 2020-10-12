<?php
require_once 'MenuItems/hotMenu.php';
require_once 'MenuItems/saladMenu.php';
require_once 'MenuItems/drinkMenu.php';
require_once 'MenuItems/sushiMenu.php';
require_once 'MenuItems/desertMenu.php';
header('Content-Type: application/json');

    $menu=new Menu();
    $menu->setId($_POST["id"]);
    $menu->setName($_POST["name"]);
    $menu->setImg($_POST["img"]);
    $menu->setPrice($_POST["price"]);
    $menuType=$_POST["type"];
    if($menuType=="hotfood"){
        $change=new hotMenu();
        $change->insertionHot($menu);
        $return=array('message'=>"success");
    }
    else if($menuType=="deserts"){
        $change=new desertMenu();
        $change->insertionDesert($menu);
        $return=array('message'=>"success");
    }
    else if($menuType=="drinks"){
        $change=new drinkMenu();
        $change->insertionDrink($menu);
    }
    else if($menuType=="sushi"){
        $change=new sushiMenu();
        $change->insertionSushi($menu);
        $return=array('message'=>"success");
    }
    else if($menuType=="salads"){
        $change = new saladMenu();
        $change->insertionSalad($menu);
        $return=array('message'=>"success");
}
echo json_encode($return);