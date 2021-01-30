<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
require_once("../lib.php");
echo("jestes w delete.php <br>");
echo $_POST['id'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id'];

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Usunięto wiersz pomyślnie";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 

$conn->close();
  
  //sleep(5);
  //echo "<br/>Za 5 sekund zostaniesz przekierowany do 'Dane Do Bazy'";
  header('Location: https://php-michael-projekt1.herokuapp.com/pracownicy/daneDoBazy.php');
?>
