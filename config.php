<?php

// conectare la baza de date

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'date_personale';

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {

    die("Eroare la conectare: ". $conn->connect_error);
}

?>