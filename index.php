<?php

  include 'header.php';
  $sort = array_key_exists('sort', $_GET) ? $_GET['sort'] : null;

  if($sort !== null) {
    $contacts = $db->query('SELECT * FROM contactmanager' . $sort)->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $contacts = $db->query('SELECT * FROM contactmanager')->fetchAll(PDO::FETCH_ASSOC);
  }

?>

<?php if (array_key_exists('deleted', $_GET)) : ?>
<div class="alert alert-danger">
  <p>Contact Deleted!</p>
</div>
<?php endif; ?>

    <h1>All Contacts <span class="text-muted"><?count($contacts); ?></span></h1>
    <div class="columns">
      <div class="column">ID</div>
      <div class="column">First Name</div>
      <div class="column">Last Name</div>
      <div class="column">Title</div>
      <div class="column">Address</div>
      <div class="column">City</div>
      <div class="column">State</div>
      <div class="column">Zip Code</div>
      <div class="column">Phone</div>
      <div class="column">Notes</div>
    </div>
        <?php foreach($contacts as $contact) : ?>
    <div class="columns">
      <div class="column"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['id']; ?></a></div>
      <div class="column"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['firstName']; ?></a></div>
      <div class="column"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['lastName']; ?></a></div>
      <div class="column"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['title']; ?></a></div>
      <div class="column"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['address']; ?></a></div>
      <div class="column"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['city']; ?></a></div>
      <div class="column"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['state']; ?></a></div>
      <div class="column"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['zip']; ?></a></div>
      <div class="column"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['phone']; ?></a></div>
      <div class="column"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['notes']; ?></a></div>
    </div>
      <?php endforeach; ?>

<?php include 'footer.php'; ?>
