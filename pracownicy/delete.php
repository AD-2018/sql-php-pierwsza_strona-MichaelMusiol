<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
<title>Michael Musiol  nr.8</title>
</head>
<body>
<?php
require_once("../lib.php");
echo("jestes w delete.php <br>");
echo $_POST['id'];


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
 // header('Location: https://php-michael-projekt1.herokuapp.com/pracownicy/daneDoBazy.php');
?>
