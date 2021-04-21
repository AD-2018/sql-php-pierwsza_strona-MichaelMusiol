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

require_once("../../lib.php");
$sql = "DELETE FROM sysinfRola WHERE id_rola=".$_POST['id_rola'];
echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://php-michael-projekt1.herokuapp.com/css_grid/Strona4/index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>