<?php

include_once('../user.php');
$user_name = $_POST['username'];
$password = $_POST['password'];

if(empty($user_name)&&empty($password))
{
    echo 'Username and Password are required ...';
    die();
}

$user = new User($user_name,$password);
$user->Register();


// if(!isset($user_name)&&!isset($password))
// {
//     echo 'Please fill out the fields';
//     die();
// }

// $query = "INSERT INTO
// user_data(
//   `user_id`,
//   `password`,
//   `test_given`,
//   `marks_obtained`
// )
// VALUES('{$user_name}', '{$password}', 0, 0)
// ";
// $execute = $conn->prepare($query);
// $execute->execute();