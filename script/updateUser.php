<?php
  // require our connection file
  require 'connect.php';

  $datapost = file_get_contents("php://input"); // gets the posted data from the angular script

  if (isset($datapost) || !empty($datapost)) { // checks if there is a value in the posted script

    $request = json_decode($datapost);

    $id = $request->id;
    $name = $request->name;
    $email = $request->email;
    $phone = $request->phone;

    $updaterecord = $conn->prepare("UPDATE `person` SET `name`=:name,`email`=:email,`phone`=:phone WHERE id=:id");
    $updaterecord->bindParam(":name", $name);
    $updaterecord->bindParam(":email", $email);
    $updaterecord->bindParam(":phone", $phone);
    $updaterecord->bindParam(":id", $id);
    $success = $updaterecord->execute();

    if ($success) {
      echo "Success";
    } else {
      echo "Failed";
    }

  }

 ?>
