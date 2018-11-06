<?php

include_once('config.php');

$id = $_GET['id'];

$select_id = "select * from angajati where id=$id";

$result = $conn->query($select_id);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc() ) {
        
        echo '<form action="update.php" method="post">';
        
        echo '<input type="text" name="nume" placeholder="Nume" value="'.$row['nume'].'" >';
        echo '<br />';
        echo '<input type="text" name="prenume" placeholder="Prenume" value="'.$row['prenume'].'" >';
        echo '<br />';
        echo '<input type="text" name="telefon" placeholder="Telefon" value="'.$row['telefon'].'" >';
        echo '<br />';
        echo '<input type="text" name="datan" placeholder="Data nasterii" value="'.$row['datan'].'" >';
        echo '<br />';
        echo '<input type="text" name="email" placeholder="Email" value="'.$row['email'].'" >';
        echo '<br />';
        echo '<input type="text" name="cnp" placeholder="CNP" value="'.$row['cnp'].'" >';
        echo '<br />';
        echo '<input type="text" name="varsta" placeholder="Varsta" value="'.$row['varsta'].'" >';
        echo '<br />';
        echo '<input type="text" name="casatorit" placeholder="Casatorit" value="'.$row['casatorit'].'" >';
        echo '<br />';
       
        echo '<input type="submit" value="Update" name="update" >';
        
        echo '<input type="hidden" value="'.$id.'" name="id" >';
        
        echo '</form>';
        
    }
    
}

if(isset($_POST['update'])) {
    
    $id = $_POST['id'];
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $telefon = $_POST['telefon'];
    $datan = $_POST['datan'];
    $email = $_POST['email'];
    $cnp = $_POST['cnp'];
    $varsta = $_POST['varsta'];
    $casatorit = $_POST['casatorit'];
    
    if(empty($nume) || empty($prenume) || empty($telefon) || empty($email) || empty($datan) || empty($cnp) || empty($varsta) || empty($casatorit) ) {
        
        if(empty($nume)) {
            echo "Nu ai completat numele <br />";
        }
        if(empty($prenume)) {
            echo "Nu ai completat prenumele <br />";
        }
        if(empty($telefon)) {
            echo "Nu ai completat numarul de telefon <br />";
        }
        if(empty($email)) {
            echo "Nu ai completat adresa de email <br />";
        }
        if(empty($datan)) {
            echo "Nu ai completat data nasterii <br />";
        }
        if(empty($cnp)) {
            echo "Nu ai completat cnp-ul <br />";
        }
        if(empty($varsta)) {
            echo "Nu ai completat varsta <br />";
        }
        if(empty($casatorit)) {
            echo "Nu ai completat starea civila <br />";
        }
        
        
    } else {
    
        $update = "update angajati set nume='$nume', prenume='$prenume', telefon='$telefon', email='$email', datan ='$datan', cnp ='$cnp', varsta ='$varsta', casatorit ='$casatorit' where id=$id ";

        if($conn->query($update) === TRUE) {
            echo "Am actualizat inregistrarea.";
            header("Location:index.php");
        } else {
            echo "Eroare : " . $conn->error;
        }
        
    }
    
}

?>
