<?php
$servername = "sql7.freemysqlhosting.net";
$username ="sql7374641";
$password = "leMcUsH5Ep";
$dbname = "sql7374641";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>
