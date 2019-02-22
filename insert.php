<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require 'db_connect.php';
        createStudent();
    }

    function createStudent() {
        global $connect;

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];


        $query = "INSERT INTO student (firstname, lastname, age) VALUES ('$firstname', '$lastname', '$age')";

        mysqli_connect($connect, $query) or die (mysqli_error($connect));
        mysqli_close($connect);


    }

?>