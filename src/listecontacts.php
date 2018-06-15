<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <link rel="stylesheet" href="css/styleliste.css" />
        <title>Liste de mes contacts</title>

  </head>

  <body>

<?php
  try {

          $bdd = new PDO('mysql:host=localhost;dbname=CV;charset=utf8', 'root', '');
}

  catch (Exception $e) {

              die('Erreur : ' . $e->getMessage());
}


    $reponse = $bdd->query('SELECT nom, tel, textadresse, ladate, email FROM Formulaire ORDER BY ID DESC LIMIT 0,50');

?>


    <div ="table">

        <table>

          <caption>Liste de mes contacts</caption>

          <tr>
            <th>Nom et/ou nom de l'entreprise</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th> Date</th>
            <th>Email</th>
          </tr>

<?php
          while ($donnees = $reponse->fetch()) {
            echo "<tr>";
            echo '<td><p>' . htmlspecialchars($donnees['nom']) . '</p></td>';
            echo '<td><p>' . htmlspecialchars($donnees['textadresse']) . '</p></td>';
            echo '<td><p>' . htmlspecialchars($donnees['tel']) . '</p></td>';
            echo '<td><p>' . htmlspecialchars($donnees['ladate']) . '</p></td>';
            echo '<td><p>' . htmlspecialchars($donnees['email']) . '</p></td>';
            echo "</tr>";
          }
?>

        </table>

    </div>
<?php
$reponse->closeCursor();
?>
  </body>
</html>
