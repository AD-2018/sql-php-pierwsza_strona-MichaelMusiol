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
      echo ("<tr><th>ID</th><th>OSOBA</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_osoba']."</td><td>".$row['osoba']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </header>
        <nav>
        <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM kancpra_Sprawa";
      echo("<h3>ROLA</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>ID</th><th>ROLA</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_rola']."</td><td>".$row['rola']."</td>");
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
      $sql = "SELECT * FROM sysinfOsoba,sysinfRola,sysinfOsoba_sysinfRola where sysinfOsoba_sysinfRola.id_osoba = sysinfOsoba.id_osoba and sysinfOsoba_sysinfRola.id_rola = sysinfRola.id_rola";
      echo("<h3>WYNIK</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>PRACOWNICY</th><th>ROLE</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['osoba']."</td><td>".$row['rola']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </footer>
    
</body>
</html>