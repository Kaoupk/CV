<?php
session_start();

if (isset($_POST['nom']) && !empty($_POST['nom'])){
  $_SESSION['nom']= $_POST['nom'];
  $nom = $_POST['nom'];
}

if (isset($_POST['adresse']) && !empty($_POST['adresse'])){
  $_SESSION['adresse']= $_POST['adresse'];
  $adresse = $_POST['adresse'];
}

if (isset($_POST['tel']) && !empty($_POST['tel'])){
  $_SESSION['tel']= $_POST['tel'];
  $tel = $_POST['tel'];
}

if (isset($_POST['date']) && !empty($_POST['date'])){
  $_SESSION['date']= $_POST['date'];
  $date = $_POST['date'];
}

if (isset($_POST['textadresse']) && !empty($_POST['textadresse'])){
  $_SESSION['textadresse']= $_POST['textadresse'];
  $textadresse = $_POST['textadresse'];
}

 // Connexion à la base de données

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=CV;charset=utf8', 'root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO Formulaire (nom, textadresse, tel, ladate, email) VALUES(?, ?, ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['textadresse'], $_POST['tel'], $_POST['ladate'], $_POST['email']));
// print_r($bdd->errorInfo());

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) {

        // Testons si le fichier n'est pas trop gros

  if ($_FILES['monfichier']['size'] <= 8000000) {

    move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));

    echo "L'envoi a bien été effectué ";
  }

}
header("Location:index.php");
?>
