<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
  require_once("https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol/lib.php");
  ?>
<a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol">Github</a>
    <a href="pracownicy/index.php">Pracownicy</a>
    <a href="pracownicy/Pracownicyorganizacja.php">Organizacja Pracownicy</a>
    <a href="pracownicy/funkcjeAgregujace.php">Funkcje Agregujace</a>
    <a href="pracownicy/DataiCzas.php">Data i Czas</a>
    <br/><br/><br/>
    <a href="pracownicy/ProstyFormularz.php">Formularz</a>
    <a href="pracownicy/insert.php">Insert</a>
    <a href="pracownicy/daneDoBazy.php">Dane Do Bazy</a> 
    <br/><br/><br/>
    <a href="ksiazki/ksiazki.php">Książki</a>
    <br/><br/><br/>
<form action="strona.php" method="POST">
   <input type="text" name="firstname"><br/><br/><br/>
   <input type="submit" value="wyślij do strona.php">
</form>
</body>
</html>
