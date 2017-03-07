<?php

  include 'header.php';

?>

<h1>Add Contact</h1>

<form method="POST" action="/create.php">

  <div class="form-group">
    <label for="contact_firstName">First Name</label>
    <input class="form-control" name="firstName" id="firstName" value="" placeholder="First Name" />
  </div>

  <div class="form-group">
    <label for="contact_lastName">Last Name</label>
    <input class="form-control" name="lastName" id="lastName" value="" placeholder="Last Name" />
  </div>

  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" name="title" id="title" value="" placeholder="Title" />
  </div>

  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" name="address" id="Address" value="" placeholder="Address" />
  </div>

  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" name="" id="city" value="" placeholder="city" />
  </div>

  <div class="form-group">
    <label for="contact_state">State</label>
    <input class="form-control" name="state" id="state" value="" placeholder="state" />
  </div>

  <div class="form-group">
    <label for="contact_zip">Zip Code</label>
    <input class="form-control" name="zip" id="zip" value="" placeholder="zip" />
  </div>

  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <input class="form-control" name="phone" id="phone" value="" placeholder="Phone Number" />
  </div>

  <div class="form-group">
    <label for="contact_notes">Notes</label>
    <textarea class="form-control" name="notes" id="notes" value="" placeholder="Enter notes here"> </textarea>
  </div>

  <button class="btn btn-primary">Create New Contact</button>
</form>

<?php include 'footer.php'; ?>
