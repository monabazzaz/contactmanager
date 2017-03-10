<!---retrieves table values from database--->
<!---existing contact data is set to its respective field and allows for edits to be made--->
<!---directs user to update.php--->
<?php

include 'database.php';

$stmt = $db->prepare('UPDATE contacts SET firstName = :firstName, lastName = :lastName, title = :title, address = :address, city = :city, state = :state, zip = :zip, phone = :phone, notes = :notes WHERE id = :id');
$stmt->execute(array(
  ':firstName' => $_POST['firstName'],
  ':lastName' => $_POST['lastName'],
  ':title' => $_POST['title'],
  ':address' => $_POST['address'],
  ':city' => $_POST['city'],
  ':state' => $_POST['state'],
  ':zip' => $_POST['zip'],
  ':phone' => $_POST['phone'],
  ':notes' => $_POST['notes'],
  ':id' => $_POST['id']
));

header('Location: http://localhost:8080/edit.php?updated=true&id=' . $_POST['id']);
