<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
  require_once("lib.php");
  ?>
<a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol">Github</a>
    <a href="index.php">Pracownicy</a>
    <a href="Pracownicyorganizacja.php">Organizacja Pracownicy</a>
    <a href="funkcjeAgregujace.php">Funkcje Agregujace</a>
    <a href="DataiCzas.php">Data i Czas</a>
    <br/><br/><br/>
    <a href="ProstyFormularz.php">Formularz</a>
    <a href="insert.php">Insert</a>
    <a href="daneDoBazy.php">Dane Do Bazy</a>
    <br/><br/><br/>
<form action="strona.php" method="POST">
   <input type="text" name="firstname"><br/>
   <input type="submit" value="wyślij do strona.php">
</form>
</body>
</html>
