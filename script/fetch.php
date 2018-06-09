<?php
  // require our connection file
  require 'connect.php';

  if (isset($_GET['id'])) {

    $id = htmlentities(strip_tags(trim($_GET['id'])));
    // establish our SQL statement for retrieval
    $fetch = $conn->prepare("SELECT * FROM person WHERE id=:id");
    $fetch->bindParam(":id", $id);
    $fetch->execute();
    // get all results found
    $result = $fetch->fetch(PDO::FETCH_OBJ);
    // sends the result in JSON to angular script
    echo json_encode($result);

  } else {

    // establish our SQL statement for retrieval
    $fetch = $conn->prepare("SELECT * FROM person");
    $fetch->execute();
    // get all results found
    $result = $fetch->fetchALL(PDO::FETCH_OBJ);
    // sends the result in JSON to angular script
    echo json_encode($result);

  }

 ?>
