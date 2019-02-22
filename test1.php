<?php
    require_once 'dboperation.php';

    $response = array();

$response['message'] = "shecdoma!!!! error " . $_POST['username'] . ' ';
echo json_encode($response);

?>