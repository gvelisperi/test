<?php
    class  dboperation {
        private $con;

        function __construct()
        {
            require_once dirname (__FILE__) . '/dbconnect.php';
            $db = new dbconnect();
            $this->con = $db->connect();
        }

        function createUser($username, $password, $email ) {
            $password = md5($password);
            $stmt = $this->con->prepare("INSERT INTO `users` (`id`, `username`,
            `password`, `email`) VALUES (NULL, ?, ?, ?) ");
            $stmt->bind_param("sss", $username, $password, $email) ;
            if ($stmt->execute()){
                return true;
            }else {
                return false;
            }

        }
    }
?>