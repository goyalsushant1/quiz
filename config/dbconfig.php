<?php
ini_set('display_errors',1);
class DB_Connection
{
    private $servername,$dbname,$username,$password;
    public function __construct($servername,$dbname,$username,$password)
    {
        # code...
        $this->servername = $servername;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }
    public function connectdb()
    {
        # code...
        try {
            //code...
            $connection = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            return $connection;
        } 
        catch (PDOException $exception) {
            echo 'Connection Refused'.$e;
        }
    }
}

$object = new DB_Connection('localhost','quiz','root','password@123');
$connection_object = $object->connectdb();