<?php

include 'connection.php';
$con = dbconnection();

$query = "SELECT id, name FROM flutterfinals";
$exe = mysqli_query($con, $query);

$arr = [];

while ($row = mysqli_fetch_array($exe)) {
    $arr[] = $row;
}

print(json_encode($arr));
