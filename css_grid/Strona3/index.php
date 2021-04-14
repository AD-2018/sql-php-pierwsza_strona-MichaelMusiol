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
      echo ("<tr><th>ID</th><th>NAZWA</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_nazwa']."</td><td>".$row['nazwa']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </header>
        <nav>
        <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM sklArtykuły";
      echo("<h3>ARTYKUŁY</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>ID</th><th>artykuły</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_artykul']."</td><td>".$row['artykul']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </nav>
        <main>
            2
        </main>
        <aside>
            3
        </aside>
        <footer>
        <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM sklProducenci,sklArtykuły,sklProducenci_sklArtykuły WHERE sklProducenci_sklArtykuły.id_nazwa = sklProducenci.id_nazwa and sklProducenci_sklArtykuły.id_artykul = sklArtykuły.id_artykul";
      echo("<h3>WYNIK</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>PRAWNICY</th><th>SPRAWY</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['nazwa']."</td><td>".$row['artykul']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </footer>
    
</body>
</html>