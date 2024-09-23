<?php
require '../classes/Person.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $data = [
        'person_id'  => $_POST['person_id'],
        'first_name' => $_POST['first_name'],
        'last_name'  => $_POST['last_name'],
        'address'    => $_POST['address'],
        'city'       => $_POST['city'],
    ];
    $person = new Person();
    if ($_POST['_method'] === 'PUT') {
        $person->update($data);
    } else {
        $person->insert($data);
    }
    header('Location: table.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $person = new Person();
    $result = $person->getRecord($_GET['person_id']);
    $person->delete($_GET['person_id']);
    header('Location: table.php');
}
