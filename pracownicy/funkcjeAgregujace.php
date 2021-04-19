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
    <?php include_once("menu.html"); ?>
    </div>
    <div class="tresc green">

<?php
require_once("../lib.php");
require_once("../template.php");
echo("<h1>Michael Musiol nr.8</h1>");

echo("<h3>Zad.1</h3><br/>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy";
echo($sql);
$wartosc1="suma";
tabelka1($sql,$conn,$wartosc1);
    
echo("<h3>Zad.2</h3><br/>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie like'%a'";
echo($sql);
$wartosc1="suma";
tabelka1($sql,$conn,$wartosc1);

echo("<h3>Zad.3</h3><br/>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie not like'%a' and (dzial=2 or dzial=3)";
echo($sql);
$wartosc1="suma";
tabelka1($sql,$conn,$wartosc1);
    
echo("<h3>Zad.4</h3><br/>");
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy where imie not like'%a'";
echo($sql);
$wartosc1="srednia";
tabelka1($sql,$conn,$wartosc1);
    
echo("<h3>Zad.5</h3><br/>");
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy where dzial=4";
echo($sql);    
$wartosc1="srednia";
tabelka1($sql,$conn,$wartosc1);    

echo("<h3>Zad.6</h3><br/>");
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy where imie not like '%a' and (dzial=1 or dzial=2)";
echo($sql);
$wartosc1="srednia";
tabelka1($sql,$conn,$wartosc1);
    
echo("<h3>Zad.7</h3><br/>");
$sql = "SELECT count(imie) as liczba FROM pracownicy";
echo($sql);
$wartosc1="liczba";
tabelka1($sql,$conn,$wartosc1);
    
echo("<h3>Zad.8</h3><br/>");
$sql = "SELECT count(imie) as liczba FROM pracownicy where imie like'%a' and (dzial=1 or dzial=3)";
echo($sql);
$wartosc1="liczba";
tabelka1($sql,$conn,$wartosc1);
    
echo('<h2>Group by</h2>');
echo("<h3>Zad.1</h3><br/>");
    $sql = "SELECT sum(zarobki) as suma, dzial , nazwa_dzial FROM pracownicy,organizacja where dzial=id_org group by dzial";
echo($sql);
$wartosc1="suma";
$wartosc2="dzial";
$wartosc3="nazwa_dzial";
tabelka3($sql,$conn,$wartosc1,$wartosc2,$wartosc3);    
    
echo("<h3>Zad.2</h3><br/>");
    $sql = "select count(imie) as liczba, dzial , nazwa_dzial from pracownicy,organizacja where dzial=id_org group by dzial";
echo($sql);
$wartosc1="liczba";
$wartosc2="dzial";
$wartosc3="nazwa_dzial";
tabelka3($sql,$conn,$wartosc1,$wartosc2,$wartosc3);  
    
    
echo("<h3>Zad.3</h3><br/>");
    $sql = "SELECT avg(zarobki) as srednia, dzial , nazwa_dzial FROM pracownicy,organizacja where dzial=id_org group by dzial";
echo($sql);
$wartosc1="srednia";
$wartosc2="dzial";
$wartosc3="nazwa_dzial";
tabelka3($sql,$conn,$wartosc1,$wartosc2,$wartosc3);  
    
    
echo("<h3>Zad.4</h3><br/>");
    $sql = "SELECT sum(zarobki) as SumaZarobki, if( (imie LIKE '%a'), 'Kobiety','Mężczyźni') as 'plec' from pracownicy group by plec";
echo($sql);
$wartosc1="SumaZarobki";
$wartosc2="plec";
tabelka2($sql,$conn,$wartosc1,$wartosc2);  
    
echo("<h3>Zad.5</h3><br/>");
    $sql = "SELECT avg(zarobki) as SredniaZarobki, if( (imie LIKE '%a'), 'Kobiety','Mężczyźni') as 'plec' from pracownicy group by plec";
echo($sql);
$wartosc1="SredniaZarobki";
$wartosc2="plec";
tabelka2($sql,$conn,$wartosc1,$wartosc2);
    
echo("<h2>klauzula having</h2><br/>");
       
echo("<h3>Zad.1</h3><br/>");
    $sql = "select sum(zarobki) as Suma_Zarobkow, dzial , nazwa_dzial from pracownicy, organizacja group by dzial having Suma_Zarobkow > 28 ";
echo($sql);
$wartosc1="Suma_Zarobkow";
$wartosc2="dzial";
$wartosc3="nazwa_dzial";
tabelka3($sql,$conn,$wartosc1,$wartosc2,$wartosc3);
    
echo("<h3>Zad.2</h3><br/>");
    $sql = "select avg(zarobki) as srednia,dzial,nazwa_dzial from pracownicy, organizacja where imie not like '%a' group by dzial having srednia > 30 ";
echo($sql);
$wartosc1="srednia";
$wartosc2="dzial";
$wartosc3="nazwa_dzial";
tabelka3($sql,$conn,$wartosc1,$wartosc2,$wartosc3);
    
    
echo("<h3>Zad.3</h3><br/>");
    $sql = "SELECT count(id_pracownicy) as ilosc,dzial,nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial having ilosc > 3 ";
echo($sql);
$wartosc1="ilosc";
$wartosc2="dzial";
$wartosc3="nazwa_dzial";
tabelka3($sql,$conn,$wartosc1,$wartosc2,$wartosc3);
    
?>
</div>
</div>
</body>
</html>
