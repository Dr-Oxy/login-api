<?php

// var_dump($_POST);
$data = [
    'email' => $_POST['email'],
    'token' => md5($_POST['email'] . '' . $_POST['password'])
];

echo json_encode($data);
