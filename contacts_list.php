<?php

require ('functions_agenda.php');

$link = getConnexion();
$sql = "SELECT * FROM agenda1 ORDER BY lastname";
// * = tous les champs par odre alphabétique
$result = mysqli_query($link, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

 ?>

<!DOCTYPE html>

<head>
  <title>Mon essai d'Agenda</title>
  <meta charset="utf-8">
  <link href="contacts_list.css" rel= "stylesheet" >
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;
  300;400&display=swap" rel="stylesheet">
</head>

<body>
 <h1>Liste des contacts</h1>
 <a id="retour" href="Index4.php">
   <img src="retour1.png" alt="retour" height="30px"/>
 </a>

 <div class="tableau">
   <table> <!--Introduit le tableau-->
     <tr> <!--tr sert à définir une nouvelle ligne dans un tableau-->
       <th>Nom</th> <!-- une simple cellule du tableau-->
       <th>Prénom</th>
       <th>Numéro de téléphone</th><br/>
     </tr>
  <?php
    foreach ($rows as $row):
  ?>
     <tr>
       <td class="case"><?= htmlentities($row['lastname']); ?></td>
       <td class="case"><?= htmlentities($row['firstname']); ?></td>
       <td class="case"><?= htmlentities($row['tel']); ?></td><br/>
     </tr>
   <?php
    endforeach;
    ?>
   </table>


  </div>

</body>
</html>
