<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn = new mysqli('127.0.0.1', 'root', 'admin', 'sita');
if ($conn->connect_error) {
    var_dump($conn->connect_error);
} else {
    echo 'Connection successful';
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $person_id = $_POST['person_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    $sql = "INSERT INTO persons (person_id,first_name, last_name, address,city) VALUES ('$person_id','$first_name', '$last_name', '$address','$city')";
    $result = $conn->query($sql);
    if ($result === true) {
        echo 'New record created successfully';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}