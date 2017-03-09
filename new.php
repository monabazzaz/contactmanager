<?php

  include 'header.php';

?>

<h1 class="addcontact">Add Contact</h1>

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
    <select name="title" id="title" value="" class="form-control" />
      <option value="1">Select Title</option>
      <option value="2">Mrs.</option>
      <option value="3">Mr.</option>
      <option value="4">Miss</option>
      <option value="5">Ms.</option>
    </select>
  </div>

  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" name="address" id="address" value="" placeholder="Address" />
  </div>

  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" name="city" id="city" value="" placeholder="City" />
  </div>

  <div class="form-group">
    <label for="contact_state">State</label>
    <input class="form-control" name="state" id="state" value="" placeholder="State" />
  </div>

  <div class="form-group">
    <label for="contact_zip">Zip Code</label>
    <input class="form-control" name="zip" id="zip" value="" placeholder="Zip Code" />
  </div>

  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <input class="form-control" name="phone" id="phone" value="" placeholder="Phone Number" />
  </div>

  <div class="form-group">
    <label for="contact_notes">Notes</label>
    <textarea class="form-control" name="notes" id="notes" value="" placeholder="Enter notes here"></textarea>
  </div>

  <button class="btn btn-primary">Create New Contact</button>
</form>


<?php include 'footer.php'; ?>
