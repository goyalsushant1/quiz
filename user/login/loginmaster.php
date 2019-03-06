<?php
ini_set('display_errors',1);
include_once('../user.php');

$user_name = $_POST['username'];
$password = $_POST['password'];

if(empty($user_name)&&empty($password))
{
    echo 'Username and Password are required ...';
    die();
}

$user = new User($user_name,$password);
$user->Login();

// $user_name = $_POST['username'];
// $password = $_POST['password'];

// if(!isset($user_name)&&!isset($password))
// {
//     echo 'Please fill out the fields';
//     die();
// }

// $query = "SELECT * FROM user_data WHERE user_id = '$user_name'";
// $execute = $conn->prepare($query);
// $execute->execute();