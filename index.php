<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol">Github</a>
    
    <div class="nav">
         <a href="index.php">Pracownicy</a>
         <a href="organizacjaPracownicy.php">Pracownicy i Organizacja</a>
         <a href="funkcjeAgregujace.php">Funkcje Agregujace</a>   
    </div>
<?php
echo("<h1>Michael Musiol nr. 8</h1>");

require_once "lib.php";

$sql = "SELECT * FROM pracownicy where dzial=2";
echo("<h3>ZADANIE 1</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['dzial']."</td><td>".$row['data_urodzenia']".</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT * FROM pracownicy where dzial=2 or dzial=3";
echo("<h3>ZADANIE 2</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['dzial']."</td><td>".$row['data_urodzenia']".</td>");
    echo ('</tr>');
}
echo ('</table>');
    
$sql = "SELECT * FROM pracownicy where zarobki<30";
echo("<h3>ZADANIE 3</h3>");
echo("<li>".$sql."<br><br>");

$result = mysqli_query($conn, $sql);
     if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1" class="tabelka_moja">');
echo ("<tr><th>imie</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th></tr>");
while($row = mysqli_fetch_assoc($result)) {
    echo ('<tr>');
    echo ("<td>".$row['imie']."</td><td>".$row['zarobki']."</td><td>".$row['dzial']."</td><td>".$row['data_urodzenia']".</td>");
    echo ('</tr>');
}
echo ('</table>');
    
?>
</body>
</html>
