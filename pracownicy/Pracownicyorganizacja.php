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
    <?php include_once("menu.html");?>
    </div>
    <div class="tresc green">

<?php
require_once("../lib.php");
require_once("../template.php");
$sql ="select * from pracownicy,organizacja where id_org=dzial";
echo("<h1>Pracownicy i Organizacja</h1>");
echo("<h3>zad.1</h3>");
echo("<h4>$sql</h4>");
    tabela2($sql,$conn);

    
    
$sql ="select * from pracownicy,organizacja where id_org=dzial and (dzial=1 or dzial=4)";
echo("<h3>zad.2</h3>");
echo("<h4>$sql</h4>");
    tabela2($sql,$conn);
    
    
$sql ="select * from pracownicy,organizacja where id_org=dzial and imie like '%a' ";
echo("<h3>zad.3</h3>");
echo("<h4>$sql</h4>");
    tabela2($sql,$conn);
    
    
$sql ="select * from pracownicy,organizacja where id_org=dzial and imie not like '%a' ";
echo("<h3>zad.4</h3>");
echo("<h4>$sql</h4>");
    tabela2($sql,$conn);
    
    
echo("<h2>Sortowanie</h2>");
    
   
$sql ="select * from pracownicy,organizacja where id_org=dzial order by imie DESC ";
echo("<h3>zad.1</h3>");
echo("<h4>$sql</h4>");
    tabela2($sql,$conn);
    
    
$sql ="select * from pracownicy,organizacja where id_org=dzial and dzial=3 order by imie ASC ";
echo("<h3>zad.2</h3>");
echo("<h4>$sql</h4>");
    tabela2($sql,$conn);
    
    
    
$sql ="select * from pracownicy,organizacja where id_org=dzial and imie like'%a' order by imie ASC ";
echo("<h3>zad.3</h3>");
echo("<h4>$sql</h4>");
    tabela2($sql,$conn);
    

$sql ="select * from pracownicy,organizacja where id_org=dzial and imie like'%a' and (dzial=1 or dzial=3) order by zarobki ASC ";
echo("<h3>zad.4</h3>");
echo("<h4>$sql</h4>");
    tabela2($sql,$conn);
    

$sql ="select * from pracownicy,organizacja where id_org=dzial and imie not like'%a' order by nazwa_dzial ASC, zarobki ASC ";
echo("<h3>zad.5</h3>");
echo("<h4>$sql</h4>");
    tabela2($sql,$conn);
    
    
echo("<h2>Limit</h2>");
    

$sql ="select * from pracownicy,organizacja where id_org=dzial and dzial=4 limit 2 ";
echo("<h3>zad.1</h3>");
echo("<h4>$sql</h4>");
    tabela2($sql,$conn);
    

$sql ="select * from pracownicy,organizacja where id_org=dzial and imie like'%a' and (dzial=4 or dzial=2) limit 3 ";
echo("<h3>zad.2</h3>");
echo("<h4>$sql</h4>");
    tabela2($sql,$conn);
    
    
$sql ="select * from pracownicy,organizacja where id_org=dzial order by data_urodzenia limit 1 ";
echo("<h3>zad.3</h3>");
echo("<h4>$sql</h4>");
    tabela2($sql,$conn);
    
    ?>
    </div>
</div>
</body>
</html>