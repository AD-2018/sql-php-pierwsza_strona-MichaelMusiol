<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zad.3</title>
    <link rel="stylesheet" href="css_grid.css"/>
</head>
<body>
    <div class="container">
        <header>
        <h1><a href="../index.php">Wstecz</a></h1><br/>
            <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM sklProducenci";
      echo("<h3>PRODUCENCI</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>ID</th><th>NAZWA</th><th>USUŃ</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_nazwa']."</td><td>".$row['nazwa']."</td><td>".'
          <form action="delTabela1.php" method="POST">
          <input type="number" name="id_nazwa" value="'.$row['id_nazwa'].'" hidden>
          <input type="submit" value="X">
        </form>'."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </header>
        <nav>
       
        </nav>
        <main>
        <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM sklArtykuły";
      echo("<h3>ARTYKUŁY</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>ID</th><th>artykuły</th><th>Usuń</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_artykul']."</td><td>".$row['artykul']."</td><td>".'
          <form action="delTabela2.php" method="POST">
          <input type="number" name="id_artykul" value="'.$row['id_artykul'].'" hidden>
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
      $sql = "SELECT * FROM sklProducenci,sklArtykuły,sklProducenci_sklArtykuły WHERE sklProducenci_sklArtykuły.id_nazwa = sklProducenci.id_nazwa and sklProducenci_sklArtykuły.id_artykul = sklArtykuły.id_artykul";
      echo("<h3>WYNIK</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>PRAWNICY</th><th>SPRAWY</th><th>USUŃ</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['nazwa']."</td><td>".$row['artykul']."</td><td>".'
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