<?php
    require_once 'dboperation.php';

    $response = array();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['username']) AND isset($_POST['email']) AND isset($_POST['password'])    ) {
            $db = new dboperation();

            if ($db->createUser($_POST['username'], $_POST['password'], $_POST['email'])) {
                $response['error'] = false;
                $response['message'] = "User regostered succesfully";
            }else {
                $response['error'] = false;
                $response['message'] = "Some error!";
            }
        }else {
            $response['error'] = false;
            $response['message'] = "Some error!";
        }
    }else {
        $response['error'] = true;
        $response['message'] = "Ivanlid request!";
    }

echo json_encode($response);

?>