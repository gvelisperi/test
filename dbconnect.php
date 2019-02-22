<?php


    class dbconnect {
        private $con;

        function __construct() {

        }
        function connect() {
            include_once driname(__FILE__).'/constants.php';
            $this->con = new mysqli(hostname, user,password,databaseName);

            if (mysqli_connect_errno()) {
                echo "Failed to connect with database" . mysqli_connect_err();
            }

            return $this->con;
        }


    }
?>