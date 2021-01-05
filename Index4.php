<?php
session_start();

//require ('fonctions_agenda.php');
 ?>

<!DOCTYPE html>

<html lang="fr-FR">

  <head>
    <title>Mon essai d'Agenda</title>
    <meta charset="utf-8">
    <link href="Agenda.css" rel= "stylesheet" >
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;
    300;400&display=swap" rel="stylesheet">
  </head>

  <body>
    <h1>Mon Agenda</h1>

    <form action="envoi.php" method="post" enctype="multipart/
    multipart/form-data">

      <fieldset>
    <!--1er champs -->
        <div class="champs1">
            <legend>Informations de contact</legend>

            <label for="nom">Nom</label></br>
              <input type="text" id="nom" name="lastname" required /></br>
            <label for="prenom">Prénom</label></br>
              <input type="text" id="prenom" name="firstname" required /></br>
            <label for="tel">Téléphone</label></br>
              <input type="tel" id="tel" name="tel" /></br>
            <label for="email">Email</label></br>
              <input type="email" id="email" name="email" /></br>
        </div>

        <!--2ème champs -->
        <div class="champs2">
          <legend>Informations Complémentaires</legend>

            <label for="numDeRue">Numéro de rue</label></br>
              <input type="text" id="numDeRue" name="adress1" /></br>
            <label for="rue">Rue/Av/Bd...</label></br>
              <input type="text" id="rue" name="adress2" /></br>
            <label for="codePostal">Code Postal</label></br>
              <input type="text" id="codePostal" name="adress3" /></br>
            <label for="ville">Ville</label></br>
              <input type="text" id="ville" name="adress4" /></br>
        </div>

        <!--3ème champs -->
        <div class="champs3">
          <legend>Divers informations à compléter</legend>

          <label for="birthday">Date de naissance</label></br>
              <input type="date" id="birthday" name="birthday" /></br>
            <label for="commentaires">Commentaires</label></br>
              <textarea id="commentaires" name="commentaires">
                Votre commentaire ici...</textarea></br>
            <label for="groupe">Groupe de contacts</label>
              <select name="groupe" id="groupe">
                <option value="Famille">Famille</option>
                <option value="Ami">Ami</option>
                <option value="Travail">Travail</option>
                <option value="Autres">Autres</option>
              </select></br>
        </div>
        <div class="champs4">
          <nav>
              <ul>
                  <li><input type="submit" id ="Enregistrer"
                    value="Enregistrer" name="Enregistrer"
                    style="background-color: #eaf2f8; height: 50px;" /></li>
                  <li><a href="contacts_trouver.php">Trouver un contact</a></li>
                  <li><a href="contacts_list.php">Liste des contacts</a></li>
              </ul>
          </nav>
        </div>
      </fieldset>
    </form>
  </body>

</html>
