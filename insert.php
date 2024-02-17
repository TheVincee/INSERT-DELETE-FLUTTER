<?php


include "connection.php";
$con = dbconnection();

if (isset($_POST["name"])) {
    $name = $_POST["name"];
} else return;

$query = "INSERT INTO flutterfinals(name) VALUES ('$name')";

$exe = mysqli_query($con, $query);

$arr = [];

if ($exe) {
    $arr["success"] = "true";
} else {
    $arr["success"] = "false";
}

print(json_encode($arr));
