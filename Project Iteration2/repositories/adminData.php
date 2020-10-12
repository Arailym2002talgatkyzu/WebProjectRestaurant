<?php
require_once('configs/config.php');
require_once('repositories/Database.php');
require_once('models/Admin.php');

class adminData
{
    private $db;

    /**
     * Authorization constructor.
     */
    public function __construct()
    {
        $this->db = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
    }

    public function getAdmin($login) {
        $link = $this->db->connect();
        $stmt = $link->prepare("SELECT * FROM admins WHERE login = ? LIMIT 1");
        $stmt->bind_param("s", $login);
        /* execute query */
        $stmt->execute();

        /* Get the result */
        $result = $stmt->get_result();

        $row = $result->fetch_assoc();
        if ($row == null) return null;
        $admin = new Admin();
        $admin->setName($row['name']);
        $admin->setSurname($row['surname']);
        $admin->setLogin($row['login']);
        $admin->setPassword($row['password']);
        $admin->setAvatar($row['avatar']);

        return $admin;
    }
}