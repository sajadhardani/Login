<?php
include_once 'config.php';

// signup method
function signup($data){
    // $username = $data['username'];
    $username = validate($data['username']);
    $email = validate($data['email']);
    $password = validate($data['password']);
    $passwordConfirm = validate($data['passwordConfirm']);

    if ($password !== $passwordConfirm){
        echo 'Error';
        die;
    }
    // echo "bro wtf u did it";
    
}

// validate data
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// database connection
function dbsConnection(){
    $server = DB_SERVER;
    $username = DB_USER;
    $password = DB_PASS;
    $dbName = DB_NAME;

    $connection = mysqli_connect($server, $username, $password, $dbName);

    if(!$connection){
        die('DBS connection error!  ');
    }

    return $connection;
}