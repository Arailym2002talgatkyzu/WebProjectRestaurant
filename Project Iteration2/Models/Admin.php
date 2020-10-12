<?php


class Admin
{
    private $name;
    private $surname;
private $login;
private $password;
private $avatar;
public  function __construct()
{
}
    /**
     * @return mixed
     */
public function getName(){
    return $this->name;
}
    /**
     * @param  mixed $name
     */
public function setName($name){
    $this->name=$name;
}
    /**
     * @return mixed
     */
public function getSurname(){
    return $this->surname;
}
    /**
     * @param  mixed $surname
     */
public function setSurname($surname){
    $this->surname=$surname;
}

    /**
     * @return mixed
     */
public function getLogin(){
    return $this->login;
}

    /**
     * @param  mixed $login
     */
public function setLogin($login){
    $this->login=$login;
}

    /**
     * @return mixed
     */
public function getPassword(){
    return $this->password;
}

    /**
     * @param mixed $password
     */
public function setPassword($password){
    $this->password=$password;
}
    /**
     * @return mixed
     */
public function getAvatar(){
    return $this->avatar;
}
    /**
     * @param  mixed $avatar
     */
public function setAvatar($avatar){
    $this->avatar=$avatar;
}
}