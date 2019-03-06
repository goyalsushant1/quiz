<?php

ini_set('display_errors',1);
include_once('../../config/dbconfig.php');
include_once('../../config/session.php');

class AdminLogin
{
    private $name,$admin_pass;
    public function __construct($adminname,$password)
    {
        # code...
        $this->name= $adminname;
        $this->admin_pass= $password;
    }
    public function Login()
    {
        # code...
        global $connection_object;
        $query = "SELECT * FROM admin_data WHERE adminname='$this->name'";
        $execute = $connection_object->prepare($query);
        $execute->execute();
        $value = $execute->fetch(PDO::FETCH_ASSOC);
        if($execute)
        {
            if ($value['adminname']==$this->name && $value['password']==$this->admin_pass) {
                # code...
                $_SESSION['LOGIN']=true;
                echo "Login Successful <br>".
                "Create Quiz <a href="."../quizcreate".">here</a>";
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
}

$admin_name = $_POST['adminname'];
$password = $_POST['password'];

if(empty($admin_name)&&empty($password))
{
    echo 'Username and Password are required ...';
    die();
}

$admin = new AdminLogin($admin_name,$password);
$admin->Login();