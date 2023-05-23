<?php
if(isset($_POST['submit'])){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date = $_POST['date_de_naissance'];
$genre = $_POST['genre'];
$entre = $_POST['date_entree'];
$personne = $_POST['personne'];

include('connexion.php');
$sql ="INSERT INTO etudiant (nom, prenom, date_de_naissance, genre, date_entree, personne) VALUES ('$nom','$prenom','$date','$genre','$entre','$personne')";
        
$result = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)){
    echo "Enregistrement reussi";
}else{
    echo "erreur: " . $sql . mysqli_error($conn);
}

mysqli_close($conn);
}
?>