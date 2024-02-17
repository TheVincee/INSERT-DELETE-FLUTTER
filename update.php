<?php

include 'connection.php';

// Check if the required parameters are set
if (isset($_POST['id']) && isset($_POST['name'])) {
    $con = dbconnection();

    $id = $_POST['id'];
    $name = $_POST['name'];

    $query = "UPDATE flutterfinals SET name='$name' WHERE ID=$id";

    $result = mysqli_query($con, $query);

    if ($result) {
        $response = array("success" => "true");
    } else {
        $response = array("success" => "false");
    }

    echo json_encode($response);
} else {
    echo json_encode(array("success" => "false", "message" => "Missing parameters"));
}
