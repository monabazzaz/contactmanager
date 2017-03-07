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
    <table class="table table-hover">
      <thead>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Title</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip Code</th>
        <th>Phone</th>
        <th>Notes</th>
      </thead>
      <tbody>
        <?php foreach($contacts as $contact) : ?>
        <tr>
          <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['id']; ?></a></td>
          <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['firstName']; ?></a></td>
          <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['lastName']; ?></a></td>
          <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['title']; ?></a></td>
          <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['address']; ?></a></td>
          <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['city']; ?></a></td>
          <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['state']; ?></a></td>
          <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['zip']; ?></a></td>
          <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['phone']; ?></a></td>
          <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['notes']; ?></a></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>

<?php include 'footer.php'; ?>
