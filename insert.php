<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol">Github</a>
    <a href="index.php">Pracownicy</a>
    <a href="Pracownicyorganizacja.php">Organizacja Pracownicy</a>
    <a href="funkcjeAgregujace.php">Funkcje Agregujace</a>
    <a href="DataiCzas.php">Data i Czas</a>
    <br/><br/><br/>
    <a href="ProstyFormularz.php">Formularz</a>
    <a href="insert.php">Insert</a>
    <a href="daneDoBazy.php">Dane Do Bazy</a>

<?php
require_once("lib.php");
echo("<br/>jestes w insert.php <br/>");
echo "<li>". $_POST['imie'];
echo "<li>". $_POST['dzial'];
echo "<li>". $_POST['zarobki'];
echo "<li>". $_POST['data_urodzenia'];

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null, '".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";

if ($conn->query($sql) === TRUE) {
  echo "<br>New record created successfully";
} else {

  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
  </body>
</html>
