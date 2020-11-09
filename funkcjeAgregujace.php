<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol">Github</a>
    
    <div class="nav">
         <a href="index.php">Pracownicy</a>
         <a href="Pracownicyorganizacja.php">Pracownicy i Organizacja</a>
         <a href="funkcjeAgregujace.php">Funkcje Agregujace</a>   
    </div>
<?php
require_once("lib.php");
echo("<h1>Michael Musiol nr.8</h1>");

echo("<h3>Zad.1</h3><br/>");
$sql = "SELECT sum(zarobki) as "Suma_zarobkow" FROM pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma Zarobków</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['Suma_zarobkow'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    

?>
</body>
</html>
