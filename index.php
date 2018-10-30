<?php

// includere de conectare la baza de date
include_once('config.php');

$sql = 'select * from angajati';

$result = $conn->query($sql);

// in cazul in care nu sunt inregistrari in result va fi 
//afisat echo din else, daca sunt rezultate incepe bucla de while
?>

<?php
// functie care initializeaza butonul de submit din formular

if(isset($_GET['inserare'])) {

    // in parantezele patrate sunt scrise name de la inputurile din formular
    $nume =         $_GET['nume'];
    $prenume =      $_GET['prenume'];
    $telefon =      $_GET['telefon'];
    $datan =        $_GET['datan'];
    $email =        $_GET['email'];
    $cnp =          $_GET['cnp'];
    $varsta =       $_GET['varsta'];
    $casatorit =    $_GET['casatorit'];

    $sql = "insert into angajati (nume, prenume, telefon, datan, email, cnp, varsta, casatorit) 
    values ('$nume', '$prenume','$telefon', '$datan', '$email', '$cnp', '$varsta', '$casatorit')";

    // introducerea efectiva in baza de date cu verificare
    
    if ($conn->query($sql) == TRUE) {

        echo "Am introdus pe $nume";
    } else {

        echo "Eroare: ".$conn->error;
    }
}

if(isset($_GET['delete'])) {

    $id = $_GET['id'];

    $sql = "delete from angajati where id='$id'";

    $conn->query($sql);
}

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

            echo "<td><a href ='?delete&id=$id'>Delete </a></td>";

          echo '</tr>';

    }

} else {

    echo 'Nu exista angajati in baza de date';
}

?>

</table>

<!-- ---------------------------------------------------------------------------------------------- -->

<br>

<!-- orice input trebuie sa aiba un nume pt ca PHP-ul sa il poate recunoaste -->
<form action ="index.php" method="GET">

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
            <td><input name="telefon" type="text"></td>
        </tr>

        <tr>
            <td>Data nasterii</td>
            <td><input name="datan" type="text"></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input name="email" type="text"></td>
        </tr>

        <tr>
            <td>CNP</td>
            <td><input name="cnp" type="text"></td>
        </tr>

        <tr>
            <td>Varsta</td>
            <td><input name="varsta" type="text"></td>
        </tr>

        <tr>
            <td>Casatorit</td>
            <td><input name="casatorit" type="text"></td>
        </tr>

        <tr>
            <td></td>
           <td> <input type="submit" name="inserare" value="Insereaza"></td>
        </tr>

</form>
    </table>
