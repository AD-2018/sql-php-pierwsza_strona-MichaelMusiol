<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <title>Michael Musiol  nr.8</title>
</head>
<body>
<?php
require_once("../../lib.php");
echo("jestes w delWynik.php <br/>");

require_once("../../lib.php");
$sql = "DELETE FROM sysinfOsoba_sysinfRola WHERE id=".$_POST['id'];
echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://php-michael-projekt1.herokuapp.com/css_grid/Strona4/index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>