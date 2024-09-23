<?php
ini_set('display_errors', 1);// it will show an error if there is any error

$connection = new mysqli('127.0.0.1', 'root', 'admin', 'sita');// host, username, password ,database
if ($connection->connect_error) {
    var_dump($connection->connect_error);// if there is an error, it will be displayed
}