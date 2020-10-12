<?php
require_once ('configs/config.php');
require_once ('repositories/Database.php');
require_once ('MenuItems/Menu.php');

class sushiMenu
{
    private $db;

    public function __construct()
    {
        $this->db = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
    }

    public function insertionSushi($menu)
    {
        $link = $this->db->connect();
        $stmt = $link->prepare("INSERT INTO sushi(id, img, name, price) VALUES (?,?,?,?)");
        $stmt->bind_param("issi",
            $menu->getId(),
            $menu->getImg(),
            $menu->getName(),
            $menu->getPrice());
        $stmt->execute();
        $stmt->close();
    }

    public function updateSushi($id, $price)
    {
        $link = $this->db->connect();
        $stmt = $link->prepare("UPDATE sushi SET price=? WHERE id=?");
        $stmt->bind_param("ii", $price, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteSushi($id)
    {
        $link = $this->db->connect();
        $stmt = $link->prepare("DELETE FROM sushi WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}