<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
<title>Michael Musiol  nr.8</title>
</head>
<body>
<div class="calosc">
    <div class="tytul red">
    <div class="imie">
    <h1>Michael Musiol  nr. 8</h1>
    </div>
    </div>
    <div class="menu blue">
        <br/>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol">Github</a><br/><br/><br/>
    <a href="../index.php">Pracownicy</a><br/><br/><br/>
    <a href="php-michael-projekt1.herokuapp.com/pracownicy/Pracownicyorganizacja.php">Organizacja</a><br/><br/><br/>
    <a href="php-michael-projekt1.herokuapp.com/pracownicy/funkcjeAgregujace.php">Funkcje</a><br/><br/><br/>
    <a href="php-michael-projekt1.herokuapp.com/pracownicy/DataiCzas.php">Data i Czas</a><br/><br/><br/>
    <a href="php-michael-projekt1.herokuapp.com/pracownicy/ProstyFormularz.php">Formularz</a><br/><br/><br/>
    <a href="php-michael-projekt1.herokuapp.com/pracownicy/daneDoBazy.php">Dane Do Bazy</a> <br/><br/><br/>
    <a href="php-michael-projekt1.herokuapp.com/ksiazki/ksiazki.php">Książki</a><br/><br/><br/>
    </div>
    <div class="tresc green">

<?php
require_once("../lib.php");
echo("<h2>Autorzy</h2>");
$sql = "SELECT * FROM biblAutor";
$result = mysqli_query($conn, $sql);

echo('<select name="Autor">');

    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_autor'].'">';
        echo($row['autor']);
        echo"</option>"; 
    }
echo('</select>');
  echo("<br/>");

echo("<h3>Tytuły</h3>");
$sql = "SELECT * FROM biblTytuł";
    $result = mysqli_query($conn, $sql);
echo('<select name="Tytuł">');

    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_tytuł'].'">';
        echo($row['tytuł']);
        echo"</option>"; 
    }
echo('</select>');
  echo("<br/>");
    
    
    
echo("<h3>Połączone</h3>");
$sql = "SELECT * FROM biblAutor_biblTytuł,biblTytuł,biblAutor where id_tytuł=biblTytuł_id AND id_autor=biblAutor_id order by id";
    $result = mysqli_query($conn, $sql);
        echo('<table border="1">');
    echo('<th>id</th><th>Autor</th><th>Tytuł</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['autor'].'</td><td>'.$row['tytuł'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
?>
</div>
</div>
</body>
</html>
