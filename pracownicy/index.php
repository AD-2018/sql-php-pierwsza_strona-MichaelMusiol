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
echo("<h1>Michael Musiol nr.8</h1>");

echo("<h3>Zad.1</h3>");
$sql = "SELECT * FROM pracownicy where dzial=2";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>id</th><th>imie</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td><td>'.$row['data_urodzenia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

    echo("<br/><h3>Zad.2</h3><br/>");
    $sql = "SELECT * FROM pracownicy where dzial=2 or dzial=3";
    echo($sql);
    
    $result = mysqli_query($conn, $sql);
    if ( $result) {
            echo("<li>ok<br/>");
        } else {
          echo("Error: ".$sql."<br/>". mysqli_error($conn));
        }
    
    echo('<table border="1">');
        echo('<th>id</th><th>imie</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th>');
    
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td><td>'.$row['data_urodzenia'].'</td>');
            echo('</tr>');
        }
    
        echo('</table>');


        echo("<br/><h3>Zad.3</h3><br/>");
        $sql = "SELECT * FROM pracownicy where zarobki<30";
        echo($sql);
        
        $result = mysqli_query($conn, $sql);
        if ( $result) {
                echo("<li>ok");
            } else {
              echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
            }
        
        echo('<table border="1">');
            echo('<th>id</th><th>imie</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th>');
        
            while($row=mysqli_fetch_assoc($result)){
                echo('<tr>');
                echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td><td>'.$row['data_urodzenia'].'</td>');
                echo('</tr>');
            }
        
            echo('</table>');
        ?>

</body>
</html>
