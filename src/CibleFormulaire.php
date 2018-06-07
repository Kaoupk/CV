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
 ?>
<p>Bonjour !</p>


<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo htmlspecialchars($_POST['nom']); ?> !</p>


<p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page formulaire.php.</p>


<?php

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur

if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) {

        // Testons si le fichier n'est pas trop gros

        if ($_FILES['monfichier']['size'] <= 8000000) {



                  move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));

                  echo "L'envoi a bien été effectué ";

        }

}

?>
