<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
       <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol">Github</a>
       <a href="organizacjaPracownicy.php">organizacjaPracownicy.php</a>
       <a href="funkcjeAgregujace.php">funkcjeAgregujace.php</a>
    </div>

<?php
require_once("lib.php");
echo("<h1>Michael Musiol nr. 8</h1>");

echo("<br>Zad 1 <br>");
$sql = "SELECT * FROM pracownicy where dzial=2";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br>". mysqli_error($conn));
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
        ?>

</body>
</html>
