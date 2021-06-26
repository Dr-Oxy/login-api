<?php

// var_dump($_POST);
$data = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
];

return json_encode($data);