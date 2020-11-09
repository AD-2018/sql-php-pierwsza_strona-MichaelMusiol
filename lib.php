<?php
$servername = "sql7.freemysqlhosting.net";
$username = "sql7374842";
$password = "4w2p5Zi8PR";
$dbname = "sql7374842";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>
