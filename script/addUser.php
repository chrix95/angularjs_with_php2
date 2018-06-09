<?php
  // require our connection file
  require 'connect.php';

  $datapost = file_get_contents("php://input"); // gets the posted data from the angular script

  if (isset($datapost) || !empty($datapost)) { // checks if there is a value in the posted script

    $request = json_decode($datapost);

    $name = $request->name;
    $email = $request->email;
    $phone = $request->phone;

    $addrecord = $conn->prepare("INSERT INTO person (name, email, phone) VALUES (:name, :email, :phone)");
    $addrecord->bindParam(":name", $name);
    $addrecord->bindParam(":email", $email);
    $addrecord->bindParam(":phone", $phone);
    $success = $addrecord->execute();

    if ($success) {
      echo "Success";
    } else {
      echo "Failed";
    }

  }

 ?>
