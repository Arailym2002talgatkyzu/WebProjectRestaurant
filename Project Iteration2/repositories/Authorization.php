<?php
require_once('configs/config.php');
require_once('repositories/Database.php');
require_once('models/Admin.php');

class Authorization
{
    private $db;

    /**
     * Authorization constructor.
     */
    public function __construct()
    {
        $this->db = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
    }


    public function signin($login, $password) {
        $link = $this->db->connect();
        $stmt = $link->prepare("SELECT name, surname, login FROM admins WHERE login = ? AND password = ? LIMIT 1");
        $stmt->bind_param("ss", $login, $password);
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
        $stmt->close();
        return $admin;
    }
    public function update($avatar, $password, $login){
        $link=$this->db->connect();
        $stmt=$link->prepare("UPDATE admins set avatar=?, password=? where login=?");
        $stmt->bind_param("sss",$avatar, $password, $login );
        $stmt->execute();
        $stmt->close();
    }


}