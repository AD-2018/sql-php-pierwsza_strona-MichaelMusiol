<?php
$servername = "sql7.freemysqlhosting.net";
$username ="sql7373397";
$password = "XKvMFd58NH";
$dbname = "sql7373397";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>
