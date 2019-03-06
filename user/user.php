<?php
include_once('../../config/dbconfig.php');
include_once('../../config/session.php');

class User
{
    private $name,$user_pass;
    public function __construct($username,$password)
    {
        # code...
        $this->name= $username;
        $this->user_pass= $password;
    }
    public function Login()
    {
        # code...
        global $connection_object;
        $query = "SELECT * FROM user_data WHERE username='$this->name'";
        $execute = $connection_object->prepare($query);
        $execute->execute();
        $value = $execute->fetch(PDO::FETCH_ASSOC);
        if($execute)
        {
            if ($value['username']==$this->name && $value['password']==$this->user_pass) {
                # code...
                $_SESSION['USER_ID'] = $value['user_id'];
                echo "Login Successful <br>".
                "Start your quiz <a href="."../attemptquiz/attemptquiz.php".">here</a>";
            } 
            else {
                # code...
                echo "Login Unsuccessful ...<br>".
                "Please check your username and password ...<br>".
                "Retry Login : <a href="."login.php".">Click Here</a>";
            }
            
        }
        else {
            # code...
            echo "Login Unsuccessful ...<br>".
                "Something went Wrong.  Please try again...<br>".
                "Retry Login : <a href="."login.php".">Click Here</a>";
        }
    }
    public function Register()
    {
        # code...
        global $connection_object;
        $query = "INSERT INTO user_data(`username`, `password`) VALUES('$this->name', '$this->user_pass')";
        $execute = $connection_object->prepare($query);
        $execute->execute();
        if ($execute) {
            # code...
            echo "Registeration Successful<br>".
                "Login Now to take test ...<br>".
                "Click <a href="."../login/login.php".">here</a> to login";
        } else {
            # code...
            echo "Registration Unsuccessful ...<br>".
                "Something went Wrong.  Please check back later<br>".
                "Retry Registration : <a href="."register.php".">Click Here</a>";
        }
        
    }
}

// $username = $_POST['username'];
// $password = $_POST['password'];

// if(empty($username)&&empty($password))
// {
//     echo 'Username and Password are required';
//     die(); 
// }

//$user = new User($username,$password);
// if(isset($_POST['login']))
// {
//     $user->Login();
// }
// if(isset($_POST['register']))
// {
//     $user->Register();
// }