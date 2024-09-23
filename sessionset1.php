<?php
$user_name = 'abc';
$password = 'abc';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_username = $_POST['username'];
    $user_password = $_POST['password'];

    if ($user_name==$user_username && $password === $user_password) {
        session_start(); 

        $_SESSION['username'] = $user_username;
        $_SESSION['loggedin'] = true;
        // echo "Welcome user $username. Login successful!";

        header('Location: dashboard.php');
    } else {
        echo ('nvalid username or password.');
    }
}