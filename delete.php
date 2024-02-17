<?php

include 'connection.php';

// Check if the required parameter is set
if (isset($_POST['id'])) {
    $con = dbconnection();

    $id = $_POST['id'];

    $query = "DELETE FROM flutterfinals WHERE id =$idf";

    $result = mysqli_query($con, $query);

    if ($result) {
        $response = array("success" => "true");
    } else {
        $response = array("success" => "false");
    }

    echo json_encode($response);
} else {
    echo json_encode(array("success" => "false", "message" => "Missing parameter"));
}
