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
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="navbar-brand"> Hotel Booleana</div>
        <ul class="navbar-nav">
          <li><a href="<?php echo $basePath ?>">Tutte le stanze</a></li>
        </ul>
    </nav>
  </header>
  <div class="container mt-5">
