<?php


class Database
{
    var $host   = "localhost"; //database server
    var $user     = "root"; //database login name
    var $pass     = "650464"; //database login password
    var $database = "cooklovers"; //database name

    public $link;

    /**
     * Database constructor.
     * @param string $host
     * @param string $user
     * @param string $pass
     * @param string $database
     */
    public function __construct($host, $user, $pass, $database)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->database = $database;
    }

    public function connect()
    {

        $this->link = new mysqli($this->host,$this->user,$this->pass,$this->database);
        if ($this->link->connect_error)
        {
            throw new Exception("Cannot connect: " . $this->link->connect_error);
        }
        else
            return $this->link;

    }


}



