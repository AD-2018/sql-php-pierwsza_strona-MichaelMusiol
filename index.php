<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Michael Musiol  nr.8</title>
    <link rel="icon" type="image/png" href="favicon.ico">
</head>
<body>
<div class="calosc">
    <div class="tytul red">
    <div class="imie">
    <h1>Michael Musiol nr. 8</h1>
    </div>
    </div>
    <div class="menu blue">
    <br/>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol">Github</a><br/><br/><br/>
    <a href="index.php">Pracownicy</a><br/><br/><br/>
    <a href="pracownicy/Pracownicyorganizacja.php">Organizacja</a><br/><br/><br/>
    <a href="pracownicy/funkcjeAgregujace.php">Funkcje</a><br/><br/><br/>
    <a href="pracownicy/DataiCzas.php">Data i Czas</a><br/><br/><br/>
    <a href="pracownicy/ProstyFormularz.php">Formularz</a><br/><br/><br/>
    <a href="pracownicy/daneDoBazy.php">Dane Do Bazy</a> <br/><br/><br/>
    <a href="ksiazki/ksiazki.php">Książki</a><br/><br/><br/>
    <a href="flexbox/index.html">Flexbox</a><br/><br/><br/>
    </div>
    <div class="tresc green">
<?php
require_once("lib.php");
require_once("template.php");
echo($_SERVER["servername"]);
echo("<h1>Michael Musiol nr.8</h1>");

echo("<h3>Zad.1</h3>");
$sql = "SELECT * FROM pracownicy where dzial=2";
echo($sql);
    tabela1($sql,$conn);

echo("<br/><h3>Zad.2</h3><br/>");
$sql = "SELECT * FROM pracownicy where dzial=2 or dzial=3";
echo($sql);
    tabela1($sql,$conn);

echo("<br/><h3>Zad.3</h3><br/>");
$sql = "SELECT * FROM pracownicy where zarobki<30";
echo($sql);
    tabela1($sql,$conn);

?>
</div>
</div>
</body>
</html>

