<?php

  require 'script/connect.php';

  $datapost = file_get_contents("php://input");

  if (isset($datapost)) {

    $result = json_decode($datapost);

    $username = $result->name;

    $get_username = $conn->prepare("SELECT * FROM person WHERE username=:username");
    $get_username->bindParam(":username", $username);
    $get_username->execute();

    $result = $get_username->rowCount();
    if ($result >= 1) {
      echo 'Username already exist';
    } else {
      echo 'Username is availbale';
    }


  }

 ?>
