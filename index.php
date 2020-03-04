<?php
  include 'database.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/app.css">
  <title>Hotel</title>
</head>
<body>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>FLOOR</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(!empty($rooms)) {
            foreach ($rooms as $room) { ?>
              <tr>
                <td> <?php echo $room['id']; ?></td>
                <td> <?php echo $room['floor']; ?></td>
                <td><a class="btn btn-primary"href="#">VIEW</a></td>
                <td><a class="btn btn-success"href="#">UPDATE</a></td>
                <td><a class=" btn btn-danger"href="#">DELETE</a></td>
              </tr>
            <?php }
          }
          ?>
        </tbody>
      </table>
    </div>
</body>
</html>
