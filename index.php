<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: white}

tr:nth-child(odd){background-color: red}

th {
  background-color: black;
  color: white;
}
a {
background-color: black;
  box-shadow: 0 5px 0 red;
  color: white;
  padding: 1em 1.5em;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
}

a:hover {
  background-color: red;
}

a:active {
  box-shadow: none;
  top: 5px;
}

body {
    margin-top: 25px;
    height: 100vh;
}
</style>
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol">Github</a>
    <a href="Pracownicyorganizacja.php">Organizacja Pracownicy</a>
    <a href="funkcjeAgregujace.php">Funkcje Agregujace</a>
    <a href="DataiCzas.php">Data i Czas</a>
    

<?php
require_once("lib.php");
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

    echo("<br/>Zad.2</h3>");
    $sql = "SELECT * FROM pracownicy where dzial=2 or dzial=3";
    echo($sql);
    
    $result = mysqli_query($conn, $sql);
    if ( $result) {
            echo("<li>ok<br/>");
        } else {
          echo("Error: ".$sql".<br/>. mysqli_error($conn));
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

