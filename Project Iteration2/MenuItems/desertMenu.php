<?php
require_once ('configs/config.php');
require_once ('repositories/Database.php');
require_once ('MenuItems/Menu.php');

class desertMenu
{
    private $db;

    public function __construct()
    {
        $this->db = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
    }

    public function insertionDesert($menu)
    {
        $link = $this->db->connect();
        $stmt = $link->prepare("INSERT INTO deserts(id, img, name, price) VALUES (?,?,?,?)");
        $stmt->bind_param("issi",
            $menu->getId(),
            $menu->getImg(),
            $menu->getName(),
            $menu->getPrice());
        $stmt->execute();
        $stmt->close();
    }

    public function updateDesert($id, $price)
    {
        $link = $this->db->connect();
        $stmt = $link->prepare("UPDATE deserts SET price=? WHERE id=?");
        $stmt->bind_param("ii",$price, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteDesert($id)
    {
        $link = $this->db->connect();
        $stmt = $link->prepare("DELETE FROM deserts WHERE id=?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();
    }


}