<?php

// includere de conectare la baza de date
include_once('config.php');

$sql = 'select * from angajati';

$result = $conn->query($sql);

// in cazul in care nu sunt inregistrari in result va fi 
//afisat echo din else, daca sunt rezultate incepe bucla de while
?>

<table border=1 width=100%>
    <tr>
        <th>ID</th>
        <th>Nume</th>
        <th>Prenume</th>
        <th>Telefon</th>
        <th>Data nasterii</th>
        <th>Email</th>
        <th>CNP</th>
        <th>Varsta</th>
        <th>Casatorit</th>
    </tr>

<?php
if($result->num_rows > 0) {

    while($row = $result->fetch_assoc() ) {

          $id = $row['id'];
          $nume = $row['nume'];
          $prenume = $row['prenume'];
          $telefon = $row['telefon'];
          $data_nasteri = $row['datan'];
          $email = $row['email'];
          $cnp = $row['cnp'];
          $varsta = $row['varsta'];
          $casatorit = $row['casatorit'];

          // generarea de tabel
          echo '<tr>';

            echo "<td>$id</td>";
            echo "<td>$nume</td>";
            echo "<td>$prenume</td>";
            echo "<td>$telefon</td>";
            echo "<td>$data_nasteri</td>";
            echo "<td>$email</td>";
            echo "<td>$cnp</td>";
            echo "<td>$varsta</td>";
            
            // conditie de transformare 0 sau 1 in da sau nu
            echo "<td>";
            echo ($casatorit)?"DA":"NU";
            echo "</td>";


          echo '</tr>';

    }

} else {

    echo 'Nu exista angajati in baza de date';
}

?>
</table>
<br>



<form action ="index.php" method="get">

    <table>

        <tr>

            <td>Nume</td>
            <td><input name="nume" type="text"></td>

        </tr>
            <tr>
            <td>Prenume</td>
            <td><input name="prenume" type="text"></td>           
        </tr>

        <tr>
            <td>Telefon</td>
            <td><input type="text"></td>
        </tr>

        <tr>
            <td>Data nasterii</td>
            <td><input type="text"></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="text"></td>
        </tr>

        <tr>
            <td>CNP</td>
            <td><input type="text"></td>
        </tr>

        <tr>
            <td>Varsta</td>
            <td><input type="text"></td>
        </tr>

        <tr>
            <td>Casatorit</td>
            <td><input type="text"></td>
        </tr>

        <tr>
            <td></td>
           <td> <input type="submit" value="Insereaza"></td>
        </tr>

</form>
    </table>
