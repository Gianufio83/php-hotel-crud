<?php
  include_once 'database.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo $basePath ?>/dist/app.css">
  <title>Hotel</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg">
      <div class="navbar-brand"> Hotel Booleana</div>
      <div class="collapase navbar-collapse" id="navbarSupportedCntent">
        <ul class="navbar-nav">
          <li><a href="<?php echo $basePath ?>">Tutte le stanze - </a></li>
          <li><a href="<?php echo $basePath ?>create/create.php"> - Inserisci una stanza</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="container mt-5">
