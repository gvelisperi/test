<?php

    define('hostname', 'localhost');
    define('user', 'root');
    define('password', '');
    define('databaseName', 'android');



    $connect = mysqli_connect(hostname,user,passwrod,databaseName) ;

/*

//apopt196_hook
function db_connect() {
        $host = "localhost";
        $user = "root"; // apopt196_hook1
        $pswd = "";
        $db = "hk";
        
        $mysqli = new mysqli ($host, $user, $pswd, $db);
        $mysqli->set_charset('utf8mb4');
        
        if (mysqli_connect_errno()) {
       printf("no connect to server!2: %s\n", mysqli_connect_error());
    }
    return $mysqli;

}
$mysqli = db_connect(); 
 
//------->
class db  {
  public static $mysqli = null;
  const HOST = "localhost";
  const USER = "root";
  const PASSWORD = "";
  const BASE = "hk";
   
  function __construct() { 
    $this->mysqli = new mysqli(self::HOST, self::USER, self::PASSWORD, self::BASE);
    if ($this->mysqli) { 
       $this->mysqli->query("SET NAMES 'utf8mb4'");
       self::$mysqli = $this->mysqli;
       return $this->mysqli;
    }else{
      exit("no connect to server!");
    }
  }
   
  
  
}
 /*
  * mysqli_query ($conn,"set character_set_results='utf8mb4'");
mysqli_query ($conn,"set collation_connection='utf8mb4_general_ci'");
mysqli_query($conn,"set character_set_client='utf8mb4'");
  */
 
?>