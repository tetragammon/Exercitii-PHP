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
        <th>DELETE</th>
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

            echo "<td><a href ='delete.php?delete&id=$id'>Delete</a>";
            echo " | ";
            echo "<a href ='update.php?update&id=$id'>Update</a>";
            echo "</td>";

          echo '</tr>';

    }

} else {

    echo 'Nu exista angajati in baza de date';
}

?>

</table>
<br>
<div class="button-space">
<a class="btn btn-success" href='insert.php'>Adauga angajat</a>
</div>





