<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('updated', $_GET)) : ?>
<div class="alert alert-success">
  <p>Contact updated!</p>
</div>
<?php endif; ?>

<?php if (array_key_exists('created', $_GET)) : ?>
<div class="alert alert-info">
  <p>Contact added!</p>
</div>
<?php endif; ?>

<a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-sm pull-right btn-delete">Delete Contact</a>

<h1 class="editcontact">Edit Contact</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="form-group">
    <label for="contact_firstName">First Name</label>
    <input class="form-control" type="text" name="firstName" id="contact_firstName" value="<?= $contact['firstName']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_lastName">Last Name</label>
    <input class="form-control" type="text" name="lastName" id="contact_lastName" value="<?= $contact['lastName']; ?>" />
  </div>

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

  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" type="text" name="address" id="contact_address" value="<?= $contact['address']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="contact_city" value="<?= $contact['city']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_state">State</label>
    <input class="form-control" type="text" name="state" id="contact_state" value="<?= $contact['state']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_zip">Zip Code</label>
    <input class="form-control" type="text" name="zip" id="contact_zip" value="<?= $contact['zip']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['phone']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_notes">Description</label>
    <textarea class="form-control" name="notes" id="contact_notes"><?= $contact['notes']; ?></textarea>
  </div>

<button class="btn btn-primary">Save Contact</button>

</form>


<?php include 'footer.php'; ?>
