<?php


function dbconnection()
{
    $con = mysqli_connect("localhost", "root", "", "finals_ursal");
    return $con;
}

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: *");
