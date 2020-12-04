<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-MichaelMusiol">Github</a>
    <a href="index.php">Pracownicy</a>
    <a href="Pracownicyorganizacja.php">Organizacja Pracownicy</a>
    <a href="funkcjeAgregujace.php">Funkcje Agregujace</a>
    <a href="DataiCzas.php">Data i Czas</a>
    <br/><br/><br/>
    <a href="ProstyFormularz.php">Formularz</a>
    <a href="insert.php">Insert</a>
    <a href="daneDoBazy.php">Dane Do Bazy</a> 
    

<?php
    require_once("lib.php");
echo("<h3>Tabela Autorów</h3>");
$sql = "SELECT * FROM biblAutor";
$result = mysqli_query($conn, $sql);
    echo('<table border="1">');
    echo('<th>id</th><th>Autor</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['autor'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<h3>Tabela Tytułów</h3>");
$sql = "SELECT * FROM biblTytuł";
    $result = mysqli_query($conn, $sql);
    echo('<table border="1">');
    echo('<th>id</th><th>Tytuł</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['tytuł'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
echo("<h3>Połączone</h3>");
$sql = "SELECT * FROM biblAutor_biblTytuł";
    $result = mysqli_query($conn, $sql);
        echo('<table border="1">');
    echo('<th>id</th><th>Autor</th><th>Tytuł</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['biblAutor_id'].'</td><td>'.$row['biblTytuł_id'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
?>
</body>
</html>