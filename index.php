<?php
require_once('lib.php');
echo("<h3>ZAD.1</h3>");
$sql ="select * from pracownicy";
echo($sql);
$result = mysqli_query($conn, $sql);
echo('<table border="1" class="tabela"');
echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>");
while($row=mysqli_fetch_assoc($result))
{
echo("<tr>");
echo("<tr>");
echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
echo("<tr>");
echo("</tr>");
}
echo('</table>');
?>
