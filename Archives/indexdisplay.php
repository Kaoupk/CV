<?php
session_start(); // On démarre la session AVANT toute chose
if (isset($_SESSION['nom']) && !empty($_SESSION['nom'])) {
  $nom=$_SESSION ["nom"];
}
else {
  $nom="";
}

if (isset($_SESSION['adresse']) && !empty($_SESSION['adresse'])) {
  $adresse=$_SESSION ["adresse"];
}
else {
  $adresse="";
}

if (isset($_SESSION['tel']) && !empty($_SESSION['tel'])) {
  $tel=$_SESSION ["tel"];
}
else {
  $tel="";
}

if (isset($_SESSION['date']) && !empty($_SESSION['date'])) {
  $date=$_SESSION ["date"];
}
else {
  $date="";
}

if (isset($_SESSION['textadresse']) && !empty($_SESSION['textadresse'])) {
  $textadresse=$_SESSION ["textadresse"];
}
else {
  $textadresse="";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Curriculum Vitae</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script type="text/javascript" src="js/script.js"></script>

  </head>
  <body>
    <header>
<?php include("menu.php");
 ?>
	</header>

  <div id="Bienvenue">
    Madame, Monsieur, bienvenue<br />
    Curriculum Vitae interactif, cliquez sur les onglets pour naviguer
  </div>
<div id="conteneur">
	<div class="hidden competences" id="competences">
	  <ul>
      <li> Préparer le matériel nécessaire</li><br />
	    <li> Respecter le temps indiqué et les consignes de sécurité et d’hygiène</li><br />
	    <li> Informer le responsable des anomalies</li><br />
	    <li> Nettoyer du matériel ou un équipement</li><br />
      <li>Conseiller un client selon ses gouts et lectures précédentes</li><br />
      <li>Ranger et organiser par ordre alphabétique</li><br />
      <li>S'occuper d'un caisse enregistreuse</li><br />
      <li>S'occuper d'enfants entre 3 et 12 ans</li><br />
      <li>Faire respecter des règles de vie a des enfants</li><br />
	  </ul>
	</div>

	<div class="hidden experiences" id="experiences">
	  <ul>
    <li>Juin 2018 - <strong>Stage en informatique</strong> - <em>Caldera</em> - Eckbolsheim - 2 semaines</li><br />
    <li>Mai 2018 - <strong>Stage en librairie</strong> - <em>Librairie Le Camphrier </em> - Strasbourg - 2 semaines</li><br />
    <li>Avril 2018 - <strong> Stage en centre de loisirs</strong> - <em> Les petits loups</em> - Eschau - 2 semaines</li><br />
	  <li> Août 2017 - <strong>Agent de propreté</strong> - <em>Pierre et Vacances</em> - Port en Bessin - 1 mois</li><br />
		<li> Août 2015 - <strong>Employé saisonnier</strong> - <em>Mairie (service propreté)</em> - Illkirch - 1 mois</li> <br />
		<li> Février 2013 - <strong>Stagiaire vendeur</strong> - <em>Décathlon</em> - Geispolsheim - 1 semaine</li>
	  </ul>
	</div>

    <div class="hidden" id="formations">
	  <ul>
        <li>2017 - <strong>Bac STIDD - Lycée Louis Couffignal</strong> - Strasbourg</li><br />
		<li style="margin-right: 10px;">2013 - <b>Brevet des collèges - Collège des Roseaux</b> - Illkirch</li>
	  </ul>
    </div>

	<div class="hidden" id="informations">
	  <ul>
	    <li> <strong>Informatique</strong>   Pack Office, Gimp, Photoshop, CSS, HTML</li><br />
      <div id="conteneurimg">
    <div class="fig"><img src="img/office.png" style="width: 80px; margin-right: 40px; "alt="Logo office" title="Pack Office" /></div>
	  <div class="fig"><img src="img/gimp.png" style="width: 80px; margin-right: 40px; "alt="Logo gimp" title="Gimp" /></div>
	  <div class="fig"><img src="img/photo.jpg" style="width: 80px; margin-right: 40px;" alt="Logo photoshop" title="Photoshop" /></div>
  	<div class="fig"><img src="img/CSS3.png" style="width: 60px; margin-right: 40px;" alt="Logo CSS3" title="CSS3" /></div>
    <div class="fig"><img src="img/HTML5.png" style="width: 85px; margin-right: 40px;" alt="Logo HTML5" title="HTML5" /></div>
    <div class="fig"><img src="img/php.png" style="width: 85px; margin-right: 40px;" alt="Logo PHP" title="PHP" /></div>
</div><br />
        <li> <strong>Langues</strong>             Anglais (Niveau B1), Portugais (Niveau A1)</li><br />
        <div id="conteneurDrap">
         <div class="fig"><img src="img/DrapeauAng.png" style="width: 80px; margin-right: 80px;" title="Niveau B1 !" /></div>
         <div class="fig"><img src="img/DrapeauPor.png" style="width: 80px; margin-left: 100px;" title="Niveau A1 !" /></div>
       </div><br /><br />
        <li> <strong>Sports</strong>              Escalade, Parkour</li><br /><br />
        <li> <strong>Loisirs</strong>             Mangas, jeux vidéos, films/films d’animation </li>
	  </ul>
	</div>

	<div class="hidden" id="coord">
	  <p class="name">

      <form method="post" action="CibleFormulaire.php" enctype="multipart/form-data" id="contactform">

         <p>

           <label for="nom">Votre nom </label> : <input type="text" name="nom" id="nom" size="30" maxlenght="30" required value="<?php echo $nom ?>"/><br />
           <br />

           <label for="adresse">Si vous souhaitez que je vous rencontre :</label><input id="adresse" name="adresse" value="<?php echo $adresse ?>"/><br />
<br />
                  <textarea name="textadresse" id="textadresse" rows="3" cols="40" placeholder="Adresse" form="contactform"><?php echo $textadresse ?></textarea><br />
                  <br />

                <label for="tel">Si vous souhaitez que je vous rappelle</label> : <input id="tel" name="tel" type="tel" value="<?php echo $tel ?>"/><br />
                <br />
                <label for="date">Si oui, a quelle date ? </label><input id="date" name="date" type="date" value="<?php echo $date ?>"/><br />
                <br />

<label for="email">Envoyer ceci par email</label> : <input type="email" value="corentin.milot@free.fr"/><br />
<br />
        <p>

                Si besoin, voici un formulaire d'envoi de fichier (8Mo maximum):<br /><br />

                <input type="file" name="monfichier" /><br /><br />

        </p>
     <input type="submit" value="Envoyer" />
     <input type="reset" value="Tout effacer" id="delete" onclick="effacer(event);" />

      </form><br />
   <br />   <br />   <br />   <br />   <br />
        Corentin MILOT<br/>
	    20 ans<br/>
	    6, rue du four banal, Illkirch-Graffenstaden<br/>
	    corentin.milot@free.fr<br/>
	    06 21 67 27 72
	  </p>
	</div>
</div>
  </body>
</html>
