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


    <h3>DODAJ PRACOWNIKA</h3>	
	<form action="insert.php" method="POST">
	<label>Imię:    </label><input type="text" name="imie" required></br>
	<label>Dział:   </label><input type="number" name="dzial" required></br>
	<label>Zarobki: </label><input type="number" name="zarobki" required></br>
	<input type="date" name="data_urodzenia" required></br>
	<input type="submit" value="dodaj pracownika">
	</form>
    

    <h3>USUŃ PRACOWNIKA</h3>
	<form action="delete.php" method="POST">
   	<label> pracownika </label><input type="number" name="id" required></br>
    <input type="submit" value="Usuń pracownika">
	</form>
<?php
    require_once("../lib.php");
    $sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial";
    echo("<br>");
    echo($sql);
	if($sql=="null,' ',0,0,0000-00-00"){
    	$result = mysqli_query($conn, $sql1);
	} else {
	$result = mysqli_query($conn, $sql);
	}
	mysqli_query($conn, "ALTER TABLE `pracownicy` CHANGE `id_pracownicy` `id_pracownicy` INT(11) NOT NULL");
	mysqli_query($conn, "ALTER TABLE `pracownicy` CHANGE `id_pracownicy` `id_pracownicy` INT(11) NOT NULL AUTO_INCREMENT");
    if ( $result) {
     echo "<li>ok";
     } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
    echo('<table border="1">');
        echo('<th>Id_pracownika</th><th>imię</th><th>dział</th><th>zarobki</th><th>data urodzenia</th><th>Usuń</th>');
        while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td>'.'<td>
	<form action="delete.php" method="POST">
  	<input type="number" name="id" value="'.$row['id_pracownicy'].'" hidden>
	<input type="submit" value="X">
	</form>
	</td>');
	echo('</tr>');
     }
        echo('</table>');
?>
</div>
</div>
  </body>
</html>
