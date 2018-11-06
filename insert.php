<?php

// includere de conectare la baza de date
include_once('config.php');

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

}

// comanda de refresh dupa ce este introdus ceva in baza de date

if($conn->query($sql)) {

    header("Location:index.php");
} else {

    echo "Eroare: ".$conn->error;
}

?>

<!-- orice input trebuie sa aiba un nume pt ca PHP-ul sa il poate recunoaste -->
<form action ="insert.php" method="GET">

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