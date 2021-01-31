<?php
function tabelka1($sql,$conn,$wartosc1){
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }

    echo('<table border="1">');
        echo('<th>'.$wartosc1.'</th>');

        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row[$wartosc1].'</td>');
            echo('</tr>');
        }
    
        echo('</table>');
    }


function tabelka2($sql,$conn,$wartosc1,$wartosc2){
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }
    echo('<table border="1">');
        echo('<th>'.$wartosc1.'</th><th>'.$wartosc2.'</th>');

        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row[$wartosc1].'</td><td>'.$row[$wartosc2].'</td>');
            echo('</tr>');
        }    
           echo('</table>');
        }
    
function tabelka3($sql,$conn,$wartosc1,$wartosc2,$wartosc3){
    $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo("<li>ok");
    } else {
      echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
    }
        
    echo('<table border="1">');
        echo('<th>'.$wartosc1.'</th><th>'.$wartosc2.'</th><th>'.$wartosc3.'</th>');
       while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row[$wartosc1].'</td><td>'.$row[$wartosc2].'</td><td>'.$row[$wartosc3].'</td>');
            echo('</tr>');
        }     
        echo('</table>');
    }
function tabelka4($sql,$conn,$wartosc1,$wartosc2,$wartosc3,$wartosc4){
        $result = mysqli_query($conn, $sql);
        if ( $result) {
            echo("<li>ok");
        } else {
          echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
        }
            
        echo('<table border="1">');
            echo('<th>'.$wartosc1.'</th><th>'.$wartosc2.'</th><th>'.$wartosc3.'</th><th>'.$wartosc4.'</th>');
           while($row=mysqli_fetch_assoc($result)){
                echo('<tr>');
                echo('<td>'.$row[$wartosc1].'</td><td>'.$row[$wartosc2].'</td><td>'.$row[$wartosc3].'</td><td>'.$row[$wartosc4].'</td>');
                echo('</tr>');
            }     
            echo('</table>');
        }

function tabela1($sql,$conn){
    $result = mysqli_query($conn, $sql);
    if ( $result) {
            echo("<li>ok");
        } else {
          echo("Error: ".$sql."<br/><br/>". mysqli_error($conn));
        }
    
    echo('<table border="1">');
        echo('<th>id</th><th>imie</th><th>zarobki</th><th>dzial</th><th>data urodzenia</th>');
    
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td><td>'.$row['data_urodzenia'].'</td>');
            echo('</tr>');
        }
    
        echo('</table>');
    }

function tabela2($sql,$conn){
    $result = mysqli_query($conn, $sql);

    echo('<table border="1" class="tabela"');
    echo ("<tr><th>id_pracownicy</th><th>imie</th><th>dzial</th><th>nazwa_dzial</th><th>zarobki</th><th>data_urodzenia</th></tr>");
    while($row=mysqli_fetch_assoc($result)){
    echo("<tr>");
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
        echo("<tr>");
    echo("</tr>");
    }
    echo('</table>');
    }
?>