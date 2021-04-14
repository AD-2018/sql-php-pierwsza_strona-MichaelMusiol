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
      echo ("<tr><th>ID</th><th>PRACOWNIK</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_imie_nazwisko']."</td><td>".$row['imie_nazwisko']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </header>
        <nav>
        <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM kancpra_Sprawa";
      echo("<h3>SPRAWY</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>ID</th><th>SPRAWY</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_nazwa_sprawy']."</td><td>".$row['nazwa_sprawy']."</td>");
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
      $sql = "SELECT * FROM kancpra_Prawnik,kancpra_Sprawa, kancpra_Prawnik_kancpra_Sprawa where kancpra_Prawnik.id_imie_nazwisko=kancpra_Prawnik_kancpra_Sprawa.id_imie_nazwisko and kancpra_Sprawa.id_nazwa_sprawy=kancpra_Prawnik_kancpra_Sprawa.id_nazwa_sprawy";
      echo("<h3>WYNIK</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>PRAWNICY</th><th>SPRAWY</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['imie_nazwisko']."</td><td>".$row['nazwa_sprawy']."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </footer>
    
</body>
</html>