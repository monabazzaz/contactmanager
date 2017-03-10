<!---retrieve header--->
<!---accesses database and increment ID number by one and associates new number with newly created contact--->
<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!---when user clicks save contact button an alert pops up at the top of the screen to notify user the contact was updated--->
<?php if (array_key_exists('updated', $_GET)) : ?>
<div class="alert alert-success">
  <p>Contact updated!</p>
</div>
<?php endif; ?>

<!---when user clicks create new contact button an alert pops up at the top of the screen to notify user the contact was added--->
<?php if (array_key_exists('created', $_GET)) : ?>
<div class="alert alert-info">
  <p>Contact added!</p>
</div>
<?php endif; ?>

<!---click button to delete the specific contact--->
<a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-sm pull-right btn-delete">Delete Contact</a>

<h1 class="editcontact">Edit Contact</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

<!---place on the form where user can make changes to first name--->
  <div class="form-group">
    <label for="contact_firstName">First Name</label>
    <input class="form-control" type="text" name="firstName" id="contact_firstName" value="<?= $contact['firstName']; ?>" />
  </div>

<!---place on the form where user can make changes to last name--->
  <div class="form-group">
    <label for="contact_lastName">Last Name</label>
    <input class="form-control" type="text" name="lastName" id="contact_lastName" value="<?= $contact['lastName']; ?>" />
  </div>

<!---place on the form where user can use a dropdown to change a title--->
  <div class="form-group">
    <label for="contact_title">Title</label>
    <select name="title" id="contact_title" value="<?= $contact['title']; ?>" class="form-control">
      <option value="1"<?= ($contact['title'] == 1) ? 'selected' : '' ?>>Select Title</option>
      <option value="2"<?= ($contact['title'] == 2) ? 'selected' : '' ?>>Mrs.</option>
      <option value="3"<?= ($contact['title'] == 3) ? 'selected' : '' ?>>Mr.</option>
      <option value="4"<?= ($contact['title'] == 4) ? 'selected' : '' ?>>Miss</option>
      <option value="5"<?= ($contact['title'] == 5) ? 'selected' : '' ?>>Ms.</option>
    </select>
  </div>

<!---place on the form where user can make changes to address--->
  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" type="text" name="address" id="contact_address" value="<?= $contact['address']; ?>" />
  </div>

<!---place on the form where user can make changes to city--->
  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="contact_city" value="<?= $contact['city']; ?>" />
  </div>

<!---place on the form where user can make changes to state--->
  <div class="form-group">
    <label for="contact_state">State</label>
    <input class="form-control" type="text" name="state" id="contact_state" value="<?= $contact['state']; ?>" />
  </div>

<!---place on the form where user can make changes to zip code--->
  <div class="form-group">
    <label for="contact_zip">Zip Code</label>
    <input class="form-control" type="text" name="zip" id="contact_zip" value="<?= $contact['zip']; ?>" />
  </div>

<!---place on the form where user can make changes to phone number--->
  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['phone']; ?>" />
  </div>

<!---textarea on the form where user can change notes--->
  <div class="form-group">
    <label for="contact_notes">Description</label>
    <textarea class="form-control" name="notes" id="contact_notes"><?= $contact['notes']; ?></textarea>
  </div>

<!---click button to save changes made to contact form--->
<button class="btn btn-primary">Save Contact</button>

</form>

<!---retrieve footer--->
<?php include 'footer.php'; ?>
