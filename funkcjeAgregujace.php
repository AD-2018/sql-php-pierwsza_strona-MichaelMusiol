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
$sql = "SELECT sum(zarobki) as suma FROM pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma zarobków</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
echo("<h3>Zad.2</h3><br/>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie like'%a'";
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
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    

echo("<h3>Zad.3</h3><br/>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie not like'%a' and (dzial=2 or dzial=3)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Suma zarobków meżczyzn</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
    
echo("<h3>Zad.4</h3><br/>");
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy where imie not like'%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Średnia zarobków meżczyzn</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
    
echo("<h3>Zad.5</h3><br/>");
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy where dzial=4";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Średnia zarobków meżczyzn</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
    
echo("<h3>Zad.6</h3><br/>");
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy where (dzial=1 or dzial=2)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Średnia zarobków meżczyzn</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<h3>Zad.7</h3><br/>");
$sql = "SELECT count(imie) as liczba FROM pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Ilość pracowników</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['liczba'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    
    
echo("<h3>Zad.8</h3><br/>");
$sql = "SELECT count(imie) as liczba FROM pracownicy where imie like'%a' (dzial=1 or dzial=3)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Ilość pracowników</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['liczba'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo('<h2>Group by</h2>');
echo("<h3>Zad.1</h3><br/>");
    $sql = "SELECT sum(zarobki) as suma FROM pracownicy, organizacja where dzial=id_org;
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Ilość pracowników</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['dzial'].'</td><td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
?>
</body>
</html>
