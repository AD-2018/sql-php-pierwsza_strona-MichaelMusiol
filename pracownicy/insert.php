<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol">Github</a>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol/pracownicy/index.php">Pracownicy</a>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol/pracownicy/Pracownicyorganizacja.php">Organizacja Pracownicy</a>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol/pracownicy/funkcjeAgregujace.php">Funkcje Agregujace</a>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol/pracownicy/DataiCzas.php">Data i Czas</a>
    <br/><br/><br/>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol/pracownicy/ProstyFormularz.php">Formularz</a>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol/pracownicy/insert.php">Insert</a>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol/pracownicy/daneDoBazy.php">Dane Do Bazy</a> 
    <br/><br/><br/>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol/ksiazki/ksiazki.php">Książki</a>

<?php
require_once("https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol/lib.php");
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
    
  echo "<br/>Dodano nowy wiersz pomyślnie";
  //sleep(5);
  //echo "<br/>Za 5 sekund zostaniesz przekierowany do 'Dane Do Bazy'";
  header('Location: https://php-michael-projekt1.herokuapp.com/daneDoBazy.php');
?>
  </body>
</html>
