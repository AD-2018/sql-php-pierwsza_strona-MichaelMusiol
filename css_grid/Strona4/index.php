<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zad.4</title>
    <link rel="stylesheet" href="css_grid.css"/>
</head>
<body>
    <div class="container">
        <header>
        <h1><a href="../index.php">Wstecz</a></h1><br/>
            <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM sysinfOsoba";
      echo("<h3>OSOBY</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>ID</th><th>OSOBA</th><th>USUŃ</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_osoba']."</td><td>".$row['osoba']."</td><td>".'
          <form action="delTabela1.php" method="POST">
          <input type="number" name="id_osoba" value="'.$row['id_osoba'].'" hidden>
          <input type="submit" value="X">
        </form>'."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </header>
        <nav>
        1
        </nav>
        <main>
        <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM sysinfRola";
      echo("<h3>ROLA</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>ID</th><th>ROLA</th><th>USUŃ</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_rola']."</td><td>".$row['rola']."</td><td>".'
          <form action="delTabela2.php" method="POST">
          <input type="number" name="id_rola" value="'.$row['id_rola'].'" hidden>
          <input type="submit" value="X">
        </form>'."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </main>
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
      $sql = "SELECT * FROM sysinfOsoba,sysinfRola,sysinfOsoba_sysinfRola where sysinfOsoba_sysinfRola.id_osoba = sysinfOsoba.id_osoba and sysinfOsoba_sysinfRola.id_rola = sysinfRola.id_rola";
      echo("<h3>WYNIK</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>PRACOWNICY</th><th>ROLE</th><th>USUŃ</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['osoba']."</td><td>".$row['rola']."</td><td>".'
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