<?php
$conn = new mysqli('localhost', 'username', 'password', 'db_name');

//die if connection was not successful
if ($conn->connect_error) {
    die("Connection failed: ");
} else {
    echo "Connection successful";
}
