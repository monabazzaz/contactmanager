<!---retrieve header--->
<?php

  include 'header.php';

?>

<!---communicates with create.php to present user with empty contact form to fill in--->
<h1 class="addcontact">Add Contact</h1>

<!---communicates with create.php to present user with empty contact form to fill in--->
<form method="POST" action="/create.php">

<!---place on the form where user can input first name--->
  <div class="form-group">
    <label for="contact_firstName">First Name</label>
    <input class="form-control" name="firstName" id="firstName" value="" placeholder="First Name" />
  </div>

<!---place on the form where user can input last name--->
  <div class="form-group">
    <label for="contact_lastName">Last Name</label>
    <input class="form-control" name="lastName" id="lastName" value="" placeholder="Last Name" />
  </div>

<!---place on the form where user can use a dropdown to select a title--->
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

<!---place on the form where user can input address--->
  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" name="address" id="address" value="" placeholder="Address" />
  </div>

<!---place on the form where user can input city--->
  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" name="city" id="city" value="" placeholder="City" />
  </div>

<!---place on the form where user can input state--->
  <div class="form-group">
    <label for="contact_state">State</label>
    <input class="form-control" name="state" id="state" value="" placeholder="State" />
  </div>

<!---place on the form where user can input zip code--->
  <div class="form-group">
    <label for="contact_zip">Zip Code</label>
    <input class="form-control" name="zip" id="zip" value="" placeholder="Zip Code" />
  </div>

<!---place on the form where user can input phone number--->
  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <input class="form-control" name="phone" id="phone" value="" placeholder="Phone Number" />
  </div>

<!---textarea on the form where user can input notes--->
  <div class="form-group">
    <label for="contact_notes">Notes</label>
    <textarea class="form-control" name="notes" id="notes" value="" placeholder="Enter notes here"></textarea>
  </div>

<!---when clicked will establish form as new contact and will be added to contacts list--->
  <button class="btn btn-primary">Create New Contact</button>
</form>

<!---retrieve footer--->
<?php include 'footer.php'; ?>
