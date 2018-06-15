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

    $total_formulaire_req = $bdd->query('SELECT count(nom) FROM Formulaire ORDER BY ID DESC LIMIT 0,50');
    $total_formulaire     = $total_formulaire_req->fetch()[0];

    $nb_pages = ceil($total_formulaire / 2);

    // echo $total_formulaire . " " .$nb_pages;

    // Get asked page
    if (isset($_GET['page']) && $_GET['page'] >= 1) {
      $limitFrom = 2 * ($_GET['page'] - 1);
      $limitTo   = 2 * $_GET['page'];
    } else {
      $limitFrom = 0;
      $limitTo   = 2;
    }
    $reponse = $bdd->query(
      "SELECT nom, tel, textadresse, ladate, email FROM Formulaire ORDER BY ID DESC LIMIT $limitFrom,$limitTo"
    );
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
// Affiche "Pages" et leurs numeros
echo "Page: ";
for( $p = 1; $p <= $nb_pages; $p++ ) {
  // Pour changer de page
  echo "<a href='listecontacts.php?page=$p'>$p</a>  ";
}
?>
  </body>
</html>
