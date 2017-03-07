<?php

  include 'database.php';

  $stmt = $db->prepare("INSERT INTO contacts
    (firstName, lastName, title, address, city, state, zip, phone, notes)
    VALUES
    (:firstName, :lastName, :title, :address, :city, :state, :zip, :phone, :notes)
    ");

  $stmt->execute(array(
    ':firstName' => $_POST['firstName'],
    ':lastName' => $_POST['lastName'],
    ':title' => $_POST['title'],
    ':address' => $_POST['address'],
    ':city' => $_POST['city'],
    ':state' => $_POST['state'],
    ':zip' => $_POST['zip'],
    ':phone' => $_POST['phone'],
    ':notes' => array_key_exists('notes',$_POST) ? $_POST['notes'] : 0
  ));

  $id = $db->lastInsertId();

  // header('Location: http://localhost:8080/edit.php?id=' . $id . '&created=true');

?>