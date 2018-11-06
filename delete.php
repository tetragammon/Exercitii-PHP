<?php

// includere de conectare la baza de date
include_once('config.php');

if(isset($_GET['delete'])) {

$id = $_GET['id'];

$sql = "delete from angajati where id='$id'";

$conn->query($sql);

}
if($conn->query($sql) === TRUE) {
    echo "Am sters inregistrarea cu ID:" . $id ;
    header("refresh:1;url=index.php");    
}else {

    echo "Eroare la stergere :" .$conn->error;
}

