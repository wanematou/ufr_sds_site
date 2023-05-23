<?php
$servername='localhost';
$username='root';
$password='';
$dbname='gestion';

$conn= mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("erreur de connexion à la base de donnée " . mysqli_connect_error()); 
}
?>
