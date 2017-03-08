<?php

  include 'header.php';
  $sort = array_key_exists('sort', $_GET) ? $_GET['sort'] : null;

  if($sort !== null) {
    $contacts = $db->query('SELECT * FROM contacts' . $sort)->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
  }

?>

<?php if (array_key_exists('deleted', $_GET)) : ?>
<div class="alert alert-danger">
  <p>Contact Deleted!</p>
</div>
<?php endif; ?>

    <h1 class="allcontacts">ALL CONTACTS<span class="text-muted"><?count($contacts); ?></span></h1>
    <table class= "table table-hover" style= "width:100%">
      <thead>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <!-- <th>Title</th> -->
        <th class="mobile-none">Address</th>
        <th>City</th>
        <th>State</th>
        <th class="mobile-none">Zip Code</th>
        <th class="mobile-none">Phone</th>
        <!-- <th>Notes</th> -->
    </thead>
    <tbody>
        <?php foreach($contacts as $contact) : ?>
    <tr>
        <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['id']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['firstName']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['lastName']; ?></a></td>
        <!-- <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['title']; ?></a></td> -->
        <td class="mobile-none"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['address']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['city']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['state']; ?></a></td>
        <td class="mobile-none"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['zip']; ?></a></td>
        <td class="mobile-none"><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['phone']; ?></a></td>
        <!-- <td><a href="/edit.php?id=<?=$contact['id']; ?>"><?=$contact['notes']; ?></a></td> -->
    </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <footer>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <p>This contact manager application was created for my Spring 2017 MEJO 583 class. To access the github repository for this project as well as samples to my other work, please visit <a href="http://monabazzaz.org/portfolio">my portfolio</a>. Cheers!</p>
      </div>
      <div class="col-md-4"></div>
    </div>
  </footer>

<?php include 'footer.php'; ?>
