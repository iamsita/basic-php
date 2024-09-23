<?php

class Database
{
 
    public $conn;

    public function __construct()
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        $this->conn = new mysqli('127.0.0.1', 'root', 'admin', 'sita');
        if ($this->conn->connect_error) {
            var_dump($this->conn->connect_error);
        } else {
            echo 'Connection successful';
        }
    }
}
