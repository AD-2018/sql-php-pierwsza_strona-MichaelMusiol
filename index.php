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
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol">Github</a>
    <a href="index.php">Pracownicy</a>
    <a href="pracownicy/Pracownicyorganizacja.php">Organizacja</a>
    <a href="pracownicy/funkcjeAgregujace.php">Funkcje</a>
    <a href="pracownicy/DataiCzas.php">Data i Czas</a>
    <a href="pracownicy/ProstyFormularz.php">Formularz</a>
    <a href="pracownicy/daneDoBazy.php">Dane Do Bazy</a>
    <a href="ksiazki/ksiazki.php">Książki</a>
    <a href="flexbox/index.html">Flexbox</a>
    <a href="css_grid/index.html">CSS Grid</a>


    <!-- <select><option><a href="css_grid/Strona1/index.html">Strona1</a><br/><br/><br/></option>
    <option><a href="css_grid/Strona2/index.html">Strona2</a></option>
    <option><a href="css_grid/Strona3/index.html">Strona3</a></option>
    <option><a href="css_grid/Strona4/index.html">Strona4</a></option>
    <option><a href="css_grid/Strona4/index.html">Strona4</a></option></select><br/><br/><br/> -->
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

