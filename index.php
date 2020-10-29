<?php
$servername = "sql7.freemysqlhosting.net";
$username ="sql7373397";
$password = "XKvMFd58NH";
$dbname = "sql7373397";

$conn= new mysqli($servername,$username,$password,$dbname);

$sql ="select * from pracownicy";
echo("<h3>ZAD.1</h3>");
$result = mysqli_query($conn, $sql);

echo('<table border="1" class="tabela"');
echo ("<tr><th>id</th><th>imie</th><th>dzial</th><th>zarobki</th></tr>");
while($row=mysqli_fetch_assoc($result)){
echo("<tr>");
    //print_r($row);
    echo("<tr>");
    echo("<td>".$row['id']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("<tr>");
echo("</tr>");

}
echo('</table>');
echo("<h3>ZAD.2</h3>");

$sql ="select * from pracownicy where imie not like '%a'";
$result = mysqli_query($conn, $sql);

echo('<table border="1" class="tabela"');
echo ("<tr><th>id</th><th>imie</th><th>dzial</th><th>zarobki</th></tr>");
while($row=mysqli_fetch_assoc($result)){
echo("<tr>");
    //print_r($row);
    echo("<tr>");
    echo("<td>".$row['id']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("<tr>");
echo("</tr>");

}
echo('</table>');



?>
