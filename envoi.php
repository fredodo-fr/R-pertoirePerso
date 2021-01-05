<?php

require ('functions_agenda.php');

if (isset($_POST['Enregistrer'])
      && !empty($_POST['lastname'])
      && !empty($_POST['firstname'])) {

        $link = getConnexion();

        $birthday = ($_POST['birthday']);
        $birthday = explode("/", $birthday);
        $newdate = $birthday[2].'-'.$birthday[1].'-'.$birthday[0];


        $lastname = mysqli_real_escape_string($link, $_POST['lastname']);
        $firstname = mysqli_real_escape_string($link, $_POST['firstname']);
        $tel = mysqli_real_escape_string($link, $_POST['tel']);
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $adress1 = mysqli_real_escape_string($link, $_POST['adress1']);
        $adress2 = mysqli_real_escape_string($link, $_POST['adress2']);
        $adress3 = mysqli_real_escape_string($link, $_POST['adress3']);
        $adress4 = mysqli_real_escape_string($link, $_POST['adress4']);
        $newdate = mysqli_real_escape_string($link, $_POST['birthday']);
        $commentaires = mysqli_real_escape_string($link, $_POST['commentaires']);
        $groupe = mysqli_real_escape_string($link, $_POST['groupe']);


        $sql = "INSERT INTO agenda1 (lastname, firstname, tel, email, adress1,
          adress2, adress3, adress4, birthday, commentaires, groupe)
          VALUES ('$lastname', '$firstname', '$tel', '$email', '$adress1',
            '$adress2', '$adress3', '$adress4', '$newdate', '$commentaires', '$groupe')";

        //echo $sql;
        //var_dump($sql);
        //exit;

        $result = mysqli_query($link, $sql);
        if ($result === true) {
          header('Location: Index4.php');
        }else{
          echo "Envoi des données erroné !";
          exit;
        }
}

?>
