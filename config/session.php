<?php

class Session
{
    public function initiate()
    {
        # code...
        return session_start();
    }
}

$session_object = new Session();
$session = $session_object->initiate();
// class Session
// {
//     const active = true;
//     const inactive = false;
//     private $session_instance;
//     private function __construct()
//     {
//         # code...
//     }
//     public function createInstance()
//     {
//         # code...
//         if(!isset(self::$session_instance))
//         {
//             self::$session_instance= new self;
//         }
//         self::$session_instance->startSession();
//         return self::$session_instance;
//     }
//     public function initiate()
//     {
//         if ( $this->sessionvalue == self::inactive )
//         {
//             $this->sessionvalue = session_start();
//         }
        
//         return $this->sessionvalue;
//     }
    
//     public function __set( $name , $value )
//     {
//         $_SESSION[$name] = $value;
//     }
    
//     public function __get( $name )
//     {
//         if ( isset($_SESSION[$name]))
//         {
//             return $_SESSION[$name];
//         }
//     }
    
//     public function __isset( $name )
//     {
//         return isset($_SESSION[$name]);
//     }
    
//     public function __unset( $name )
//     {
//         unset( $_SESSION[$name] );
//     }
        
//     public function destroy()
//     {
//         if ( $this->sessionState == self::SESSION_STARTED )
//         {
//             $this->sessionState = !session_destroy();
//             unset( $_SESSION );
            
//             return !$this->sessionState;
//         }
//         return FALSE;
//     }
// }
// $session = Session::createInstance();