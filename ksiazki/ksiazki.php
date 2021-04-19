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
        <?php include_once("../pracownicy/menu.html"); ?>
    </div>
    <div class="tresc green">

<?php
require_once("../lib.php");
require_once("../template.php");
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
$wartosc1="id";
$wartosc2="autor";
$wartosc3="tytuł";
tabelka3($sql,$conn,$wartosc1,$wartosc2,$wartosc3);
?>
</div>
</div>
</body>
</html>
