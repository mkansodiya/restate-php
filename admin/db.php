<?php
// $con = new PDO("mysql:host=localhost;dbname=restate;", "root", "");
session_start();
class database
{
    private $host;
    private $dbname;
    private $username;
    private $password;

    protected function connect()
    {
        $this->host = "localhost";
        $this->dbname = "restate";
        $this->username = "root";
        $this->password = "";
        $db = "mysql:host={$this->host};dbname={$this->dbname}";
        $con = new PDO($db, $this->username, $this->password);
        if (!$con) {
            die("database connection error");
        }
        return $con;
    }
}
