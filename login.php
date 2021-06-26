<?php

// var_dump($_POST);
$data = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
];

echo json_encode($data);
