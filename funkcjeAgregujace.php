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
$sql = "SELECT sum(zarobki) as "Suma_zarobków" FROM pracownicy";
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
        echo('<td>'.$row['Suma_zarobków'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
echo("<h3>Zad.2</h3><br/>");
$sql = "SELECT sum(zarobki) as "Suma_zarobków_kobiet" FROM pracownicy where imie like'%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma zarobków kobiet</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['Suma_zarobków_kobiet'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
echo("<h3>Zad.3</h3><br/>");
$sql = "SELECT sum(zarobki) as "Suma_zarobków_kobiet" FROM pracownicy where imie not like'%a' and (dzial=2 or dzial=3)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma zarobków kobiet</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['Suma_zarobków_kobiet'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
?>
</body>
</html>
