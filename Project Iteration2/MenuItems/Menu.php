<?php


class Menu
{
private $id;
private $img;
private $name;
private $price;

public function __construct()
{
}
    /**
     * @return mixed
     */
public function getId(){
    return $this->id;
}
    /**
     * @param  mixed $id
     */
public function setId($id){
    $this->id=$id;
}

    /**
     * @return mixed
     */
public function getImg(){
    return $this->img;
}

    /**
     * @param  mixed $img
     */
public function setImg($img){
    $this->img=$img;
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
public function getPrice(){
    return $this->price;
}

    /**
     * @param mixed $price
     */
public function setPrice($price){
    $this->price=$price;
}
}
