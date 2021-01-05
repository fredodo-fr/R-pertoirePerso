<?php

require ('functions_agenda.php');

if (isset($_POST['Envoyer']) && !empty($_POST['lastname']) && empty($_POST['firstname'])) {

        $link = getConnexion();

        $lastname = mysqli_real_escape_string($link, $_POST['lastname']);
        $firstname = mysqli_real_escape_string($link, $_POST['firstname']);

        $sql = "SELECT * FROM agenda1 WHERE lastname='$lastname'";
        //var_dump($sql);
        //exit;

        $result = mysqli_query($link, $sql);

        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

      }
      elseif (isset($_POST['Envoyer']) && empty($_POST['lastname']) && !empty($_POST['firstname'])) {

          $link = getConnexion();

          $lastname = mysqli_real_escape_string($link, $_POST['lastname']);
          $firstname = mysqli_real_escape_string($link, $_POST['firstname']);

          $sql = "SELECT * FROM agenda1 WHERE firstname='$firstname'";
          //var_dump($sql);
          //exit;

          $result = mysqli_query($link, $sql);

          $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

      }
      elseif (isset($_POST['Envoyer']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {

        $link = getConnexion();

        $lastname = mysqli_real_escape_string($link, $_POST['lastname']);
        $firstname = mysqli_real_escape_string($link, $_POST['firstname']);

        $sql = "SELECT * FROM agenda1 WHERE lastname='$lastname' AND firstname='$firstname'";
        //var_dump($sql);
        //exit;

        $result = mysqli_query($link, $sql);

        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

      }
      else{
        header('Location: Index4.php');
    }

?>


<!DOCTYPE html>

<head>
  <title>Mon essai d'Agenda</title>
  <meta charset="utf-8">
  <link href=".css" rel= "stylesheet" >
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;
  300;400&display=swap" rel="stylesheet">
</head>

<body>
 <h1>Liste des contacts</h1>
 <a id="retour" href="Index4.php">
   <img src="retour1.png" alt="retour" height="30px"/>
 </a>

 <?php    foreach ($rows as $row):
  ?>
    <div class="container1"
       <p class="case">N°de contact:<?= intval($row['id']); ?></p>
       <p class="case">Nom         :<?= htmlentities($row['lastname']); ?></p>
       <p class="case">Prénom      :<?= htmlentities($row['firstname']); ?></p>
       <p class="case">Téléphone   :<?= htmlentities($row['tel']); ?></p>
       <p class="case">Email       :<?= htmlentities($row['email']); ?></p><br/>
    </div>
    <div class="container2"
       <p class="case">N°          :<?= htmlentities($row['adress1']); ?></p>
       <p class="case">Rue/Av/Bd...:<?= htmlentities($row['adress2']); ?></p>
       <p class="case">Code Postal :<?= htmlentities($row['adress3']); ?></p>
       <p class="case">Ville       :<?= htmlentities($row['adress4']); ?></p><br/>
    </div>

    <a href="">Modifier</a>
    <a href="contact_supprimer.php?id=<?= intval($row['id']); ?>">Supprimer la fiche</a>

  <hr size=4 width=100% align=left>

   <?php

    endforeach;
    ?>
</body>

</html>
