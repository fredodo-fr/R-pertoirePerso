<?php

require ('functions_agenda.php');


 ?>

<!DOCTYPE html>
<head>
  <title>Mon essai d'Agenda</title>
  <meta charset="utf-8">
  <link href="contacts_trouver.css" rel= "stylesheet" >
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;
  300;400&display=swap" rel="stylesheet">
</head>

<body>
 <h1>Trouver un contact</h1>
 <a id="retour" href="Index4.php">
   <img src="retour1.png" alt="retour" height="30px"/>
 </a>

 <form action="contact_afficher.php" method="post" enctype="multipart/
 multipart/form-data">

   <fieldset>
     <div class="champs1">
         <label for="nom">Nom</label></br>
           <input type="text" id="nom" name="lastname" /></br>
         <label for="prenom">Prénom</label></br>
           <input type="text" id="prenom" name="firstname" /></br>
     </div>
     <input type="submit" id ="Envoyer"
       value="Envoyer" name="Envoyer"
       style="background-color: #eaf2f8; height: 50px;" />
     </fieldset>
 </form>

</body>
</html>
