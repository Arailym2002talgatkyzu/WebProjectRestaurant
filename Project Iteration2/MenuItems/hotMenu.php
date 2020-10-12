<?php

require_once('configs/config.php');
require_once('repositories/Database.php');
require_once('MenuItems/Menu.php');
class hotMenu{
private $db;

public function __construct()
{
    $this->db= new Database(DB_SERVER,DB_USER, DB_PASS, DB_DATABASE );
}
public function insertionHot($menu){
    $link = $this->db->connect();
    $stmt = $link->prepare("INSERT INTO hotfood(id, img, name, price) VALUES (?,?,?,?)");
    $stmt->bind_param("issi",
      $menu->getId(),
    $menu->getImg(),
    $menu->getName(),
    $menu->getPrice());
    $stmt->execute();
    $stmt->close();
}

public function updateHot($id, $price){
    $link=$this->db->connect();
    $stmt=$link->prepare("UPDATE hotfood SET price=? WHERE id=?");
    $stmt->bind_param("ii", $price, $id);
    $stmt->execute();
    $stmt->close();
}

public function deleteHot($id){
    $link=$this->db->connect();
    $stmt=$link->prepare("DELETE FROM hotfood WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

}