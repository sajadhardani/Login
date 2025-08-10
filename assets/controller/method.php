<?php


// signup method
function signup($data){
    // $username = $data['username'];
    $username = validate($data['username']);
    $email = validate($data['email']);
    $password = validate($data['password']);
    $passwordConfirm = validate($data['passwordConfirm']);

    if ($password !== $passwordConfirm){
        echo 'error';
    }
    echo "everything is ok";
    
}

// validate data
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}