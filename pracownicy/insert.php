<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
<title>Michael Musiol  nr.8</title>
</head>
<body>
<?php
require_once("../lib.php");
echo("<br/><br/>jestes w insert.php <br/>");
echo "<li>". $_POST['imie'];
echo "<li>". $_POST['dzial'];
echo "<li>". $_POST['zarobki'];
echo "<li>". $_POST['data_urodzenia'];
    
    if($_POST['imie'])
    {$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
    VALUES (null, '".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";}
    else{
        $sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) VALUES(null,'1',1,1,1111-11-11)";
    }
    
    
    

  
    
    echo "<li>". $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
  //sleep(5);
  //echo "<br/>Za 5 sekund zostaniesz przekierowany do 'Dane Do Bazy'";
  //header('Location: https://php-michael-projekt1.herokuapp.com/pracownicy/daneDoBazy.php');
?>
  </body>
</html>
