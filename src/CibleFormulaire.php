<p>Bonjour !</p>


<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo htmlspecialchars($_POST['nom']); ?> !</p>


<p>Si tu veux changer de prénom, <a href="Formulairefinal.php">clique ici</a> pour revenir à la page formulaire.php.</p>

<p> <?php echo $_POST['adresse']; ?> </p>

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
