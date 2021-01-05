<?php

require ('functions_agenda.php');


if (isset($_GET['id']) && !empty($_GET['id']) && intval($_GET['id'])) {

  //Je teste la valeur de la variable $_GET['id']
  echo($_GET['id']);
  var_dump($_GET['id']);
  exit;

    $link = getConnexion();
    //$id = mysqli_real_escape_string($link, $_GET['id']);
    $id = ($link, $_GET['id']);

    //var_dump($_GET['id']);
    //exit();
    //echo($id);
    //exit();
        // requête de connection
    $sql = "DELETE FROM agenda1 WHERE id='$id'";

    $resultSupprime = mysqli_query($link, $sql);

    if ($resultSupprime === true) {
        header('Location: Index4.php');
    exit();
} else {
    header('Location: 404.php');
    exit();
}

?>
