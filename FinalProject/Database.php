<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "BarangayCentral";

$connect = new mysqli($host, $username, $password, $database);

if($connect->connect_error){
    die("Connection Failed: " .$connect->connect_error);
}


?>