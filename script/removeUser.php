
<?php

  require 'connect.php';

  $datapost = file_get_contents("php://input");

  if (isset($datapost)) {

    $result = json_decode($datapost);

    $id = $result->id;

    $del_user = $conn->prepare("DELETE FROM `person` WHERE id=:id");
    $del_user->bindParam(":id", $id);
    $result = $del_user->execute();

    echo $result;

  }

 ?>
