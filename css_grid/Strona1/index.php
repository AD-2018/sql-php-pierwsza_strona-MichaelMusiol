<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zad.1</title>
    <link rel="stylesheet" href="css_grid.css"/>
</head>
<body>
    <div class="container">
        <header>
            <h1><a href="../index.php">Wstecz</a></h1><br/>
            <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM firmaPracownik";
      echo("<h3>PRACOWNICY</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>ID</th><th>PRACOWNIK</th><th>Usuń</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_pracownik']."</td><td>".$row['pracownik']."</td><td>".'
            <form action="delTabela1.php" method="POST">
            <input type="number" name="id_pracownik" value="'.$row['id_pracownik'].'" hidden>
            <input type="submit" value="X">
          </form>'."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </header>
        <nav>
        <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM firmaProjekt";
      echo("<h3>PROJEKTY</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>ID</th><th>PROJEKT</th><th>Usuń</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['id_projekt']."</td><td>".$row['projekt']."</td><td>"."</td><td>".'
          <form action="delTabela2.php" method="POST">
          <input type="number" name="id_projekt" value="'.$row['id_projekt'].'" hidden>
          <input type="submit" value="X">
        </form>'."</td>");
          echo ('</tr>');
      }
      echo ('</table>');
            ?>
        </nav>
        <main>
            <h3>USUŃ PRACOWNIKA</h3>
            <p>tabela</p>
    <select>
     <option value="firmaPracownik">Pracownik</option>
     <option value="firmaProjekt">Projekt</option>
     <option value="firmaPracownik_firmaProjekt">Wynik</option><br/>
    </select>
	<form action="delTabela1.php" method="POST">
   	<label> pracownik</label><input type="number" name="id_pracownik" required></br>
    <input type="submit" value="Usuń pracownika">
	</form>
    
        </main>
        <aside>
            3
        </aside>
        <footer>
        <?php
        require_once("../../lib.php");
      $sql = "SELECT * FROM firmaPracownik,firmaProjekt,firmaPracownik_firmaProjekt WHERE firmaPracownik.id_pracownik=firmaPracownik_firmaProjekt.id_pracownik and firmaProjekt.id_projekt=firmaPracownik_firmaProjekt.id_projekt";
      echo("<h3>WYNIK</h3>");
      
      $result = mysqli_query($conn, $sql);
      
      echo('<table border="1">');
      echo ("<tr><th>PRACOWNICY</th><th>PROJEKTY</th><th>USUŃ</th>");
      while($row = mysqli_fetch_assoc($result)) {
          echo ('<tr>');
          echo ("<td>".$row['pracownik']."</td><td>".$row['projekt']."</td><td>"."</td><td>".'
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
