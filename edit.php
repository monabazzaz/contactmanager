<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('updated', $_GET)) :?>
<div class="alert alert-success">
  <p>Contact updated!</p>
</div>
<?php endif; ?>

<?php if (array_key_exists('created', $_GET)) :?>
<div class="alert alert-info">
  <p>Contact added!</p>
</div>
<?php endif; ?>

<a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-danger btn-xs pull-right btn-delete">Delete Contact</a>

<h1>Edit Contact</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?=$contact['id']; ?>" />

  <div class="form-group">
    <label for="contact_firstName">First Name</label>
    <input class="form-control" type="text" name="firstName" id="firstName" value="<? $contact['firstName']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_lastName">Last Name</label>
    <input class="form-control" type="text" name="lastName" id="lastName" value="<? $contact['lastName']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="title" id="title" value="<? $contact['title']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" type="text" name="address" id="address" value="<? $contact['address']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="city" value="<? $contact['city']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_state">State</label>
    <input class="form-control" type="text" name="state" id="state" value="<? $contact['state']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <input class="form-control" type="text" name="phone" id="phone" value="<? $contact['phone']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_notes">Notes</label>
    <textarea class="form-control" type="text" name="notes" id="notes"><?= $contact['notes']; ?> </textarea>
  </div>

<button class="btn btn-primary">Save Contact</button>

</form>

<?php include 'footer.php'; ?>