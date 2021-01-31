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
    <a href="../pracownicy/Pracownicyorganizacja.php">Organizacja</a><br/><br/><br/>
    <a href="../pracownicy/funkcjeAgregujace.php">Funkcje</a><br/><br/><br/>
    <a href="../pracownicy/DataiCzas.php">Data i Czas</a><br/><br/><br/>
    <a href="../pracownicy/ProstyFormularz.php">Formularz</a><br/><br/><br/>
    <a href="../pracownicy/daneDoBazy.php">Dane Do Bazy</a> <br/><br/><br/>
    <a href="../ksiazki/ksiazki.php">Książki</a><br/><br/><br/>
    </div>
    <div class="tresc green">

<?php
require_once("../lib.php");
require_once("../template.php");
echo("<h1>Michael Musiol nr.8</h1>");

echo("<h3>Zad.1</h3>");
$sql = "select * ,year(curdate())-year(data_urodzenia) as wiek from pracownicy";
echo($sql);
$wartosc1="id_pracownicy";
$wartosc2="imie";
$wartosc3="wiek";
tabelka3($sql,$conn,$wartosc1,$wartosc2,$wartosc3);
    

    echo("<h3>Zad.2</h3>");
$sql = "select * ,year(curdate())-year(data_urodzenia) as wiek,dzial,nazwa_dzial from pracownicy, organizacja where id_org=dzial and nazwa_dzial='serwis'";
echo($sql);
$wartosc1="imie";
$wartosc2="dzial";
$wartosc3="nazwa_dzial";
$wartosc4="wiek";
tabelka4($sql,$conn,$wartosc1,$wartosc2,$wartosc3,$wartosc4);

    
    echo("<h3>Zad.3</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as SumaLat from pracownicy";
echo($sql);
$wartosc1="SumaLat";
tabelka1($sql,$conn,$wartosc1);
    
 echo("<h3>Zad.4</h3>");
$sql = "SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja WHERE id_org=dzial and nazwa_dzial='handel'";
echo($sql);
$wartosc1="Suma";
tabelka1($sql,$conn,$wartosc1);

 echo("<h3>Zad.5</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as SumaLatKobiet from pracownicy where imie like '%a'";
echo($sql);
$wartosc1="SumaLatKobiet";
tabelka1($sql,$conn,$wartosc1);
    
    
 echo("<h3>Zad.6</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as SumaLatMezczyzn from pracownicy where imie not like '%a'";
echo($sql);
$wartosc1="SumaLatMezczyzn";
tabelka1($sql,$conn,$wartosc1);
    
 echo("<h3>Zad.7</h3>");
$sql = "select avg(year(curdate()) - year(data_urodzenia)) as SredniaWieku, nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial";
echo($sql);
$wartosc1="SredniaWieku";
tabelka1($sql,$conn,$wartosc1);

    
 echo("<h3>Zad.8</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as SumaLat, nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial";
echo($sql);
$wartosc1="SumaLat";
tabelka1($sql,$conn,$wartosc1);
    
 echo("<h3>Zad.9</h3>");
$sql = "SELECT MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Wiek, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial;";
echo($sql);
$wartosc1="Wiek";
$wartosc2="nazwa_dzial";
tabelka2($sql,$conn,$wartosc1,$wartosc2);
    
    
 echo("<h3>Zad.10</h3>");
$sql = "select sum(year(curdate()) - year(data_urodzenia)) as SumaLat, nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial";
echo($sql);
$wartosc1="SumaLat";
$wartosc2="nazwa_dzial";
tabelka2($sql,$conn,$wartosc1,$wartosc2);
    
    
 echo("<h3>Zad.11</h3>");
$sql = "SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as min, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial and (nazwa_dzial='handel' OR nazwa_dzial='serwis') GROUP BY dzial";
echo($sql);
$wartosc1="min";
$wartosc2="nazwa_dzial";
tabelka2($sql,$conn,$wartosc1,$wartosc2);

    
    
  echo("<h3>Zad.12</h3>");
$sql = "SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as min, nazwa_dzial,imie from pracownicy,organizacja WHERE id_org=dzial and (nazwa_dzial='handel' OR nazwa_dzial='serwis') GROUP BY dzial";
echo($sql);
$wartosc1="imie";
$wartosc2="nazwa_dzial";
$wartosc3="min";
tabelka3($sql,$conn,$wartosc1,$wartosc2,$wartosc3);

    
    
 echo("<h3>Zad.13</h3>");
$sql = "SELECT imie,DATEDIFF(CURDATE(),data_urodzenia) AS dni_zycia FROM pracownicy";
echo($sql);
$wartosc1="imie";
$wartosc2="dni_zycia";
tabelka2($sql,$conn,$wartosc1,$wartosc2);
    
    
echo("<h3>Zad.14</h3>");
$sql = "SELECT * FROM pracownicy WHERE imie NOT LIKE '%a' ORDER BY data_urodzenia ASC LIMIT 1";
echo($sql);
$wartosc1="imie";
$wartosc2="data_urodzenia";
tabelka2($sql,$conn,$wartosc1,$wartosc2);
    
echo("<h2>Formatowanie dat</h2>");

    
$sql = "SELECT imie,zarobki,dzial, DATE_FORMAT(data_urodzenia,'%W-%m-%Y') as data_urodzenia from pracownicy;";
echo("<h3>Zad.1</h3>");
echo("<li>".$sql."<br><br>");
$wartosc1="imie";
$wartosc2="zarobki";
$wartosc3="data_urodzenia";
$wartosc4="dzial";
tabelka4($sql,$conn,$wartosc1,$wartosc2,$wartosc3,$wartosc4);

echo("<h3>Zad.2</h3>");
    $sql1 = "SET lc_time_names = 'pl_PL'";
    $sql2 ="SELECT DATE_FORMAT(CURDATE(), '%W')as data";
    echo ("<li>".$sql2."</li><br><br>");
    $result = mysqli_query($conn, $sql1);
    $result = mysqli_query($conn, $sql2);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>data</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["data"].'</td>');
                echo ('</tr>');
        }echo ('</table>');

echo('</table>');
    
$sql = "SELECT imie,zarobki,dzial, DATE_FORMAT(data_urodzenia,'%w-%M-%Y') as data_urodzenia from pracownicy;";
echo("<h3>Zad.3</h3>");
echo("<li>".$sql."<br><br>");
$wartosc1="imie";
$wartosc2="zarobki";
$wartosc3="data_urodzenia";
$wartosc4="dzial";
tabelka4($sql,$conn,$wartosc1,$wartosc2,$wartosc3,$wartosc4);
    
$sql = "SELECT curtime(4) as czas";
echo("<h3>Zad.4</h3>");
echo("<li>".$sql."<br><br>");
$wartosc1="czas";
tabelka1($sql,$conn,$wartosc1);
    
$sql = "SELECT imie,zarobki,dzial, DATE_FORMAT(data_urodzenia,'%Y-%M-%W') as data_urodzenia from pracownicy;";
echo("<h3>Zad.5</h3>");
echo("<li>".$sql."<br><br>");
$wartosc1="imie";
$wartosc2="zarobki";
$wartosc3="data_urodzenia";
$wartosc4="dzial";
tabelka4($sql,$conn,$wartosc1,$wartosc2,$wartosc3,$wartosc4);
    
$sql = "SELECT imie,DATEDIFF(CURDATE(),data_urodzenia) as dni, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty FROM pracownicy";
echo("<h3>Zad.6</h3>");
echo("<li>".$sql."<br><br>");
$wartosc1="imie";
$wartosc2="dni";
$wartosc3="godziny";
$wartosc4="minuty";
tabelka4($sql,$conn,$wartosc1,$wartosc2,$wartosc3,$wartosc4);
    
echo("<h3>Zad.7</h3>");
$sql = 'SELECT DATE_FORMAT("2002-04-23", "%j") as urodziny';
echo($sql);
$wartosc1="urodziny";
tabelka1($sql,$conn,$wartosc1);
    

echo("<h3>Zad.8</h3>");
$sql = "SELECT DATE_FORMAT(data_urodzenia,'%W') as dzien, imie,dzial
FROM
     pracownicy
ORDER BY 
     CASE
          
          WHEN dzien = 'Poniedziałek' THEN 1
          WHEN dzien = 'Wtorek' THEN 2
          WHEN dzien = 'Środa' THEN 3
          WHEN dzien= 'Czwartek' THEN 4
          WHEN dzien = 'Piątek' THEN 5
          WHEN dzien = 'Sobota' THEN 6
          WHEN dzien = 'Niedziela' THEN 7
     END ASC";
echo("<li>".$sql."<br><br>");
$wartosc1="imie";
$wartosc2="dzien";
$wartosc3="dzial";
tabelka3($sql,$conn,$wartosc1,$wartosc2,$wartosc3);
    
echo("<h3>Zad.9</h3>");
$sql = "SELECT count(DATE_FORMAT(data_urodzenia, '%W')) as liczba_pracownikow from pracownicy, organizacja where id_org=dzial and (DATE_FORMAT(data_urodzenia, '%W')='Poniedziałek');";
echo("<li>".$sql."<br><br>");
$wartosc1="liczba_pracownikow";
tabelka1($sql,$conn,$wartosc1);
    
echo("<h3>zad.10</h3>");
$sql = "SELECT DATE_FORMAT(data_urodzenia,'%W') as Dzien, count(date_format(data_urodzenia, '%W')) as Liczba FROM pracownicy GROUP BY dzien ORDER BY CASE
          WHEN dzien = 'Poniedziałek' THEN 1
          WHEN dzien = 'Wtorek' THEN 2
          WHEN dzien = 'Środa' THEN 3
          WHEN dzien = 'Czwartek' THEN 4
          WHEN dzien = 'Piątek' THEN 5
          WHEN dzien = 'Sobota' THEN 6
          WHEN dzien = 'Niedziela' THEN 7
          END ASC";
echo($sql);
$wartosc1="Dzien";
$wartosc2="Liczba";
tabelka2($sql,$conn,$wartosc1,$wartosc2);
        ?>
</div>
</div>
</body>
</html>
