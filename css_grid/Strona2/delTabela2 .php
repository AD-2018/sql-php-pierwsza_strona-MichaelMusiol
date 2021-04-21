<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <title>Michael Musiol  nr.8</title>
</head>
<body>
<?php
require_once("../../lib.php");
echo("jestes w delTabela2.php <br/>");
$sql = "DELETE FROM kancpra_Sprawa WHERE id_nazwa_sprawy=".$_POST['id_nazwa_sprawy'];
echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://php-michael-projekt1.herokuapp.com/css_grid/Strona2/index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>