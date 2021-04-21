<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zad.2</title>
    <link rel="stylesheet" href="css_grid.css"/>
</head>
<body>
    <div class="container">
        <header>
        <h1><a href="../index.php">Wstecz</a></h1><br/>
            <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM kancpra_Prawnik";
      echo("<h3>PRACOWNICY</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>ID</th><th>PRACOWNIK</th><th>USUŃ</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_imie_nazwisko']."</td><td>".$row['imie_nazwisko']."</td><td>".'
          <form action="delTabela1.php" method="POST">
          <input type="number" name="id_pracownik" value="'.$row['id_imie_nazwisko'].'" hidden>
          <input type="submit" value="X">
          </form>'."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </header>
        <nav>
        2
        </nav>
        <main>
        <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM kancpra_Sprawa";
      echo("<h3>SPRAWY</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>ID</th><th>SPRAWY</th><th>USUŃ</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_nazwa_sprawy']."</td><td>".$row['nazwa_sprawy']."</td><td>".'
          <form action="delTabela2.php" method="POST">
          <input type="number" name="id_nazwa_sprawy" value="'.$row['id_nazwa_sprawy'].'" hidden>
          <input type="submit" value="X">
        </form>'."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </main>
        <div>
            3
        </div>
        <aside>
        <h3>USUŃ PRACOWNIKA</h3>
            <p>tabela</p>
    <select>
     <option value="firmaPracownik">Prawnicy</option>
     <option value="firmaProjekt">Sprawy</option>
     <option value="firmaPracownik_firmaProjekt">Wynik</option><br/>
    </select>
	<form action="delTabela1.php" method="POST">
   	<label>pracownik</label><input type="number" name="id_pracownik" required></br>
    <input type="submit" value="Usuń pracownika">
	</form>
        </aside>
        <footer>
        <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM kancpra_Prawnik,kancpra_Sprawa, kancpra_Prawnik_kancpra_Sprawa where kancpra_Prawnik.id_imie_nazwisko=kancpra_Prawnik_kancpra_Sprawa.id_imie_nazwisko and kancpra_Sprawa.id_nazwa_sprawy=kancpra_Prawnik_kancpra_Sprawa.id_nazwa_sprawy";
      echo("<h3>WYNIK</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>PRAWNICY</th><th>SPRAWY</th><th>USUŃ</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['imie_nazwisko']."</td><td>".$row['nazwa_sprawy']."</td><td>".'
          <form action="delWynik.php" method="POST">
          <input type="number" name="id" value="'.$row['id'].'" hidden>
          <input type="submit" value="X">
        </form>'."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </footer>
    
</body>
</html>