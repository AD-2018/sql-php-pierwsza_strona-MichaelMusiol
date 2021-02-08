<?php

$NazwaServera = $_SERVER["servername"];
$NazwaUzyt = $_SERVER["username"];
$Nazwahasla = $_SERVER["password"];
$Nazwabazz = $_SERVER["dbname"];

$conn= new mysqli($NazwaServera,$NazwaUzyt,$Nazwahasla,$Nazwabazz);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>
