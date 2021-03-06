<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Manager</title>

<!---styles utilized linked here--->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arapey|Droid+Serif|Merriweather|Noticia+Text|Playfair+Display|Playfair+Display+SC|Quicksand" rel="stylesheet">

  </head>

  <body>
    <div class="container">
    <!---responsive navigation present on each page--->
      <nav class="navbar navbar-default">
        <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/index.php">CONTACT MANAGER</a>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/index.php">All Contacts</a></li>
            <li><a href="/new.php">Add New</a></li>
            <li><a href="/style.html">Style Guide</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <div class="row">
